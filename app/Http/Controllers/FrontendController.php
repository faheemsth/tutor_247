<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //showing index page
    public function index(){
       return view('frontend/home');
    }

    public function findTutor(){
        $tutors=User::where('role_id','3')->get();
        return view('frontend/find-tutor',compact('tutors'));
    }

    public function studentApplySteps(){
        return view('frontend/student-apply-steps');
    }

    public function tutorApplySteps(){
        return view('frontend/tutor-apply-steps');
    }

    public function organizationApplySteps(){
        return view('frontend/organization-apply-steps');
    }

    public function prices(){
        return view('frontend/prices');
    }

    public function blogs(){
        return view('frontend/blogs');
    }

    public function faq(){
        return view('frontend/faqs');
    }
    public function tutor_profile($id){
        $tutor=User::find($id);
        return view('pages.dashboard.profiletutor',compact('tutor'));
    }

}
