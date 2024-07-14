<?php

namespace App\Http\Controllers;

use App\Models\PetOwner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function index(){
        $notifications = Auth::user()->unreadNotifications;

        return view('notification', compact('notifications'));
    }

    public function show($id){
        $notification = Auth::user()->notifications()->findOrFail($id);
        $notification->markAsRead();

        return redirect()->back();
    }

    public function getNumberOfNotification(request $request){
        $petOwnerCount=PetOwner::find($request->id)->unreadNotifications->count();
        $data=[
            'number'=>$petOwnerCount,
        ];
        return response()->json($data);
    }
}
