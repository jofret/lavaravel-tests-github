<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;

class TestControlloler extends Controller
{
    public function tests(){
    	$flight = Flight::orderBy('id','ASC')->first();
    	$freshFlight = $flight->fresh();
    	return view('index', compact('flight','freshFlight'));
    }
}
