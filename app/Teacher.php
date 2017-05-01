<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Teacher extends Model
{
    protected $fillable = ['user_id', 'subject', 'grade', 'bio'];
    protected $table = 'teacher';

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
