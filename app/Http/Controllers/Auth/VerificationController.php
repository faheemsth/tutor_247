<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
    public function show(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {


            $permissions= DB::table('permissions')
            ->leftjoin('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
            ->where('role_id',Auth::user()->role_id)
            ->get();

       foreach($permissions as $permission){
           if($permission->name =='manage_role' || $permission->name =='manage_permission' || $permission->name =='manage_user' || $permission->name =='super_admin_dashboard' && Auth::user()->role_id == "1")
           {
               return redirect('supper_admin_dashboard');
           }elseif($permission->name =='manage_role' || $permission->name =='manage_permission' || $permission->name =='manage_user' || $permission->name =='super_admin_dashboard' && Auth::user()->role_id == "2")
           {
               return redirect('admin_dashboard');
           }elseif($permission->name =='manage_role' || $permission->name =='manage_permission' || $permission->name =='manage_user' || $permission->name =='tutor_dashboard' && Auth::user()->role_id == "3")
           {
               return redirect('tutor_dashboard');
           }elseif($permission->name =='manage_role' || $permission->name =='manage_permission' || $permission->name =='manage_user' || $permission->name =='student_dashboard' && Auth::user()->role_id == "4")
           {
            return redirect('student_dashboard');
           }
        }
        } else {
            session()->put('resent', 'This is a message!');
            return view('verification.notice');
        }
    }

}
