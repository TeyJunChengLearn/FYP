<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Carbon\Carbon;
use App\Models\Comment;
use App\Models\Feedback;
use App\Models\ForumPost;
use Illuminate\Http\Request;
use App\Models\ForumCategory;
use Illuminate\Support\Facades\Session;
use App\Models\LostAndFoundAnnouncement;

class ForumController extends Controller
{
    public function index(){
        $forumCategories=ForumCategory::all();
        return view('forum',compact('forumCategories'));
    }

    public function forumCategoryIndex($categoryId){
        // dd($cateogryId);
        $user=Session::get('user');
        $category=ForumCategory::find($categoryId);
        $forumPosts=ForumPost::where('forumcategory_id','=',$categoryId)->orderBy('created_at', 'desc')->paginate(5);
        return view('forumPost',compact('forumPosts','category','user'));
    }

    public function forumAnnouncementIndex(){
        $user=Session::get('user');
        $announcements=Announcement::orderBy('created_at', 'desc')->paginate(5);
        return view('announcements',compact('user','announcements'));
    }

    public function forumLostnfoundIndex(){
        $user=Session::get('user');
        $lostnFoundAnnouncements=LostAndFoundAnnouncement::orderBy('created_at', 'desc')->paginate(5);
        return view('lostnfound',compact('lostnFoundAnnouncements','user'));
    }

    public function forumWithCategoryPostIndex($categoryId,$forumId){
        // dd($categoryId,$forumId);
        $user=Session::get('user');
        $category=ForumCategory::find($categoryId);
        $forumPost=ForumPost::where('forumcategory_id','=',$categoryId)->where('id','=',$forumId)->first();
        return view('forumdetails',compact('user','category','forumPost'));
    }

    public function forumCategoryAddPost($categoryId,request $request){
        // dd($request->all(),$categoryId);
        $user=Session::get('user');
        ForumPost::create([
            'datetime'=>Carbon::now(),
            'description'=>$request->description,
            'title'=>$request->title,
            'petowner_id'=>$user['user'],
            'forumcategory_id'=>$categoryId,
        ]);

        return redirect()->back();
    }

    public function forumPostAddComment(request $request){
        // dd($request->all());
        $user=Session::get('user');
        Comment::create([
            'description'=>$request->content,
            'datetime'=>Carbon::now(),
            'forumpost_id'=>$request->forumId,
            'petowner_id'=>$user['user'],
        ]);

        return redirect()->back();
    }

    public function forumLostnfoundDetailsIndex($lostnFoundId){
        // dd($lostnFoundId);
        $user=Session::get('user');
        $lostAndFoundannouncement=LostAndFoundAnnouncement::find($lostnFoundId);
        return view('lostnfounddetails',compact('lostAndFoundannouncement','user'));
    }

    public function forumLostnfoundAdd(request $request){
        // dd($request->all());
        $user=Session::get('user');
        LostAndFoundAnnouncement::create([
            'description'=>$request->description,
            'datetime'=>Carbon::now(),
            'title'=>$request->title,
            'petowner_id'=>$user['user'],
        ]);

        return redirect()->back();
    }

    public function forumFeedbackIndex(){
        $user=Session::get('user');
        $feedbacks=Feedback::orderBy('created_at', 'desc')->paginate(5);
        return view('feedback',compact('user','feedbacks'));
    }

    public function forumFeedbackAdd(request $request){
        // dd($request->all());
        Feedback::create([
            'description'=>$request->description,
            'star'=>5,
            'datetime'=>Carbon::now(),
            'petowner_id'=>Session::get('user')['user'],
        ]);
        return redirect()->back();
    }

    public function forumAnnouncementAdd(request $request){
        // dd($request->all());
        Announcement::create([
            'description'=>$request->description,
            'datetime'=>Carbon::now(),
            'title'=>$request->title,
            'forumspecialuser_id'=>Session::get('user')['forumspecialuser']['forumspecialuser_id'],
        ]);
        return redirect()->back();
    }

    public function forumAnnouncementDetailsIndex($announcementId){
        // dd($announcementId);
        $user=Session::get('user');
        $announcement=Announcement::find($announcementId);
        return view('announcementdetails',compact('user','announcement'));
    }

    public function forumLostnfoundCommentAdd(request $request){
        // dd($request->all());
        Comment::create([
            'description'=>$request->content,
            'datetime'=>Carbon::now(),
            'lostandfoundannouncement_id'=>$request->lostNFoundId,
            'petowner_id'=>Session::get('user')['user'],
        ]);
        return redirect()->back();
    }

    public function forumAnnouncementCommentAdd(request $request){
        // dd($request->all());
        Comment::create([
            'description'=>$request->content,
            'datetime'=>Carbon::now(),
            'announcement_id'=>$request->announcementId,
            'petowner_id'=>Session::get('user')['user'],
        ]);

        return redirect()->back();
    }
}
