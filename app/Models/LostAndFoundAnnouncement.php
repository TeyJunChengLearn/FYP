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

    public function petowner(){
        return $this->belongsTo(PetOwner::class, 'petowner_id');
    }

    public function comment(){
        return $this->hasMany(Comment::class,'lostandfoundannouncement_id');
    }

    public function pin(){
        return $this->hasOne(Pin::class,'lostandfoundannouncement_id');
    }
}
