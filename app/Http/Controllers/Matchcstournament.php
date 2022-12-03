<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Tcard1;
use App\Tcard2;
use App\Tcard3;
use App\Tcard4;
use App\Tcard5;
use App\Tcard6;


class Matchcstournament extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tcard1 = Tcard1::all()->toArray();
        $tcard2 = Tcard2::all()->toArray();
        $tcard3 = Tcard3::all()->toArray();
        $tcard4 = Tcard4::all()->toArray();
        $tcard5 = Tcard5::all()->toArray();
        $tcard6 = Tcard6::all()->toArray();


        $count1 = DB::table('treg1')->count();
        $count2 = DB::table('treg2')->count();
        $count3 = DB::table('treg3')->count();
        $count4 = DB::table('treg4')->count();
        $count5 = DB::table('treg5')->count();
        $count6 = DB::table('treg6')->count();

        return view('/match-cs-tournament', compact('count1','count2','count3','count4','count5','count6','tcard1','tcard2','tcard3','tcard4','tcard5','tcard6'));
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
