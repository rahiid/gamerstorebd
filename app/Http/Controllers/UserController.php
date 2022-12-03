<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use View;
use App\User;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
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
            return View::make('user');
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
    public function update1(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->name = Request::input('name');
        $user->save();

        return redirect('/user');

    }
    public function update2(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->email = Request::input('email');

        $user->save();

        return redirect('/user');

    }
    public function update3(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->number = Request::input('number');

        $user->save();
        return redirect('/user');

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
