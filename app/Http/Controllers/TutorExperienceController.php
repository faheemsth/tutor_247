<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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

    public function Chat()
    {
        $chats=Transaction::where('tutor_id', Auth::id())->with('user')->get();
        return view('pages.dashboard.chat', compact('chats'));
    }
    public function verify_transaction($id, $id2)
    {
        $chats = Transaction::where('tutor_id', $id)->where('id', $id2)->first();
        $data = array('name' => $chats->user->first_name);

        Mail::send(['text' => 'pages/dashboard/mail'], $data, function ($message) use ($chats) {
            $message->to($chats->user->email, $chats->user->first_name)->subject('Dear Student get Your Link and join meeting');
            $message->from('sherazaleem015@gmail.com', 'tutor247');
        });
        if ($chats && $chats->status == 0) {
            $chats->update(['status' => 1]);
            return back();
        }
    }





}
