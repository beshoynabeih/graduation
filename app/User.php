<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Student;
use App\Teacher;
use DB;
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
    public static function registerEmployee($request)
    {
        if($request->type == 'teacher')
        {
            
            DB::transaction(function($request){
                $grade = $request->g1 . ",";
                $grade .= $request->g2 . ",";
                $grade .= $request->g3 . ",";
                $grade .= $request->g4 . ",";
                $grade .= $request->g5 . ",";
                $grade .= $request->g6;
                $res = self::create([
                    'name' => $request->name,
                    'type' => 2,
                    'email' => $request->email,
                    'password' => bcrypt($request->password)
                ]);
                if($res)
                {
                    Teacher::create([
                        'user_id' => $res->id,
                        'subject' => $request->subject,
                        'grade' => $grade,
                        'bio' => $request->bio
                    ]);
                }
            });
            return true;
        }else if($request->type == 'affairs')
        {
            self::create([
                    'name' => $request->name,
                    'type' => 3,
                    'email' => $request->email,
                    'password' => bcrypt($request->password)
                ]);
            return true;
        }else
        {
            self::create([
                    'name' => $request->name,
                    'type' => 0,
                    'email' => $request->email,
                    'password' => bcrypt($request->password)
                ]);
            return true;
        }
    }
    public function student()
    {
      return $this->hasMany(Student::class, 'id','parent_id');
    }
    public function teacher()
    {
        return $this->hasMany(Teacher::class);
    }
}
