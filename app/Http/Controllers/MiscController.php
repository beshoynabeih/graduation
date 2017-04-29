<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tables;
class MiscController extends Controller
{
    public function getStaticTables(Request $request)
    {
      $lectures = Tables::getGradeTable($request->select_grade);

      return view('static.tables', ['lectures' => $lectures]);
    }
}
