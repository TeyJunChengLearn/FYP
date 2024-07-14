<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class NearbyController extends Controller
{
    public function index(){
        $locations=Location::all();
        return view('map',compact('locations'));
    }
}
