<?php

namespace App\Http\Controllers;

use App\Models\PetOwner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
            $userModel=PetOwner::where('id', '=',Auth::id())->first();
            if(!empty($userModel->admin)){
                $user=[
                    'user'=>Auth::id(),
                    'admin'=>[
                        'status'=>true,
                        'admin_id'=>$userModel->admin->id,
                    ],
                    'animalrescuer'=>[
                        'status'=>false,
                    ]
                ];
            }else if(!empty($userModel->animalrescuersandshelters)){
                $user=[
                    'user'=>Auth::id(),
                    'admin'=>[
                        'status'=>false,
                    ],
                    'animalrescuer'=>[
                        'status'=>true,
                        'animalrescuer_id'=>$userModel->animalrescuersandshelters->id,
                    ]
                ];
            }else{
                $user=[
                    'user'=>Auth::id(),
                    'admin'=>[
                        'status'=>false,
                    ],
                    'animalrescuer'=>[
                        'status'=>false,
                    ]
                ];
            }
            Session::put('user',$user);
            return redirect('/');
        }else{
            return redirect()->back();
        }
    }

    public function logout(request $request){
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}
