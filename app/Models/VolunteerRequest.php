<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VolunteerRequest extends Model
{
    use HasFactory;

    protected $table='volunteerrequest';

    protected $fillable=[
        'name',
        'phonenumber',
        'placebirth',
        'occupation',
        'workingplace',
        'icpicture',
        'approval',
        'confirm',
        'animalrescuersandshelters_id',
        'petowner_id',
    ];

    public function animalrescuersandshelters(){
        return $this->belongsTo(AnimalRescuerAndShelter::class,'animalrescuersandshelters_id');
    }

    public function petowner(){
        return $this->belongsTo(PetOwner::class,'petowner_id');
    }
}
