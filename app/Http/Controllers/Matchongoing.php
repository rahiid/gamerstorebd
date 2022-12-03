<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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

use App\Reg1;


class Matchongoing extends Controller
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



        if (Auth::check()) {
            $userid = Auth::user()->id;
            if (DB::table('reg1')->where('user_id', $userid)->exists()) {
                $gcode1 = DB::table('card1')->where('status', 'ongoing')->value('gamecode');
            //yes: $id exits in array
            } else {
                $gcode1 = '';
            }
        } else {
            $gcode1 = '';
        }

        if (Auth::check()) {
            $userid = Auth::user()->id;
            if (DB::table('reg2')->where('user_id', $userid)->exists()) {
                $gcode2 = DB::table('card2')->where('status', 'ongoing')->value('gamecode');
            //yes: $id exits in array
            } else {
                $gcode2 = '';
            }
        } else {
            $gcode2 = '';
        }


        if (Auth::check()) {
            $userid = Auth::user()->id;
            if (DB::table('reg3')->where('user_id', $userid)->exists()) {
                $gcode3 = DB::table('card3')->where('status', 'ongoing')->value('gamecode');
            //yes: $id exits in array
            } else {
                $gcode3 = '';
            }
        } else {
            $gcode3 = '';
        }


        if (Auth::check()) {
            $userid = Auth::user()->id;

            if (DB::table('reg4')->where('user_id', $userid)->exists()) {
                $gcode4 = DB::table('card4')->where('status', 'ongoing')->value('gamecode');
            //yes: $id exits in array
            } else {
                $gcode4 = '';
            }
        } else {
            $gcode4 = '';
        }

        if (Auth::check()) {
            $userid = Auth::user()->id;
            if (DB::table('reg5')->where('user_id', $userid)->exists()) {
                $gcode5 = DB::table('card5')->where('status', 'ongoing')->value('gamecode');
            //yes: $id exits in array
            } else {
                $gcode5 = '';
            }
        } else {
            $gcode5 = '';
        }


        if (Auth::check()) {
            $userid = Auth::user()->id;
            if (DB::table('reg6')->where('user_id', $userid)->exists()) {
                $gcode6 = DB::table('card6')->where('status', 'ongoing')->value('gamecode');
            //yes: $id exits in array
            } else {
                $gcode6 = '';
            }
        } else {
            $gcode6 = '';
        }

        if (Auth::check()) {
            $userid = Auth::user()->id;
            if (DB::table('reg7')->where('user_id', $userid)->exists()) {
                $gcode7 = DB::table('card7')->where('status', 'ongoing')->value('gamecode');
            //yes: $id exits in array
            } else {
                $gcode7 = '';
            }
        } else {
            $gcode7 = '';
        }

        if(Auth::check())
        {
            $userid = Auth::user()->id;
            if (DB::table('reg8')->where('user_id', $userid)->exists()) {
                $gcode8 = DB::table('card8')->where('status', 'ongoing')->value('gamecode');
                //yes: $id exits in array
            }
            else{
                $gcode8 = '';
            }
        }
        else{
            $gcode8 = '';
        }


        if(Auth::check())
        {
            $userid = Auth::user()->id;
            if (DB::table('reg9')->where('user_id', $userid)->exists()) {
                $gcode9 = DB::table('card9')->where('status', 'ongoing')->value('gamecode');
                //yes: $id exits in array
            }
            else{
                $gcode9 = '';
            }
        }
        else{
            $gcode9 = '';
        }

        if(Auth::check())
        {
            $userid = Auth::user()->id;
            if (DB::table('reg10')->where('user_id', $userid)->exists()) {
                $gcode10 = DB::table('card10')->where('status', 'ongoing')->value('gamecode');
                //yes: $id exits in array
            }
            else{
                $gcode10 = '';
            }
        }
        else{
            $gcode10 = '';
        }


        if(Auth::check())
        {
            $userid = Auth::user()->id;
            if (DB::table('reg11')->where('user_id', $userid)->exists()) {
                $gcode11 = DB::table('card11')->where('status', 'ongoing')->value('gamecode');
                //yes: $id exits in array
            }
            else{
                $gcode11 = '';
            }
        }
        else{
            $gcode11 = '';
        }




        if(Auth::check())
        {
            $userid = Auth::user()->id;
            if (DB::table('reg12')->where('user_id', $userid)->exists()) {
                $gcode12 = DB::table('card12')->where('status', 'ongoing')->value('gamecode');
                //yes: $id exits in array
            }
            else{
                $gcode12 = '';
            }
        }
        else{
            $gcode12 = '';
        }

        if(Auth::check())
        {
            $userid = Auth::user()->id;
            if (DB::table('reg13')->where('user_id', $userid)->exists()) {
                $gcode13 = DB::table('card13')->where('status', 'ongoing')->value('gamecode');
                //yes: $id exits in array
            }
            else{
                $gcode13 = '';
            }
        }
        else{
            $gcode13 = '';
        }


        if(Auth::check())
        {
            $userid = Auth::user()->id;
            if (DB::table('reg14')->where('user_id', $userid)->exists()) {
                $gcode14 = DB::table('card14')->where('status', 'ongoing')->value('gamecode');
                //yes: $id exits in array
            }
            else{
                $gcode14 = '';
            }
        }
        else{
            $gcode14 = '';
        }



        if(Auth::check())
        {
            $userid = Auth::user()->id;
            if (DB::table('reg15')->where('user_id', $userid)->exists()) {
                $gcode15 = DB::table('card15')->where('status', 'ongoing')->value('gamecode');
                //yes: $id exits in array
            }
            else{
                $gcode15 = '';
            }
        }
        else{
            $gcode15 = '';
        }


        if(Auth::check())
        {
            $userid = Auth::user()->id;
            if (DB::table('reg16')->where('user_id', $userid)->exists()) {
                $gcode16 = DB::table('card16')->where('status', 'ongoing')->value('gamecode');
                //yes: $id exits in array
            }
            else{
                $gcode16 = '';
            }
        }
        else{
            $gcode16 = '';
        }



        if(Auth::check())
        {
            $userid = Auth::user()->id;
            if (DB::table('reg17')->where('user_id', $userid)->exists()) {
                $gcode17 = DB::table('card17')->where('status', 'ongoing')->value('gamecode');
                //yes: $id exits in array
            }
            else{
                $gcode17 = '';
            }
        }
        else{
            $gcode17 = '';
        }

        if(Auth::check())
        {
            $userid = Auth::user()->id;
            if (DB::table('reg18')->where('user_id', $userid)->exists()) {
                $gcode18 = DB::table('card18')->where('status', 'ongoing')->value('gamecode');
                //yes: $id exits in array
            }
            else{
                $gcode18 = '';
            }
        }
        else{
            $gcode18 = '';
        }

        if(Auth::check())
        {
            $userid = Auth::user()->id;
            if (DB::table('reg19')->where('user_id', $userid)->exists()) {
                $gcode19 = DB::table('card19')->where('status', 'ongoing')->value('gamecode');
                //yes: $id exits in array
            }
            else{
                $gcode19 = '';
            }
        }
        else{
            $gcode19 = '';
        }


        if(Auth::check())
        {
            $userid = Auth::user()->id;
            if (DB::table('reg20')->where('user_id', $userid)->exists()) {
                $gcode20 = DB::table('card20')->where('status', 'ongoing')->value('gamecode');
                //yes: $id exits in array
            }
            else{
                $gcode20 = '';
            }
        }
        else{
            $gcode20 = '';
        }



        if(Auth::check())
        {
            $userid = Auth::user()->id;
            if (DB::table('treg1')->where('user_id', $userid)->exists()) {
                $tgcode1 = DB::table('tcard1')->where('status', 'ongoing')->value('gamecode');
                //yes: $id exits in array
            }
            else{
                $tgcode1 = '';
            }
        }
        else{
            $tgcode1 = '';
        }

        if(Auth::check())
        {
            $userid = Auth::user()->id;
            if (DB::table('treg2')->where('user_id', $userid)->exists()) {
                $tgcode2 = DB::table('tcard2')->where('status', 'ongoing')->value('gamecode');
                //yes: $id exits in array
            }
            else{
                $tgcode2 = '';
            }
        }
        else{
            $tgcode2 = '';
        }

        if(Auth::check())
        {
            $userid = Auth::user()->id;
            if (DB::table('treg3')->where('user_id', $userid)->exists()) {
                $tgcode3 = DB::table('tcard3')->where('status', 'ongoing')->value('gamecode');
                //yes: $id exits in array
            }
            else{
                $tgcode3 = '';
            }
        }
        else{
            $tgcode3 = '';
        }


        if(Auth::check())
        {
            $userid = Auth::user()->id;
            if (DB::table('treg4')->where('user_id', $userid)->exists()) {
                $tgcode4 = DB::table('tcard4')->where('status', 'ongoing')->value('gamecode');
                //yes: $id exits in array
            }
            else{
                $tgcode4 = '';
            }
        }
        else{
            $tgcode4 = '';
        }


        if(Auth::check())
        {
            $userid = Auth::user()->id;
            if (DB::table('treg5')->where('user_id', $userid)->exists()) {
                $tgcode5 = DB::table('tcard5')->where('status', 'ongoing')->value('gamecode');
                //yes: $id exits in array
            }
            else{
                $tgcode5 = '';
            }
        }
        else{
            $tgcode5 = '';
        }

        if(Auth::check())
        {
            $userid = Auth::user()->id;
            if (DB::table('treg6')->where('user_id', $userid)->exists()) {
                $tgcode6 = DB::table('tcard6')->where('status', 'ongoing')->value('gamecode');
                //yes: $id exits in array
            }
            else{
                $tgcode6 = '';
            }
        }
        else{
            $tgcode6 = '';
        }

        return view('/matchongoing', compact('tgcode1','tgcode2','tgcode3','tgcode4','tgcode5','tgcode6','gcode1','gcode2','gcode3','gcode4','gcode5','gcode6','gcode7','gcode8','gcode9','gcode10','gcode11','gcode12','gcode13','gcode14','gcode15','gcode16','gcode17','gcode18','gcode19','gcode20','tcard1','tcard2','tcard3','tcard4','tcard5','tcard6','card1','card2','card3','card4','card5','card6','card7','card8','card9','card10','card11','card12','card13','card14','card15','card16','card17','card18','card19','card20'));

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
