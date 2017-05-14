<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
use App\User;
class Question extends Model
{
    //
    protected $fillable = ['asker_id', 'to_id', 'title', 'question', 'seen'];

    public function student()
    {
    	return $this->hasMany(Student::class, 'id', 'asker_id');
    }
    public function answer()
    {
    	return $this->hasOne('App\Answer', 'question_id', 'id');
    }
}
