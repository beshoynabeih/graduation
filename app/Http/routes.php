<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::auth();

Route::get('/home', 'HomeController@index');


/*
 *Static Pages
 */
Route::get('/teachers', function(){
    return view('static.teachers');
});
Route::get('/tables', 'MiscController@getStaticTables');
Route::get('/about', function(){
    return view('static.about');
});
Route::get('/contact', function(){
    return view('static.contact');
});

/*
 * Admin
 */
Route::get('/admin', function(){
    return view('admin.index');
})->middleware('admin');

Route::get('/parent', function(){
    return view('parent.index');
})->middleware('parent');

Route::get('/teacher', function(){
    return view('teacher.index');
})->middleware('teacher');


///Student Affairs
Route::get('/affairs', 'AffairsController@indexForm');
Route::get('/addstudent',  "AffairsController@addStudentForm");

//insert parent in users tables and student in students table
Route::post('/postuser', 'AffairsController@registerUser');



/*
 *Misc Controller
 */
Route::post('/table',[
  'uses' => 'AdminController@getTable',
  'as' => 'getTable'
]);
Route::get('/updatetables', 'AdminController@updateTableForm');
Route::post('/posttable', 'AdminController@postTable');
