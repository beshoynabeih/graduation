<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Student;
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function student()
    {
      return $this->hasMany(Student::class);
    }
}
