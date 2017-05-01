<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tables;
use App\User;
use App\Student;
use App\Question;
use App\Answer;

class AdminController extends Controller
{
    //
    public function __construct(){
      $this->middleware(['auth', 'admin']);
    }
    public function index()
    {
      $students_count = Student::all()->count();      
      $teacher_count = User::where('type', 2)->count();

      $employees_count = User::where('type', 3)->count();;
      $questions_count = Question::all()->count();
      $anwser_count = Answer::all()->count();
      return view('admin.index',[
        's_count' => $students_count,
        't_count' => $teacher_count,
        'e_count' => $employees_count,
        'q_count' => $questions_count,
        'a_count' => $anwser_count,
      ]);
    }
    public function updateTableForm(Request $request)
    {
      $lectures = Tables::getGradeTable($request->select_grade);
      return view('admin.updateTables', ['lectures' => $lectures]);
    }
    public function postTable(Request $request)
    {
      //SomeValidation
      if(Tables::postTable($request))
        return redirect('/updatetables')->with('success', 'Table has been updated');
    }
    public function addEmployeeForm()
    {
      return view('admin.addemployee');
    }
    public function postEmployee(Request $request)
    {
      $this->validate($request,[
        'name' => 'required|string',
        'email' => 'required|email',
        'password' => 'required|min:6',
        'type' => 'required|alpha',
      ]);
      if($request->type == 'teacher')
      {
        $this->validate($request,[
          'subject' => 'required|alpha',
          'g1' => 'int',
          'g2' => 'int',
          'g3' => 'int',
          'g4' => 'int',
          'g5' => 'int',
          'g6' => 'int',
          'bio' => 'required|string'
        ]);
      }
      if(User::registerEmployee($request))
        return redirect('/admin')->with('success', 'Employee has been registed');
    }
}
