<?php

namespace App\Http\Controllers;

use App\Models\PetOwner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginRegisterController extends Controller
{
    public function index(){
        return view('rtest');
    }

    public function register(request $request){
        // dd($request->all());
        $validateData=$request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|unique:petowner,email|max:255',
            'password' => 'required|string|min:8',
        ]);
        PetOwner::create([
            'firstname'=>$validateData['firstName'],
            'lastname'=>$validateData['lastName'],
            'email'=>$validateData['email'],
            'password'=>Hash::make($validateData['password']),
        ]);
        return redirect()->back();
    }

    public function login(request $request){
        // dd($request->all());
        $validateData=$request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        if(Auth::attempt($validateData)){
            return redirect('/');
        }else{
            return redirect()->back();
        }
    }

    public function logout(request $request){
        Auth::logout();

        return redirect('/');
    }
}
