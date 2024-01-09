<?php

namespace App\Models;
use MongoDB\Laravel\Eloquent\Model as MongoModel;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use MongoDB\Laravel\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $connection = 'mongodb';

    use HasApiTokens, HasFactory, Notifiable;


         protected $collection = 'user';
        //  protected $primaryKey = '_id';



    protected $fillable = [
        'name',
        'photo_id',
        '_id',
        'phone_number',
        'email',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
}

