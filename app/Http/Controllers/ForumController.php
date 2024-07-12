<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Comment;
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
        return view('announcements');
    }

    public function forumLostnfoundIndex(){
        $user=Session::get('user');
        $lostnFoundAnnouncements=LostAndFoundAnnouncement::paginate(5);
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
        dd($lostnFoundId);
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
}
