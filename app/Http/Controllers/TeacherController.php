<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student;
use App\Result;
use App\User;
use App\Notification;
use App\Question;
use App\Answer;
use Auth;
class TeacherController extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware(['auth', 'teacher']);
    }
    public function index()
    {
    	$questions_count = Question::where(['to_id' => 3, 'seen' => 0])->count();

    	return view('teacher.index', ['questions_count' => $questions_count]);
    }
    public function manageStudentsForm()
    {
    	$user = User::find(Auth::user()->id);
    	$grades = $user->teacher[0]->grade;
    	$grades = explode(',', $grades);    	
    	
    	$gradeNames = ['first grade', 'second grade', 'third grade', 'fourth grade', 'fifth grade', 'sixth grade'];
    	$gradeNames = array_combine($gradeNames, $grades);
    	$getGrades= [];
    	foreach ($gradeNames as $key => $value) {
    		if(!empty($value))
    			$getGrades[] = $key;
    	}
    	$students = [];
    	foreach ($getGrades as $key => $value) {    		
    		$students[] = Student::getGradeStudent($value);
    	}
    	return view('teacher.managestudents', ['studentss' => $students]);
    }
    public function resultForm($id)
    {
    	$results = null;
    	$student = Student::find($id);
    	if($student !== null)
    		return view('teacher.studentresults',['result' => $results, 'student' => $student]);
    	return redirect('/error');
    }
    public function notesForm($id)
    {
    	return view('teacher.sendnotification',['id' => $id]);
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
	    	$s = Result::create([
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
	          if($s)        
	          return redirect('/teacher/managestudents')->with('success', "$res->name  Resutls has been set");    		
    	}
    }
    public function postNotification(Request $request, $id)
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
	          'type' => $request->notetype,
	          'content' => $request->notecontent
	        ]);
	        return redirect('/teacher/managestudents')->with('success', "Notification has been sent");
	      }
    }
    public function answerQuestionsForm()
    {
    	$questions = Question::where(['to_id' => 3, 'seen' => 0])->get();
    	return view('teacher.answerquestions', ['questions' => $questions]);
    }
    public function answerQuestion(Request $request, $id)
    {
    	$this->validate($request, [
    		'answer' => 'required|string',
    		'studentID' => 'required|numeric'
		]);
		//add answer		
		Answer::create([
			'question_id' => $id,
			'answer' => $request->answer
		]);
		//add seen
		$question = Question::find($id);
		$question->seen = 1;
		$question->save();
		//send notification to parent
		Notification::create([
	          'sender_id' => Auth::user()->id,
	          'student_id' => $request->studentID,
	          'type' => 'Question Answered',
	          'content' => 'Your Question has been answered'
	        ]);
		return redirect('/teacher/answerquestions')->with('success', 'Question Answered');
    }
}
