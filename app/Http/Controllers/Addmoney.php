<?php

namespace App\Http\Controllers;
use App\RegisterClient;
use Illuminate\Http\Request;
use App\Addcash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Payment_numbers;
use Illuminate\View\View;


class Addmoney extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        if(Auth::check())
        {

            $phone_numbers = Payment_numbers::all()->toArray();

            return View('addmoney',compact('phone_numbers'));

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
            'transactionid' => 'required',
            'sendernumber' => 'required'
        ]);


        $Addmoney = new Addcash;
        $Addmoney->ammount = $request->ammount;
        $Addmoney->transactionid = $request->transactionid;
        $Addmoney->sendernumber = $request->sendernumber;
        $Addmoney->save();

        return redirect('/');
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
