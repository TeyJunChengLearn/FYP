<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $table='announcement';

    protected $fillable=[
        'description',
        'datetime',
        'title',
        'forumspecialuser_id',
    ];
}
