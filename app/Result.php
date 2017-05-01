<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Result extends Model
{
    //
    protected $fillable = ['student_id', 'type', 'arabic', 'english', 'math', 'science', 'history', 'arts', 'computer'];
    public static function getResults($id)
    {
    	return DB::select("SELECT * from results where student_id = $id");
    }
    public static function getTypeResult($id, $type)
    {
    	return DB::select("SELECT * from Results where student_id = $id and type = '$type'");
    }
}
