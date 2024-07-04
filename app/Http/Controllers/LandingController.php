<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\User;
use App\Models\PetOwner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\AnimalRescuerAndShelter;
use PhpParser\NodeVisitor\FirstFindingVisitor;

class LandingController extends Controller
{
    public function index(request $request){
        // $data=AnimalRescuerAndShelter::find(1)->forumpost;
        // dd($data);
        return 1;
    }
}
