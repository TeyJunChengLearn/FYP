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
}
