<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ParentController extends Controller
{

    public function index()
    {
        $students = User::where('role_id', '4')->where('parent_id', Auth::id())->get();
        return view('pages.dashboard.parentdashboard', compact('students'));
    }
    public function parent_profile()
    {
        return view('pages.dashboard.profileparent');
    }

    public function parent_update()
    {
        return view('pages.dashboard.profiledetailparent');
    }

    public function update_parent_post(Request $request)
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
    public function parent_add_student(Request $request)
    {

        $user = new User();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->dob = '2000-01-01';
        $user->phone = '123456789';
        $user->password = Hash::make(1234);
        $user->facebook_link = 'https://www.google.com';
        $user->linkedin_link = 'https://www.google.com';
        $user->twitter_link = 'https://www.google.com';
        $user->role_id = 4;
        $user->profile_description = 'demo';
        $user->image = 'pic.jpg';
        $user->address = 'test';
        $user->parent_id = Auth::id();
        $user->save();

        return redirect('parent_profile');
    }

    public function show_student($id)
    {
        $student_profile = User::where('id', $id)->first();
        return view('pages.dashboard.profilestudents', compact('student_profile'));
    }



    public function create()
    {
        // Get Zoom API credentials from the .env file
$apiKey = 'Gsslcx5S1aX_fixXxMYuw';
$apiSecret = "P4lm18KySqTxcCeK7DCkGsqFRbLs8YUZ";

// Set the Zoom API endpoint
$endpoint = 'https://api.zoom.us/v2/users/me/meetings'; // Replace 'me' with your user ID or email if necessary

// Create a new Zoom meeting data
$data = [
    'topic' => 'My Zoom Meeting',
    'type' => 2, // 2 indicates a scheduled meeting
];

// Convert the data to JSON format
$jsonData = json_encode($data);

// Initialize cURL session
$ch = curl_init($endpoint);

// Set cURL options
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $apiKey,
    'Content-Type: application/json',
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

// Disable SSL certificate verification (for testing purposes only)
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

// Execute cURL session and get the response
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'cURL Error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Decode and print the response
$responseData = json_decode($response, true);
print_r($responseData);

    }
}
