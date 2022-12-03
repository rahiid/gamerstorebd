<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reg6;
use App\RegisterClient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class Reg6controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reg6 = Reg6::all()->toArray();
        $csorregular = DB::table('card6')->where('status', 'upcoming')->value('cs_or_regular');

        return view('/match-reg.reg6', compact('reg6','csorregular'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reg = new Reg6;
        $reg->user_id = $request->user_id;
        $reg->name = $request->name;
        $reg->team_type = $request->team_type;
        $reg->game_id_p1 = $request->game_id_p1;
        $reg->game_id_p2 = $request->game_id_p2;
        $reg->game_id_p3 = $request->game_id_p3;
        $reg->game_id_p4 = $request->game_id_p4;
        $reg->userid_p1 = $request->userid_p1;
        $reg->userid_p2 = $request->userid_p2;
        $reg->userid_p3 = $request->userid_p3;
        $reg->userid_p4 = $request->userid_p4;
        $reg->save();

        $userid = $request->input('user_id');
        $cardvalue = DB::table('card6')->where('status', 'upcoming')->value('entry_fee');

        $acc = DB::table('users')->where('id', $userid)->value('wallet');
        $newacc =  ($acc - $cardvalue);

        DB::table('users')->where('id', $userid)->update(array('wallet' => $newacc));

        return redirect('/match-reg/reg6');
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
