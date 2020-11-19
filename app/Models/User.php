<?php

namespace App\Models;

use App\Models\Entry;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public function Entries()
    {
        return $this->hasMany('App\Models\Entry');
    }
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    public function getRouteKeyName()
    {
        return 'username';
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
