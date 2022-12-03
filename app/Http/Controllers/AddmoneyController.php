<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Addcash;
use Illuminate\View\View;
use App\Payment_numbers;

class AddmoneyController extends Controller
{
    public function index(){
        if(Auth::check())
        {

            $phone_numbers = Payment_numbers::all()->toArray();

            return View::make('addmoney',compact('phone_numbers'));
        }

        return Redirect::route('login')->withInput()->with('errmessage', 'Please Login to access restricted area.');
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'ammount' => 'required',
            'transactionid' => 'required',
            'sendernumber' => 'required'
        ]);

        $addcash= new Addcash;
        $addcash ->user_id = $request->user_id;
        $addcash->payment_type = $request->payment_type;
        $addcash->ammount = $request->ammount;
        $addcash->transactionid = $request->transactionid;
        $addcash->sendernumber = $request->sendernumber;
        $addcash->save();

        return redirect('/greetings/thankyou3');
    }
}
