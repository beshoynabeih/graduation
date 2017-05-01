<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $fillable = ['user_id', 'subject', 'grade', 'bio'];
    protected $table = 'teacher';
}
