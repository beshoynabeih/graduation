<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Student;
class AffairsController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('affairs');
    }
    public function indexForm()
    {
      $students = Student::paginate(1);
      return view('affairs.index', ['students' => $students]);
    }
    public function addStudentForm()
    {
      return view('affairs.addstudent');
    }
    public function registerUser(Request $request)
    {
      $this->validate($request, [
        'parent_name' => 'required|string',
        'email' => 'required|email',
        'password' => 'required|min:6',
      ]);
      $res = User::create([
        'name' => $request->parent_name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'type' => 1
      ]);
      if($res)
      {
        if(Student::postStudent($request,$res->id))
        {
          return redirect('/affairs')->with('success', 'Student data has been saved');
        }
      }
    }
}
