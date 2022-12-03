<?php

namespace App\Http\Controllers;

use App\Addcash;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use View;

use DB;


class WalletController extends Controller
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


            $wallet = Addcash::all()->toArray();
            $wallet = collect($wallet)->where('user_id', $user_id)->all();

            $order = Order::all()->toArray();
            $order = collect($order)->where('user_id', $user_id)->all();

            
            $sum = Order::where('user_id', $user_id)->where('status', 'Added')->sum('ammount');
            //$wallet = Addcash::all()->toArray();

            //return $wallet['user_id'] == 1;
            return view('/wallet', compact('wallet','order','sum'));

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
        //
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
