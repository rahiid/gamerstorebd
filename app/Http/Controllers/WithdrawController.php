<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use View;
use App\Withdraw;
use App\Payment_numbers;

class WithdrawController extends Controller
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


            $withdraw = Withdraw::all()->toArray();
            $withdraw = collect($withdraw)->where('user_id', $user_id)->all();

            $phone_numbers = Payment_numbers::all()->toArray();

            return view('/withdraw', compact('withdraw','phone_numbers'));



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
        $this->validate($request,[
            'ammount' => 'required',
            'sendernumber' => 'required'
        ]);

        $withdraw= new Withdraw;
        $withdraw ->user_id = $request->user_id;
        $withdraw->payment_type = $request->payment_type;
        $withdraw->ammount = $request->ammount;
        $withdraw->sendernumber = $request->sendernumber;
        $withdraw->save();

        return redirect('/greetings/thankyou4');
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
    public function update(Request $request, $id)
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
