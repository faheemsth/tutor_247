<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TutorExperienceController extends Controller
{
    public function update_tutor()
    {
        return view('pages.dashboard.profiledetails');
    }

    public function update_tutor_post(Request $request)
    {

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
            'password' => Hash::make($request->input('password')), // Hash the password
            'phone' => $request->input('phone'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),
            'facebook_link' => $request->input('facebook_link'),
            'linkedin_link' => $request->input('linkedin_link'),
            'twitter_link' => $request->input('twitter_link'),
            'profile_description' => $request->input('profile_description'),
            'address' => $request->input('address'),
            'image' => 'images/' . $imageName, // Store the image path
        ]);
        return redirect('tutor_dashboard');
    }

    public function tutor_profile()
    {
        return view('pages.dashboard.profile');
    }

    public function tutor_payments_post()
    {
        return view('pages.dashboard.payments');
    }


}
