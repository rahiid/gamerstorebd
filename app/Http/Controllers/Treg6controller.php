<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Treg6;
use App\RegisterClient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class Treg6controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treg6 = Treg6::all()->toArray();
        $csorregular = DB::table('tcard6')->where('status', 'upcoming')->value('cs_or_regular');

        return view('/tournament-reg.treg6', compact('treg6','csorregular'));
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
        $treg = new Treg6;
        $treg->user_id = $request->user_id;
        $treg->name = $request->name;
        $treg->team_type = $request->team_type;
        $treg->game_id_p1 = $request->game_id_p1;
        $treg->game_id_p2 = $request->game_id_p2;
        $treg->game_id_p3 = $request->game_id_p3;
        $treg->game_id_p4 = $request->game_id_p4;
        $treg->userid_p1 = $request->userid_p1;
        $treg->userid_p2 = $request->userid_p2;
        $treg->userid_p3 = $request->userid_p3;
        $treg->userid_p4 = $request->userid_p4;
        $treg->save();

        $userid = $request->input('user_id');
        $cardvalue = DB::table('tcard6')->where('status', 'upcoming')->value('entry_fee');

        $acc = DB::table('users')->where('id', $userid)->value('wallet');
        $newacc =  ($acc - $cardvalue);

        DB::table('users')->where('id', $userid)->update(array('wallet' => $newacc));

        return redirect('/tournament-reg/treg6');
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
