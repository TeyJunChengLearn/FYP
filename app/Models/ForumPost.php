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

    public function petowner(){
        return $this->belongsTo(Petowner::class,'petowner_id');
    }

    public function forumcategory(){
        return $this->belongsTo(ForumCategory::class,'forumcategory_id');
    }

    public function animalrescuersandshelters(){
        return $this->belongsTo(AnimalRescuerAndShelter::class,'animalrescuersandshelters_id');
    }
    public function comment(){
        return $this->hasMany(Comment::class,'forumpost_id');
    }
}
