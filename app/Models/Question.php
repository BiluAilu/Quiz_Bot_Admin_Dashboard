<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Question extends Model
{
    // use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'question';
    
    protected $primary_key = '_id';




    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
