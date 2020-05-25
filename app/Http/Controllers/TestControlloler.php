<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;

class TestControlloler extends Controller
{
    public function tests(){
    	$flight = Flight::where('number', 350)->first();
    	$flight->number = 900;
    	$flight->refresh();
    	return view('index', compact('flight'));
    }
}
