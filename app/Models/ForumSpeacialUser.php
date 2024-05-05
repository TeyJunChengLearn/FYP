<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumSpeacialUser extends Model
{
    use HasFactory;

    protected $table='forumspecialuser';

    protected $fillable=[
        'admin_id',
        'animalrescuersandshelters_id'
    ];

    public function admin(){
        return $this->belongsTo(Admin::class,'admin_id');
    }

    public function animalrescuersandshelters(){
        return $this->belongsTo(AnimalRescuerAndShelter::class,'animalrescuersandshelters_id');
    }

    public function announcement(){
        return $this->hasMany(Announcement::class,'forumspecialuser_id');
    }

    public function inquiries(){
        return $this->hasMany(Inquiries::class,'forumspecialuser_id');
    }
}
