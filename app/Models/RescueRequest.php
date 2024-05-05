<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RescueRequest extends Model
{
    use HasFactory;

    protected $table='rescuerequest';

    protected $fillable=[
        'description',
        'datetime',
        'petowner_id',
        'animalrescuersandshelters_id',
    ];

    public function petowner(){
        return $this->belongsTo(PetOwner::class,'petowner_id');
    }

    public function animalrescuersandshelters(){
        return $this->belongsTo(AnimalRescuerAndShelter::class,'animalrescuersandshelters_id');
    }

    public function rescuerequestreply(){
        return $this->hasMany(RescueRequestReply::class,'rescuerequest_id');
    }
}
