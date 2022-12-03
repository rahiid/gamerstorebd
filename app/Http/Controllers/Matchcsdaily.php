<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Card1;
use App\Card2;
use App\Card3;
use App\Card4;
use App\Card5;
use App\Card6;
use App\Card7;
use App\Card8;
use App\Card9;
use App\Card10;
use App\Card11;
use App\Card12;
use App\Card13;
use App\Card14;
use App\Card15;
use App\Card16;
use App\Card17;
use App\Card18;
use App\Card19;
use App\Card20;

use App\Reg1;
use App\Reg2;
use App\Reg3;
use App\Reg4;
use App\Reg5;
use App\Reg6;
use App\Reg7;
use App\Reg8;
use App\Reg9;
use App\Reg10;
use App\Reg11;
use App\Reg12;
use App\Reg13;
use App\Reg14;
use App\Reg15;
use App\Reg16;
use App\Reg17;
use App\Reg18;
use App\Reg19;
use App\Reg20;


class Matchcsdaily extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $card1 = Card1::all()->toArray();
        $card2 = Card2::all()->toArray();
        $card3 = Card3::all()->toArray();
        $card4 = Card4::all()->toArray();
        $card5 = Card5::all()->toArray();
        $card6 = Card6::all()->toArray();
        $card7 = Card7::all()->toArray();
        $card8 = Card8::all()->toArray();
        $card9 = Card9::all()->toArray();
        $card10 = Card10::all()->toArray();
        $card11 = Card11::all()->toArray();
        $card12 = Card12::all()->toArray();
        $card13 = Card13::all()->toArray();
        $card14 = Card14::all()->toArray();
        $card15 = Card15::all()->toArray();
        $card16 = Card16::all()->toArray();
        $card17 = Card17::all()->toArray();
        $card18 = Card18::all()->toArray();
        $card19 = Card19::all()->toArray();
        $card20 = Card20::all()->toArray();

        $count1 = DB::table('reg1')->count();
        $count2 = DB::table('reg2')->count();
        $count3 = DB::table('reg3')->count();
        $count4 = DB::table('reg4')->count();
        $count5 = DB::table('reg5')->count();
        $count6 = DB::table('reg6')->count();
        $count7 = DB::table('reg7')->count();
        $count8 = DB::table('reg8')->count();
        $count9 = DB::table('reg9')->count();
        $count10 = DB::table('reg10')->count();
        $count11 = DB::table('reg11')->count();
        $count12 = DB::table('reg12')->count();
        $count13 = DB::table('reg13')->count();
        $count14 = DB::table('reg14')->count();
        $count15 = DB::table('reg15')->count();
        $count16 = DB::table('reg16')->count();
        $count17 = DB::table('reg17')->count();
        $count18 = DB::table('reg18')->count();
        $count19 = DB::table('reg19')->count();
        $count20 = DB::table('reg20')->count();



        return view('/match-cs-daily', compact('count1','count2','count3','count4','count5','count6','count7','count8','count9','count10','count11','count12','count13','count14','count15','count16','count17','count18','count19','count20','card1','card2','card3','card4','card5','card6','card7','card8','card9','card10','card11','card12','card13','card14','card15','card16','card17','card18','card19','card20'));

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
