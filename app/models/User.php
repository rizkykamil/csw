<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    
    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'name', 'email', 'password',
    ];

    // Kolom yang dikecualikan dari atribut array
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Mutator untuk mengenkripsi password saat disimpan
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
