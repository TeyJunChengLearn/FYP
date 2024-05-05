<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table='feedback';

    protected $fillable=[
        'description',
        'star',
        'datetime',
        'petowner_id',
    ];

    public function petowner(){
        return $this->belongsTo(PetOwner::class,'petowner_id');
    }

    public function like(){
        return $this->hasMany(Like::class,'feedback_id');
    }

    public function feedbackreply(){
        return $this->hasMany(FeedbackReply::class,'feedback_id');
    }
}
