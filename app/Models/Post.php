<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Set the mass asignment properties
    protected $fillable = [
        'title',
        'excerpt',
        'body'
    ];
}
