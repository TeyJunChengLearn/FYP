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
}
