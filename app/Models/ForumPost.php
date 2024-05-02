<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumPost extends Model
{
    use HasFactory;

    protected $table='forumpost';

    protected $fillable=[
        'datetime',
        'description',
        'title',
        'petowner_id',
        'forumcategory_id',
        'animalrescuersandshelters_id',
    ];
}
