<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiries extends Model
{
    use HasFactory;

    protected $table='inquiries';

    protected $fillable=[
        'title',
        'description',
        'datetime',
        'forumspecialuser_id',
        'petowner_id'
    ];

    public function forumspecialuser(){
        return $this->belongsTo(ForumSpeacialUser::class,'forumspecialuser_id');
    }

    public function petowner(){
        return $this->belongsTo(PetOwner::class,'petowner_id');
    }

    public function inquiriesreply(){
        return $this->hasMany(InquiriesReply::class,'inquiries_id');
    }
}
