<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumCategory extends Model
{
    use HasFactory;

    protected $table='forumcategory';

    protected $fillable=[
        'name',
        'admin_id',
    ];
}
