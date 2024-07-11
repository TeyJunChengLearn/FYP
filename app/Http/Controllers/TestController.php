<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $data=Location::all();

        return view('announcments',compact('data'));
    }
}
