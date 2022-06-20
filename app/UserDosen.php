<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDosen extends Model
{
    protected $table = 'userdosen';
    protected $fillable = [
        'nik_user', 'nama_user', 'no_hp', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
