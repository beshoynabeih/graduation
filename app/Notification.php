<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //
    protected $fillable = ['sender_id', 'student_id', 'type', 'content'];

    
}
