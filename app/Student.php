<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use DB;
class Student extends Model
{
    //
    protected $fillable = ['parent_id', 'name','birthday','grade'];
    public static function postStudent($request)
    {
      DB::transaction(function($request) use($request){
        $res = User::create([
          'name' => $request->parent_name,
          'email' => $request->email,
          'password' => bcrypt($request->password),
          'type' => 1
        ]);
        DB::insert("Insert Into students(parent_id, name, birthday, grade, address) VALUES(?,?,?,?,?)",[
          $res->id,
          $request->student_name,
          $request->birthday,
          $request->grade,
          $request->address
        ]);
      });
      return true;
    }
    public static function getStudents()
    {
      return DB::select("SELECT * from students");
    }
    public static function getGradeStudent($grade)
    {
      return DB::select("SELECT * FROM students where grade=?",[$grade]);
    }
    public static function searchStudent($value)
    {
      return DB::select("SELECT * from students where name like '%$value%'")->paginate(1);
    }
    // public function studentID($id)
    // {
    //   return DB::select();
    // }
    public function parent()
    {
      return $this->belongsTo('App\User');
    }
}
