<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\AdoptPet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AdoptController extends Controller
{
    public function index(){
        $user=Session::get('user');
        $adoptPets=AdoptPet::orderBy('created_at', 'desc')->paginate(4);
        return view('adoptplace',compact('user', 'adoptPets'));
    }

    public function adoptedPetAdd(request $request){
        // dd($request->all());
        $timestamp = Carbon::now()->timestamp * 1000 + round(Carbon::now()->micro / 1000);
        $filename = $timestamp."-".$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('adoptpet', $filename, 'public');
        AdoptPet::create([
            'name'=>$request->name,
            'pettype'=>$request->pettype,
            'petbreed'=>$request->petbreed,
            'gender'=>$request->gender,
            'age'=>$request->age,
            'vacinated'=>$request->vacinated,
            'condition'=>$request->condition,
            'location'=>$request->location,
            'phonenumber'=>$request->phonenumber,
            'adoptionfee'=>$request->adoptionfee,
            'image'=>Storage::url($path),
            'description'=>$request->description,
            'animalrescuersandshelters_id'=>Session::get('user')['animalrescuer']['animalrescuer_id'],
        ]);
        return redirect()->back();
    }

    public function petIndex($adoptPetId){
        // dd($adoptPetId);
        $adoptPet=AdoptPet::find($adoptPetId);
        return view('petdetails',compact('adoptPet'));
    }
}
