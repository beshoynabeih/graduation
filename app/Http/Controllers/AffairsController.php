<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\User;
use App\Student;
use App\Notification;
use App\Result;
use App\Tables;
use App\Contact;
class AffairsController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('affairs');
    }
    public function indexForm()
    {
        $students = Student::paginate(5);

      return view('affairs.index', ['students' => $students, 'grade' => false]);
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
      if(Student::postStudent($request))
      {
        return redirect('/affairs')->with('success', 'Student data has been saved');
      }else{
        return redirect('/affairs')->with('fail', 'Can not store the account');
      }
    }    
    public function getGradeStudents(Request $request)
    {
      $this->validate($request,[
        'select_grade' => 'string|max:15',
        'searchvalue' => 'string'
      ]);
      if($request->select_grade == 'first grade' || $request->select_grade == 'second grade'|| $request->select_grade == 'third grade'|| $request->select_grade == 'fourth grade'|| $request->select_grade == 'fifth grade'|| $request->select_grade == 'sixth grade' && $request->searchvalue == '')
      {
        //get student in this grade
        $students = Student::where('grade', $request->select_grade)->paginate(30);
        return view('affairs.index', ['students' => $students, 'grade' => $request->select_grade]);
      }else if($request->select_grade == 'all grades' && $request->searchvalue == ''){
        return redirect('/affairs');
      }elseif($request->searchvalue){
        $students = Student::where('name', 'like', "%$request->searchvalue%")->paginate(1);
        return view('affairs.index', ['students' => $students, 'grade' => $request->select_grade]);
      }
      else
      {
        return view("errors.404");
      }
    }
    public function editStudentForm($id)
    {
      return view("affairs.editstudent",['student' => Student::find($id)]);
    }
    public function updateStudent(Request $request)
    {
      // dd(User::find(Student::find($request->id)->parent_id ));
      if($request->ch_password === "on")      
      $this->validate($request, [
        'parent_name' => 'required|string',
        'email' => 'required|email',        
        'password' => 'required|min:6',
      ]);
      $this->validate($request, [
        'parent_name' => 'required|string',
        'email' => 'required|email',
      ]);
      $student = Student::find($request->id);
      $parent = User::find($student->parent_id);
      $student->name = request('student_name');
      $parent->name = $request->parent_name;
      $parent->email = $request->email;

      if($request->ch_password === "on")
        $parent->password = bcrypt(request('password'));

      $student->grade = $request->grade;
      $student->birthday = $request->birthday;
      $student->address = $request->address;
      $student->save();
      $parent->save();

      return redirect("/affairs")->with('success', "Student data has been updated");
    }
    public function deleteStudent($id)
    {
      //delete from parent table

      $parent = User::find(Student::find($id)->parent_id)->delete();
      //delete from student table
      $student = Student::find($id)->delete();

      return redirect("/affairs")->with("success", "Student has been deleted");
    }
    public function payFees($id)
    {
      $student = Student::find($id);
      $student->fees = 1;
      $student->save();
      return redirect('/affairs')->with('success', "$student->name has paid fees");
    }
    public function sendNotificationForm($id)
    {
      return view('affairs.sendnotification', ['id' => $id]);
    }
    public function sendNotification(Request $request, $id)
    {
      $id = (int)$id;
      $this->validate($request,[
        'notetype' => 'required|alpha',
        'notecontent' => 'required|string|max:500'
      ]);
      if(is_int($id))
      {
        Notification::create([
          'sender_id' => Auth::user()->id,
          'student_id' => $id,
          'type' =>$request->notetype,
          'content' => $request->notecontent
        ]);
        return redirect('/affairs')->with('success', "Notification has been sent");
      }
    }
    public function resultsForm($id)
    {
      $student = Student::find($id);
      $results = Result::getResults($id);
      
      return view('/affairs/results', ['student' => $student, 'results' => $results]);
    }
    public function resultsManageForm($id, $type = null)
    {
      $student = Student::find($id);
      $result = null;
      if($type !== null)
        $result = Result::getTypeResult($student->id, $type);    
        
      return view('/affairs/resultsmanage', ['student' => $student, 'result' => $result[0]]);
    }
    public function postResult(Request $request, $id)
    {
      $this->validate($request,[
        'type' => "required|alpha",
        'arabic' => 'required|numeric',
        'english' => 'required|numeric',
        'math' => 'required|numeric',
        'science' => 'required|numeric',
        'history' => 'required|numeric',
        'arts' => 'required|numeric',
        'computer' => 'required|numeric',
      ]);
      $res = Student::find($id);
      if($res)
      {
        $result = Result::where(['type' => $request->type, 'student_id' => $res->id])->first();
        if($result === null)
        {
          Result::create([
            'student_id' => $res->id,
            'type' => $request->type,
            'arabic' => $request->arabic,
            'english' => $request->english,
            'math' => $request->math,
            'science' => $request->science,
            'history' => $request->history,
            'arts' => $request->arts,
            'computer' => $request->arabic,
          ]);        
          return redirect('/affairs')->with('success', "$res->name  Resutls has been set");
        }
        else
        {
          $result->student_id = $res->id;
          $result->type = $request->type;
          $result->arabic = $request->arabic;
          $result->english = $request->english;
          $result->math = $request->math;
          $result->science = $request->science;
          $result->history = $request->history;
          $result->arts = $request->arts;
          $result->computer = $request->arabic;
          $result->save();
          return redirect('/affairs')->with('success', "$res->name  Resutls has been updated");
        }
      }      
    }
    public function deleteResult($id, $type)
    {
      $res = Student::find($id);
      if($res)
      {
        $result = Result::where(['type' => $type, 'student_id' => $id])->first();
        $result->delete();
        return redirect('/affairs')->with('success', "$res->name Resutls has been Deleted");       
      }
    }

    /*
     *Tables
     */
    public function updateTableForm(Request $request)
    {
      $lectures = Tables::getGradeTable($request->select_grade);
      return view('affairs.updateTables', ['lectures' => $lectures]);
    }
    public function postTable(Request $request)
    {
      //SomeValidation
      if(Tables::postTable($request))
        return redirect('/affairs/updatetables')->with('success', 'Table has been updated');
    }
    public function showRequestsForm()
    {
      $contacts = Contact::all();
      return view('affairs.showrequests', ['contacts' => $contacts]);
    }
}
