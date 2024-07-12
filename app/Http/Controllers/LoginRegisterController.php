<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\PetOwner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\AnimalRescuerAndShelter;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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
        return redirect()->back()->with('success', 'Sign Up Successful! Please login.');;
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
            if($userModel->confirmed != 1){
                return view('signup');
            }else{
                return redirect('/');
            }

        }else{
            return redirect()->back();
        }
    }

    public function logout(request $request){
        Auth::logout();
        Session::flush();
        return redirect('/');
    }

    public function registerPetowner(request $request){
        // dd($request->all());
        $user=Session::get('user');
        if($request->gender=='Male'){
            PetOwner::where('id','=',$user['user'])
                ->update([
                    'phonenumber'=>$request->phonenumber,
                    'username'=>$request->username,
                    'gender'=>0,
                    'birthdate'=>$request->birthdate,
                    'description'=>$request->description,
                    'confirmed'=>true,
                ]);
        }else if($request->gender=='Female'){
            PetOwner::where('id','=',$user['user'])
                    ->update([
                        'phonenumber'=>$request->phonenumber,
                        'username'=>$request->username,
                        'gender'=>1,
                        'birthdate'=>$request->birthdate,
                        'description'=>$request->description,
                        'confirmed'=>true,
                    ]);
        }else{
            return "error";
        }
        return view('signupdone');
    }


    public function registerAnimalRescuerIndex(){
        return view('signupanimalrescue');
    }

    public function registerAnimalRescuerFunction(request $request){
        // dd($request->all());
        $timestamp = Carbon::now()->timestamp * 1000 + round(Carbon::now()->micro / 1000);
        $filename = $timestamp."-".$request->file('licensePicture')->getClientOriginalName();
        $path = $request->file('licensePicture')->storeAs('licensePicture', $filename, 'public');
        $user=Session::get('user');
        if($request->organizationstructure=='Non-profit'){
            AnimalRescuerAndShelter::create([
                'name'=>$request->name,
                'structure'=>0,
                'location'=>$request->location,
                'phonenumber'=>$request->phonenumber,
                'taxidentificationnumber'=>$request->taxIdentificationNumber,
                'businesslicense'=>Storage::url($path),
                'description'=>$request->description,
                'petowner_id'=>$user['user'],
            ]);
        }else if($request->organizationstructure=='Charitable'){
            AnimalRescuerAndShelter::create([
                'name'=>$request->name,
                'structure'=>1,
                'location'=>$request->location,
                'phonenumber'=>$request->phonenumber,
                'taxidentificationnumber'=>$request->taxIdentificationNumber,
                'businesslicense'=>Storage::url($path),
                'description'=>$request->description,
                'petowner_id'=>$user['user'],
            ]);
        }else{
            return "error";
        }
        return view('signupanimalrescuedone');
    }
}
