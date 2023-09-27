<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function book_tutor_post(Request $request)
    {
       $Transaction = new Transaction();
       $Transaction->user_id = Auth::id();
       $Transaction->amount = 20;
       $Transaction->tutor_id = $request->tutor_id ;
       $Transaction->subject = $request->subject;
       $Transaction->duration = $request->duration;
       $Transaction->country = $request->country;
       $Transaction->address1 = $request->address1;
       $Transaction->address2 = $request->address2;
       $Transaction->city = $request->city;
       $Transaction->postcode = $request->postcode;
       $Transaction->account_holder_name = $request->account_holder_name;
       $Transaction->card_number = $request->card_number;
       $Transaction->card_type = $request->card_type;
       $Transaction->card_expire = $request->card_expire;
       $Transaction->cvc = $request->cvc;
       $Transaction->save();

       return redirect('student_dashboard');

    }
}
