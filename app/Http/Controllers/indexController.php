<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\popup;

class indexController extends Controller
{
    public function index(){
        $popup = popup::all()->toArray();


        return view('index', compact('popup'));

    }


}

