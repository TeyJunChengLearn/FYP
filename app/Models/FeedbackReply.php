<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackReply extends Model
{
    use HasFactory;

    protected $table='feedbackreply';

    protected $fillable=[
        'description',
        'datetime',
        'feedback_id',
        'admin_id',
    ];
}
