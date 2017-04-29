<?php
//Tables Model
namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Tables extends Model
{
    /*
     *getTable function
     * It takes an grade and gets the table of this grade
     */
    public static function getGradeTable($grade)
    {
      if($grade)
        return DB::select("select * from tables where grade = ?",[$grade]);

      return DB::select("select * from tables where grade = 'first grade'");
    }
    public static function postInsertTable($data)
    {
        DB::insert("insert into tables(grade, day, lec1, lec2, lec3, lec4, lec5, lec6, lec7) VALUES(?,?,?,?,?,?,?,?,?)",[
          $data->grade,
          $data->d1,
          $data->d1l1,
          $data->d1l2,
          $data->d1l3,
          $data->d1l4,
          $data->d1l5,
          $data->d1l6,
          $data->d1l7
        ]);
        DB::insert("insert into tables(grade, day, lec1, lec2, lec3, lec4, lec5, lec6, lec7) VALUES(?,?,?,?,?,?,?,?,?)",[
          $data->grade,
          $data->d2,
          $data->d2l1,
          $data->d2l2,
          $data->d2l3,
          $data->d2l4,
          $data->d2l5,
          $data->d2l6,
          $data->d2l7
        ]);
        DB::insert("insert into tables(grade, day, lec1, lec2, lec3, lec4, lec5, lec6, lec7) VALUES(?,?,?,?,?,?,?,?,?)",[
          $data->grade,
          $data->d3,
          $data->d3l1,
          $data->d3l2,
          $data->d3l3,
          $data->d3l4,
          $data->d3l5,
          $data->d3l6,
          $data->d3l7
        ]);
        DB::insert("insert into tables(grade, day, lec1, lec2, lec3, lec4, lec5, lec6, lec7) VALUES(?,?,?,?,?,?,?,?,?)",[
          $data->grade,
          $data->d4,
          $data->d4l1,
          $data->d4l2,
          $data->d4l3,
          $data->d4l4,
          $data->d4l5,
          $data->d4l6,
          $data->d4l7
        ]);
        DB::insert("insert into tables(grade, day, lec1, lec2, lec3, lec4, lec5, lec6, lec7) VALUES(?,?,?,?,?,?,?,?,?)",[
          $data->grade,
          $data->d5,
          $data->d5l1,
          $data->d5l2,
          $data->d5l3,
          $data->d5l4,
          $data->d5l5,
          $data->d5l6,
          $data->d5l7
        ]);
        DB::insert("insert into tables(grade, day, lec1, lec2, lec3, lec4, lec5, lec6, lec7) VALUES(?,?,?,?,?,?,?,?,?)",[
          $data->grade,
          $data->d6,
          $data->d6l1,
          $data->d6l2,
          $data->d6l3,
          $data->d6l4,
          $data->d6l5,
          $data->d6l6,
          $data->d6l7
        ]);

      return true;
    }
    public static function postTable($data)
    {
      DB::table('tables')->where([
        'grade' => $data->grade,
        'day' => $data->d1
      ])->update([
        'lec1' => $data->d1l1,
        'lec2' => $data->d1l2,
        'lec3' => $data->d1l3,
        'lec4' => $data->d1l4,
        'lec5' => $data->d1l5,
        'lec6' => $data->d1l6,
        'lec7' => $data->d1l7,
      ]);
      DB::table('tables')->where([
        'grade' => $data->grade,
        'day' => $data->d2
      ])->update([
        'lec1' => $data->d2l1,
        'lec2' => $data->d2l2,
        'lec3' => $data->d2l3,
        'lec4' => $data->d2l4,
        'lec5' => $data->d2l5,
        'lec6' => $data->d2l6,
        'lec7' => $data->d2l7,
      ]);
      DB::table('tables')->where([
        'grade' => $data->grade,
        'day' => $data->d3
      ])->update([
        'lec1' => $data->d3l1,
        'lec2' => $data->d3l2,
        'lec3' => $data->d3l3,
        'lec4' => $data->d3l4,
        'lec5' => $data->d3l5,
        'lec6' => $data->d3l6,
        'lec7' => $data->d3l7,
      ]);
      DB::table('tables')->where([
        'grade' => $data->grade,
        'day' => $data->d4
      ])->update([
        'lec1' => $data->d4l1,
        'lec2' => $data->d4l2,
        'lec3' => $data->d4l3,
        'lec4' => $data->d4l4,
        'lec5' => $data->d4l5,
        'lec6' => $data->d4l6,
        'lec7' => $data->d4l7,
      ]);
      DB::table('tables')->where([
        'grade' => $data->grade,
        'day' => $data->d5
      ])->update([
        'lec1' => $data->d5l1,
        'lec2' => $data->d5l2,
        'lec3' => $data->d5l3,
        'lec4' => $data->d5l4,
        'lec5' => $data->d5l5,
        'lec6' => $data->d5l6,
        'lec7' => $data->d5l7,
      ]);
      DB::table('tables')->where([
        'grade' => $data->grade,
        'day' => $data->d6
      ])->update([
        'lec1' => $data->d6l1,
        'lec2' => $data->d6l2,
        'lec3' => $data->d6l3,
        'lec4' => $data->d6l4,
        'lec5' => $data->d6l5,
        'lec6' => $data->d6l6,
        'lec7' => $data->d6l7,
      ]);
      return true;
    }
}
