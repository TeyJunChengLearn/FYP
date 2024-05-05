<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InquiriesReply extends Model
{
    use HasFactory;

    protected $table='inquiriesreply';
    protected $fillable=[
        'description',
        'datetime',
        'inquiries_id',
        'forumspecialuser_id',
    ];
    public function inquiries(){
        return $this->belongsTo(Inquiries::class,'inquiries_id');
    }
    public function forumspecialuser(){
        return $this->belongsTo(ForumSpeacialUser::class,'forumspecialuser_id');
    }

}
