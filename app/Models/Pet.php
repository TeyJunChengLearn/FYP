<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $table = 'pets';

    protected $fillable=[
        'name',
        'gender',
        'birthdate',
        'image',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
