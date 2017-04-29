<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tables;
class AdminController extends Controller
{
    //
    public function __construct(){
      $this->middleware(['auth', 'admin']);
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
}
