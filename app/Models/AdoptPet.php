<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdoptPet extends Model
{
    use HasFactory;

    protected $table="adoptpets";

    protected $fillable=[
        'name',
        'pettype',
        'petbreed',
        'gender',
        'age',
        'vacinated',
        'condition',
        'location',
        'phonenumber',
        'adoptionfee',
        'image',
        'description',
        'animalrescuersandshelters_id',
    ];

    public function animalrescuersandshelters(){
        return $this->belongsTo(AnimalRescuerAndShelter::class,'animalrescuersandshelters_id');
    }
}
