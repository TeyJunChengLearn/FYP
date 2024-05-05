<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    protected $table='reply';

    protected $fillable=[
        'description',
        'datetime',
        'comment_id',
        'petowner_id',
        'animalrescuersandshelters_id',
        'reply_id',
    ];

    public function comment(){
        return $this->belongsTo(Comment::class,'comment_id');
    }

    public function petowner(){
        return $this->belongsTo(PetOwner::class,'petowner_id');
    }

    public function animalrescuersandshelters(){
        return $this->belongsTo(AnimalRescuerAndShelter::class,'animalrescuersandshelters_id');
    }

    public function parent(){
        return $this->belongsTo(Reply::class,'reply_id');
    }

    public function replytoreply(){
        return $this->hasMany(Reply::class,'reply_id');
    }
}
