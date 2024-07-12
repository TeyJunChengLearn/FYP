<?php

namespace App\Models;

use App\Models\Pet;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Password;

class PetOwner extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $table = 'petowner';

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phonenumber',
        'password',
        'username',
        'gender',
        'birthdate',
        'description',
        'confirmed',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function pets(){
        return $this->hasMany(Pet::class,'petowner_id');
    }

    public function animalrescuersandshelters(){
        return $this->hasOne(AnimalRescuerAndShelter::class,'petowner_id');
    }

    public function admin(){
        return $this->hasOne(Admin::class,'petowner_id');
    }

    public function forumpost(){
        return $this->hasMany(ForumPost::class,'petowner_id');
    }

    public function feedback(){
        return $this->hasMany(Feedback::class,'petowner_id');
    }

    public function like(){
        return $this->hasMany(Like::class,'petowner_id');
    }

    public function lostandfoundannouncement(){
        return $this->hasMany(LostAndFoundAnnouncement::class,'petowner_id');
    }

    public function comment(){
        return $this->hasMany(Comment::class,'petowner_id');
    }

    public function reply(){
        return $this->hasMany(Reply::class,'petowner_id');
    }

    public function inquiries(){
        return $this->hasMany(Inquiries::class,'petowner_id');
    }

    public function volunteerrequest(){
        return $this->hasMany(VolunteerRequest::class,'petowner_id');
    }

    public function rescuerequest(){
        return $this->hasMany(RescueRequest::class,'petowner_id');
    }

    public function rescuerequestreply(){
        return $this->hasMany(RescueRequestReply::class,'petowner_id');
    }
}
