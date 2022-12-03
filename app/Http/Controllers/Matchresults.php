<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tcard1;
use App\Tcard2;
use App\Tcard3;
use App\Tcard4;
use App\Tcard5;
use App\Tcard6;

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


class Matchresults extends Controller
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
        $tcard1 = Tcard1::all()->toArray();
        $tcard2 = Tcard2::all()->toArray();
        $tcard3 = Tcard3::all()->toArray();
        $tcard4 = Tcard4::all()->toArray();
        $tcard5 = Tcard5::all()->toArray();
        $tcard6 = Tcard6::all()->toArray();


        return view('/matchresults', compact('tcard1','tcard2','tcard3','tcard4','tcard5','tcard6','card1','card2','card3','card4','card5','card6','card7','card8','card9','card10','card11','card12','card13','card14','card15','card16','card17','card18','card19','card20'));
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
