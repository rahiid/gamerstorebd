<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use View;

use App\Order;
use App\User;
use Illuminate\Support\Facades\Mail;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check())
        {

            $user_id = Auth::user()->id;
            //$wallet['wallet'] = DB::table('topups')->where('user_id','=', $id)->get()->toArray();


            $orders = Order::all()->toArray();
            $orders = collect($orders)->where('user_id', $user_id)->all();
            //$wallet = Addcash::all()->toArray();

            //return $wallet['user_id'] == 1;
            return view('/orders', compact('orders'));

        }

        return Redirect::route('login')->withInput()->with('errmessage', 'Please Login to access restricted area.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $Orders= new Order;
            $Orders ->user_id = $request->user_id;
            $Orders ->category = $request->category;
            $Orders ->account_type = $request->account_type;
            $Orders->email_number = $request->email_number;
            $Orders->gameid = $request->gameid;
            $Orders->password = $request->password;
            $Orders->product_name = $request->product_name;
            $Orders->payment_method = $request->payment_method;
            $Orders->payment_type = $request->payment_type;
            $Orders->ammount = $request->ammount;
            $Orders->transaction_id = $request->transaction_id;
            $Orders->sender_number = $request->sender_number;

            $Orders->save();



            $userid = $request->input('user_id');
            $productvalue = $request->input('price');

            $acc = DB::table('users')->where('id', $userid)->value('wallet');
            $newacc =  ($acc - $productvalue);

            $walletcheck = $request->input('payment_method');

            if ($walletcheck == 'Wallet_Payment') {
                DB::table('users')->where('id', $userid)->update(array('wallet' => $newacc));
            }

            $uemail = Auth::user()->email;
            $uname = Auth::user()->name;

            $inputs = [
                'product_name'=> $request->input('product_name'),
                'ammount'=> $request->input('price'),
                'username'=> $request->input('username')
            ];

            Mail::send('emails.order',$inputs,function($mail) use($inputs,$uemail,$uname){

                $mail->from('info@gamerstorebd.com',"GAMERSTOREBD",)
                ->to($uemail,$uname)
                ->subject("GAMERSTOREBD Product Order");

            });

            return redirect('/greetings/thankyou1');
        }

        return Redirect::route('login')->withInput()->with('errmessage', 'Please Login to access restricted area.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
