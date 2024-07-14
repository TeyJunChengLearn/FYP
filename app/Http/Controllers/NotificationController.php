<?php

namespace App\Http\Controllers;

use App\Models\PetOwner;
use App\Models\ForumPost;
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
        $redirectNotificationArray=$notification;
        $notification->markAsRead();
        // dd($redirectNotificationArray);
        if(!empty($redirectNotificationArray->data['lostandfoundannouncement_id'])){
            return redirect()->route('forumLostnFoundDetails.index',['lostnFoundId'=>$redirectNotificationArray->data['lostandfoundannouncement_id']]);
        }else if(!empty($redirectNotificationArray->data['announcement_id'])){
            return redirect()->route('forumAnnouncementDetails.Index',['announcementId'=>$redirectNotificationArray->data['announcement_id']]);
        }else{
            $forumCategoryId=ForumPost::find($redirectNotificationArray->data['forumpost_id'])->forumcategory->id;
            return redirect()->route('forumCategoryPost.index',['categoryId'=>$forumCategoryId,'forumId'=>$redirectNotificationArray->data['forumpost_id']]);

        }
        // return redirect()->back();
    }

    public function getNumberOfNotification(request $request){
        $petOwnerCount=PetOwner::find($request->id)->unreadNotifications->count();
        $data=[
            'number'=>$petOwnerCount,
        ];
        return response()->json($data);
    }
}
