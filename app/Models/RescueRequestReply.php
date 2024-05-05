<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RescueRequestReply extends Model
{
    use HasFactory;

    protected $table='rescuerequestreply';

    protected $fillable=[
        'description',
        'datetime',
        'petowner_id',
        'rescuerequest_id',
        'animalrescuersandshelters_id',
    ];

    public function petowner(){
        return $this->belongsTo(PetOwner::class,'petowner_id');
    }

    public function rescuerequest(){
        return $this->belongsTo(RescueRequest::class,'rescuerequest_id');
    }

    public function animalrescuersandshelters(){
        return $this->belongsTo(AnimalRescuerAndShelter::class,'animalrescuersandshelters_id');
    }
}
