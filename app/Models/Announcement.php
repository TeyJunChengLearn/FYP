<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $table='announcement';

    protected $fillable=[
        'description',
        'datetime',
        'title',
        'forumspecialuser_id',
    ];

    public function forumspecialuser(){
        return $this->belongsTo(ForumSpeacialUser::class, 'forumspecialuser_id');
    }

    public function comment(){
        return $this->hasMany(Comment::class,'announcement_id');
    }

    public function pin(){
        return $this->hasOne(Pin::class,'announcement_id');
    }
}
