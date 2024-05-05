<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotesReply extends Model
{
    use HasFactory;

    protected $table='notesreply';

    protected $fillable=[
        'datetime',
        'description',
        'notes_id',
        'admin_id',
        'notesreply_id',
    ];

    public function notes(){
        return $this->belongsTo(Notes::class,'notes_id');
    }

    public function admin(){
        return $this->belongsTo(Admin::class,'admin_id');
    }

    public function parent(){
        return $this->belongsTo(NotesReply::class,'notesreply_id');
    }

    public function replytoreply(){
        return $this->hasMany(NotesReply::class,'notesreply_id');
    }
}
