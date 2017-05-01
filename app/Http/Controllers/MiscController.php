<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tables;
use App\Contact;
class MiscController extends Controller
{
    public function getStaticTables(Request $request)
    {
      $lectures = Tables::getGradeTable($request->select_grade);

      return view('static.tables', ['lectures' => $lectures]);
    }
    public function postRequest(Request $request)
    {
    	$this->validate($request,[
    		'name' => 'required|string',
    		'email' => 'required|email',
    		'subject' => 'required|string|max:500',
    		'content' => 'required|string',
    	]);
    	Contact::create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'subject' => $request->subject,
    		'content' => $request->content,
    	]);
    	return redirect('/contact')->with('success', 'Your request has been submitted');
    }
}
