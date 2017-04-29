<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use DB;
class Student extends Model
{
    //
    public static function postStudent($request, $parent_id)
    {
      //Deal with request
      return DB::insert("Insert Into students(parent_id, name, birthday, grade, address) VALUES(?,?,?,?,?)",[
        $parent_id,
        $request->student_name,
        $request->birthday,
        $request->grade,
        $request->address
      ]);
    }
    public static function getStudents()
    {
      return DB::select("SELECT * from students");
    }
    public function parent()
    {
      return $this->belongsTo(User::class);
    }
}
