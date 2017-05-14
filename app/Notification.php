<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //
    protected $fillable = ['sender_id', 'student_id', 'type', 'content'];

    public function question()
    {
    	return $this->hasOne('App\Question', 'asker_id', 'student_id');
    }
}
