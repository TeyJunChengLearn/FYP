<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class DesignTestController extends Controller
{
    public function index(){
        $locations=Location::all();
        return view('admindashboard',compact('locations'));
    }
}
