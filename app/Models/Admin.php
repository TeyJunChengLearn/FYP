<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admin';

    protected $fillable=[
        'petowner_id',
    ];

    public function petowner(){
        return $this->belongsTo(PetOwner::class, 'petowner_id');
    }

    public function forumspecialuser(){
        return $this->hasOne(ForumSpeacialUser::class,'admin_id');
    }

    public function forumcategory(){
        return $this->hasMany(ForumCategory::class,'admin_id');
    }

    public function animalrescuersapproval(){
        return $this->hasMany(AnimalRescuersApproval::class,'admin_id');
    }

    public function feedbackreply(){
        return $this->hasMany(FeedbackReply::class,'admin_id');
    }

    public function notes(){
        return $this->hasMany(Notes::class,'admin_id');
    }

    public function notesreply(){
        return $this->hasMnay(NotesReply::class,'admin_id');
    }
}
