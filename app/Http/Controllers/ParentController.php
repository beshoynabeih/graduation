<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Notification;
use App\Student;
use App\Result;
use App\Teacher;
use App\Question;
use Auth;
class ParentController extends Controller
{
    //
    public function index()
    {
    	$student_id = Student::where('parent_id', Auth::user()->id)->get()->first()->id;	
    	$notes_count = Notification::where(['student_id' => $student_id, 'seen' => 0])->count();
    	return view('parent.index',['notes_count' => $notes_count]);
    }
    public function notificationsForm()
    {
    	$student_id = Student::where('parent_id', Auth::user()->id)->get()->first()->id;    	
    	$notes = Notification::where(['student_id' => $student_id, 'seen' => 0])->get();
    	// $notes = Notification::all();
    	foreach ($notes as $note) {
    		$note->seen = 1;
    		$note->save();
    	}
    	return view('parent.notifications', ['notes' => $notes]);
    }
    public function comingexamsForm()
    {
    	return view('parent.comingexams');
    }
    public function showResults()
    {
    	$student = $student_id = Student::where('parent_id', Auth::user()->id)->get()->first();  
    	$results = Result::where('student_id', $student->id)->get();
    	return view('parent.results',['student' => $student, 'results' => $results]);
    }
    public function askForm()
    {
    	$grade = Student::where('parent_id', Auth::user()->id)->get()->first()->grade;
    	for($i=0;$i<6;$i++)
    	{
    		if($grade == 'first grade')
    			$r = '1,,,,,';
    		else if($grade == 'second grade')
    			$r = ',2,,,,';
    		else if($grade == 'third grade')
    			$r = ',,3,,,';
    		else if($grade == 'fourth grade')
    			$r = ',,,4,,';
    		else if($grade == 'fifth grade')
    			$r = ',,,,5,';
    		else if($grade == 'sixth grade')
    			$r = ',,,,,6';
    	}
    	$teachers = Teacher::where('grade', $r)->get();

    	return view('parent.askquestion',['teachers' => $teachers]);
    }
    public function postQuestion(Request $request)
    {
    	$this->validate($request, [
    		'title' => 'required|string',
    		'teacherName' => 'required|numeric',
    		'question' => 'required|string'
    	]);
    	$student_id = Student::where('parent_id', Auth::user()->id)->get()->first()->id;
    	
    	Question::create([
    		'asker_id' => $student_id, //student id
    		'to_id' => $request->teacherName,
    		'title' => $request->title,
    		'question' => $request->question,
    		'seen' => 0
		]);
		return redirect('/parent/ask')->with('success', 'Question has been submitted');
    }
}
