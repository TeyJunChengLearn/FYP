<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalRescuerAndShelter extends Model
{
    use HasFactory;

    protected $table = 'animalrescuersandshelters';

    protected $fillable=[
        'name',
        'structure',
        'location',
        'phonenumber',
        'taxidentificationnumber',
        'businesslicense',
        'description',
        'petowner_id',
    ];

    public function petowner(){
        return $this->belongsTo(PetOwner::class,'petowner_id');
    }

    public function forumspecialuser(){
        return $this->hasOne(ForumSpeacialUser::class,'animalrescuersandshelters_id');
    }

    public function animalrescuersapproval(){
        return $this->hasOne(AnimalRescuersApproval::class,'animalrescuersandshelters_id');
    }

    public function forumpost(){
        return $this->hasMany(ForumPost::class,'animalrescuersandshelters_id');
    }

    public function comment(){
        return $this->hasMany(Comment::class,'animalrescuersandshelters_id');
    }

    public function reply(){
        return $this->hasMany(Reply::class,'animalrescuersandshelters_id');
    }

    public function volunteerrequest(){
        return $this->hasMany(VolunteerRequest::class,'animalrescuersandshelters_id');
    }

    public function rescuerequest(){
        return $this->hasMany(RescueRequest::class,'animalrescuersandshelters_id');
    }

    public function rescuerequestreply(){
        return $this->hasMany(RescueRequestReply::class,'animalrescuersandshelters_id');
    }
}
