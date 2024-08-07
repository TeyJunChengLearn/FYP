<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalRescuersApproval extends Model
{
    use HasFactory;

    protected $table='animalrescuersapproval';

    protected $fillable=[
        'admin_id',
        'animalrescuersandshelters_id',
        'approval',
        'confirm',
    ];

    public function admin(){
        return $this->belongsTo(Admin::class,'admin_id');
    }

    public function animalrescuersandshelters(){
        return $this->belongsTo(AnimalRescuerAndShelter::class,'animalrescuersandshelters_id');
    }
}
