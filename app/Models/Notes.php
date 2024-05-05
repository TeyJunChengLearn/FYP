<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;

    protected $table = 'notes';

    protected $fillable=[
        'datetime',
        'description',
        'admin_id',
    ];

    public function admin(){
        return $this->belongsTo(Admin::class,'admin_id');
    }

    public function notesreply(){
        return $this->hasMany(NotesReply::class,'notes_id');
    }
}
