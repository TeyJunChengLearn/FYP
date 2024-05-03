<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LostAndFoundAnnouncement extends Model
{
    use HasFactory;

    protected $table='lostandfoundannouncement';

    protected $fillable=[
        'description',
        'datetime',
        'title',
        'petowner_id',
    ];
}
