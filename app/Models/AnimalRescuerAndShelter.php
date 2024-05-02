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
}
