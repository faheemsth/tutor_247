<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ParentController extends Controller
{

    public function index(){
        $students=User::where('role_id','4')->where('parent_id',Auth::id())->get();
        return view('pages.dashboard.parentdashboard',compact('students'));
    }
    public function parent_profile(){
        return view('pages.dashboard.profileparent');
    }

    public function parent_update(){
        return view('pages.dashboard.profiledetailparent');
    }

    public function update_parent_post(Request $request){
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();

        // Move the uploaded image to the 'public/images' directory
        $image->move(public_path('images'), $imageName);

        // Create or retrieve the current user
        $user = User::find(Auth::id());

        // Update user attributes
        $user->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'phone' => $request->input('phone'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),
            'facebook_link' => $request->input('facebook_link'),
            'linkedin_link' => $request->input('linkedin_link'),
            'twitter_link' => $request->input('twitter_link'),
            'profile_description' => $request->input('profile_description'),
            'address' => $request->input('address'),
            'image' => 'images/' . $imageName,
        ]);
        return redirect('parent_profile');
    }
    public function parent_add_student(Request $request){

            $user=new User();
            $user->first_name = $request->input('first_name');
            $user->last_name = $request->input('last_name');
            $user->email = $request->input('email');
            $user->dob ='2000-01-01';
            $user->phone ='123456789';
            $user->password =Hash::make(1234);
            $user->facebook_link ='https://www.google.com';
            $user->linkedin_link ='https://www.google.com';
            $user->twitter_link ='https://www.google.com';
            $user->role_id =4;
            $user->profile_description ='demo';
            $user->image ='pic.jpg';
            $user->address ='test';
            $user->parent_id = Auth::id();
            $user->save();

        return redirect('parent_profile');
    }

}
