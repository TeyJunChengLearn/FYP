<?php

namespace App\Http\Controllers;

use App\Models\PetOwner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //

    public function index(){
        if(!Session::get('user')){
            return redirect('/');
        }
        return view('usersettings');
    }

    public function update(request $request){
        if(!Session::get('user')){
            return redirect('/');
        }
        // dd($request->all());
        PetOwner::find(Auth::user()->id)->update([
            'username'=>$request->username,
            'gender'=>$request->gender,
            'email'=>$request->email,
            'birthdate'=>$request->birthdate,
        ]);
        return redirect()->back();
    }
}
