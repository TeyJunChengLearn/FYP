<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $table='like';

    protected $fillable=[
        'petowner_id',
        'feedback_id',
    ];

    public function petowner(){
        return $this->belongsTo(PetOwner::class,'petowner_id');
    }

    public function feedback(){
        return $this->belongsTo(Feedback::class,'feedback_id');
    }
}
