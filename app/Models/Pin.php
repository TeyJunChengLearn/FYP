<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pin extends Model
{
    use HasFactory;

    protected $table='';

    protected $fillable=[
        'forumspecialuser_id',
        'lostandfoundannouncement_id',
        'announcement_id'
    ];

    public function forumspecialuser(){
        return $this->belongsTo(ForumSpeacialUser::class,'forumspecialuser_id');
    }

    public function lostandfoundannouncement(){
        return $this->belongsTo(LostAndFoundAnnouncement::class,'lostandfoundannouncement_id');
    }

    public function announcement(){
        return $this->belongsTo(Announcement::class,'announcement_id');
    }
}
