<?php

namespace App\Http\Controllers;

use App\Models\ForumPost;
use Illuminate\Http\Request;
use App\Models\ForumCategory;
use App\Models\LostAndFoundAnnouncement;

class ForumController extends Controller
{
    public function index(){
        $forumCategories=ForumCategory::all();
        return view('forum',compact('forumCategories'));
    }

    public function forumCategoryIndex($cateogryId){
        // dd($cateogryId);
        $forumPosts=ForumPost::where('forumcategory_id','=',$cateogryId)->orderBy('created_at', 'desc')->paginate(10);
        return view('forumPost',compact('forumPosts'));
    }

    public function forumAnnouncementIndex(){
        // $lostAndFoundAnnouncements=LostAndFoundAnnouncement::orderBy('created_at', 'desc')->paginate(10);
        // return view('announcements',compact('lostAndFoundAnnouncements'));
        return view('announcements');
    }
}
