<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Feedback;
use App\Models\PetOwner;
use App\Mail\ApproveMail;
use App\Mail\DeclineMail;
use Illuminate\Http\Request;
use App\Models\ForumCategory;
use App\Models\ForumSpeacialUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\AnimalRescuersApproval;
use App\Models\AnimalRescuerAndShelter;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function dashboardIndex(){
        if(Session::get('user')==null||Session::get('user')['admin']['status']!= true){
            return redirect('/');
        }
        $feedbacks=Feedback::orderBy('created_at', 'desc')->paginate(4);
        return view('admindashboard',compact('feedbacks'));
    }

    public function adminIndex(){
        if(Session::get('user')==null||Session::get('user')['admin']['status']!= true){
            return redirect('/');
        }
        $admins=Admin::all();
        return view('adminnewadmin',compact('admins'));
    }

    public function adminAdd(request $request){
        if(Session::get('user')==null||Session::get('user')['admin']['status']!= true){
            return redirect('/');
        }
        // dd($request->all());
        $user = PetOwner::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password) && empty($user->animalrescuersandshelters) && empty($user->admin)) {
            $admin=Admin::create([
                'petowner_id' => $user->id,
            ]);
            ForumSpeacialUser::create([
                'admin_id' => $admin->id,
            ]);
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }

    public function usersIndex(){
        if(Session::get('user')==null||Session::get('user')['admin']['status']!= true){
            return redirect('/');
        }
        $petOwners=PetOwner::all();
        $animalRescuerAndShelters=AnimalRescuerAndShelter::all();
        return view('adminuserslist',compact('petOwners','animalRescuerAndShelters'));
    }

    public function forumCategoryIndex(){
        if(Session::get('user')==null||Session::get('user')['admin']['status']!= true){
            return redirect('/');
        }
        $forumCategories=ForumCategory::all();
        return view('adminforumcategory',compact('forumCategories'));
    }

    public function forumCategoryEdit(request $request){
        if(Session::get('user')==null||Session::get('user')['admin']['status']!= true){
            return redirect('/');
        }
        // dd($request->all());
        ForumCategory::find($request->id)->update([
            'name' => $request->category_name,
        ]);
        return redirect()->back();
    }

    public function forumCategoryAdd(request $request){
        if(Session::get('user')==null||Session::get('user')['admin']['status']!= true){
            return redirect('/');
        }
        // dd($request->all());
        ForumCategory::create([
            'name'=>$request->name,
            'admin_id'=>Session::get('user')['admin']['admin_id'],
        ]);
        return redirect()->back();
    }

    public function requestIndex(){
        if(Session::get('user')==null||Session::get('user')['admin']['status']!= true){
            return redirect('/');
        }
        $list=AnimalRescuersApproval::where('confirm','=',false)->paginate(4);
        return view('adminrequestlist',compact('list'));
    }

    public function requestDetailsIndex($requestId){
        if(Session::get('user')==null||Session::get('user')['admin']['status']!= true){
            return redirect('/');
        }
        if(empty(AnimalRescuersApproval::find($requestId))||AnimalRescuersApproval::find($requestId)->confirm==true){
            return redirect()->route('admin.request.index');
        }
        $approvalDetails=AnimalRescuersApproval::find($requestId);
        return view('adminrequests',compact('approvalDetails'));
    }

    public function requestApprove($requestId){
        if(Session::get('user')==null||Session::get('user')['admin']['status']!= true){
            return redirect('/');
        }
        if(empty(AnimalRescuersApproval::find($requestId))||AnimalRescuersApproval::find($requestId)->confirm==true){
            return redirect()->route('admin.request.index');
        }
        Mail::to(AnimalRescuersApproval::find($requestId)->animalrescuersandshelters->petowner->email)->send(new ApproveMail());
        ForumSpeacialUser::create([
            'animalrescuersandshelters_id'=>AnimalRescuersApproval::find($requestId)->animalrescuersandshelters->id,
        ]);
        AnimalRescuersApproval::find($requestId)->update([
            'approval'=>true,
            'confirm'=>true,
        ]);
        return redirect()->route('admin.request.index');
    }

    public function requestDecline($requestId){
        if(Session::get('user')==null||Session::get('user')['admin']['status']!= true){
            return redirect('/');
        }
        if(empty(AnimalRescuersApproval::find($requestId))||AnimalRescuersApproval::find($requestId)->confirm==true){
            return redirect()->route('admin.request.index');
        }
        Mail::to(AnimalRescuersApproval::find($requestId)->animalrescuersandshelters->petowner->email)->send(new DeclineMail());
        AnimalRescuersApproval::find($requestId)->animalrescuersandshelters->delete();
        return redirect()->route('admin.request.index');
    }
}
