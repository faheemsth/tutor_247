<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Controllers\DB;
use App\Models\User;
use Auth;
use DataTables;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Show the users dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::get();

        return view('user/users', ['users' => $users]);
    }


    public function create()
    {
        return view('/user.adduser');
    }


    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'required',
            'email' => 'required'
        ]);

        $newuser = User::create($request->all());
        // dd($newuser);
        return redirect('/users');
    }

    public function edit($id)
    {
        $user = user::where('id', $id)->first();
        return view('user/edituser', ['users' => $user]);
    }

    public function update(Request $request, $id)
    {

        // dd($request);
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'required',
            'email' => 'required'
        ]);

        $edituser = User::where('id', $id)->first();
        $edituser->update($request->all());
        return redirect('/users');
        // dd($id);

    }

    public function delete($id)
    {
        $deleteuser = User::where('id', $id)->first();
        $deleteuser->delete();
        return redirect('/users');
    }
}
//     /**
//      * Show User List
//      *
//      * @param Request $request
//      * @return mixed
//      */
//     // public function getUserList(Request $request): mixed
//     // {
//     //     $data = User::get();
//     //     $hasManageUser = Auth::user()->can('manage_user');

//     //     return Datatables::of($data)
//     //         ->addColumn('roles', function ($data) {
//     //             $roles = $data->getRoleNames()->toArray();
//     //             $badge = '';
//     //             if ($roles) {
//     //                 $badge = implode(' , ', $roles);
//     //             }
//     //         var_dump($data);

//     //             return $badge;
//     //         })
//     //         ->addColumn('status', function ($data) {
//     //             $roles = $data->getAllPermissions();
//     //             $badges = '';
//     //             foreach ($roles as $key => $role) {
//     //                 $badges .= '<div class="container">
//     //                 <label class="switch" for="checkbox">
//     //                   <input type="checkbox" id="checkbox" />
//     //                   <div class="slider round"></div>
//     //                 </label>
//     //               </div>';
//     //             }

//     //             return $badges;
//     //         })
//     //         ->addColumn('action', function ($data) use ($hasManageUser) {
//     //             $output = '';
//     //             if ($data->name == 'Super Admin') {
//     //                 return '';
//     //             }
//     //             if ($hasManageUser) {
//     //                 $output = '<div class="table-actions">
//     //                             <a href="' . url('user/' . $data->id) . '" ><i class="ik ik-edit-2 f-16 mr-15 text-green"></i></a>
//     //                             <a href="' . url('user/delete/' . $data->id) . '"><i class="ik ik-trash-2 f-16 text-red"></i></a>
//     //                         </div>';
//     //             }

//     //             return $output;
//     //         })
//     //         ->rawColumns(['roles', 'permissions', 'action'])
//     //         ->make(true);
//     // }

//     /**
//      * User Create
//      *
//     //  * @return mixed
//      */
//     // public function create(): mixed
//     // {
//     //     try {
//     //         $roles = Role::pluck('name', 'id');

//     //         return view('user/create-user', compact('roles'));
//     //     } catch (\Exception $e) {
//     //         return redirect()->back()->with('error', $e->getMessage());
//     //     }
//     // }

//     /**
//      * Store User
//      *
//      * @param UserRequest $request
//      * @return \Illuminate\Http\RedirectResponse
//      */
//     public function store(UserRequest $request): RedirectResponse
//     {
//         try {
//             // store user information
//             $user = User::create([
//                 'name' => $request->name,
//                 'email' => $request->email,
//                 'password' => $request->password,
//             ]);


//             if ($user) {
//                 // assign new role to the user
//                 $user->syncRoles($request->role);

//                 return redirect('user/user')->with('success', 'New user created!');
//             }

//             return redirect('user/users')->with('error', 'Failed to create new user! Try again.');
//         } catch (\Exception $e) {
//             $bug = $e->getMessage();

//             return redirect()->back()->with('error', $bug);
//         }
//     }

//     /**
//      * Edit User
//      *
//      * @param int $id
//      * @return mixed
//      */
//     public function edit($id): mixed
//     {
//         try {
//             $user = User::with('roles', 'permissions')->find($id);

//             if ($user) {
//                 $user_role = $user->roles->first();
//                 $roles = Role::pluck('name', 'id');

//                 return view('user/user-edit', compact('user', 'user_role', 'roles'));
//             }

//             return redirect('404');
//         } catch (\Exception $e) {
//             $bug = $e->getMessage();

//             return redirect()->back()->with('error', $bug);
//         }
//     }

//     /**
//      * Update User
//      *
//      * @param Request $request
//      * @return \Illuminate\Http\RedirectResponse
//      */
//     public function update(Request $request): RedirectResponse
//     {
//         // update user info
//         $validator = Validator::make($request->all(), [
//             'id' => 'required',
//             'name' => 'required | string ',
//             'email' => 'required | email',
//             'role' => 'required',
//         ]);

//         // check validation for password match
//         if (isset($request->password)) {
//             $validator = Validator::make($request->all(), [
//                 'password' => 'required | confirmed',
//             ]);
//         }

//         if ($validator->fails()) {
//             return redirect()->back()->withInput()->with('error', $validator->messages()->first());
//         }

//         try {
//             if ($user = User::find($request->id)) {
//                 $payload = [
//                     'name' => $request->name,
//                     'email' => $request->email,
//                 ];
//                 // update password if user input a new password
//                 if (isset($request->password) && $request->password) {
//                     $payload['password'] = $request->password;
//                 }

//                 $update = $user->update($payload);
//                 // sync user role
//                 $user->syncRoles($request->role);

//                 return redirect()->back()->with('success', 'User information updated succesfully!');
//             }

//             return redirect()->back()->with('error', 'Failed to update user! Try again.');
//         } catch (\Exception $e) {
//             $bug = $e->getMessage();

//             return redirect()->back()->with('error', $bug);
//         }
//     }

//     /**
//      * Delete User
//      *
//      * @param int $id
//      * @return \Illuminate\Http\RedirectResponse
//      */
//     public function delete($id): RedirectResponse
//     {
//         if ($user = User::find($id)) {
//             $user->delete();

//             return redirect('users')->with('success', 'User removed!');
//         }

//         return redirect('user/users')->with('error', 'User not found');
//     }
// }
