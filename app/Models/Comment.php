<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table='comment';

    protected $fillable=[
        'description',
        'datetime',
        'lostandfoundannouncement_id',
        'announcement_id',
        'forumpost_id',
        'petowner_id',
        'animalrescuersandshelters_id',
    ];

    public function lostandfoundannouncement(){
        return $this->belongsTo(LostAndFoundAnnouncement::class, 'lostandfoundannouncement_id');
    }

    public function announcement(){
        return $this->belongsTo(Announcement::class, 'announcement_id');
    }

    public function forumpost(){
        return $this->belongsTo(ForumPost::class,'forumpost_id');
    }

    public function petowner(){
        return $this->belongsTo(PetOwner::class,'petowner_id');
    }

    public function animalrescuersandshelters(){
        return $this->belongsTo(AnimalRescuerAndShelter::class,'animalrescuersandshelters_id');
    }

    public function comment(){
        return $this->hasMany(Reply::class,'comment_id');
    }
}
