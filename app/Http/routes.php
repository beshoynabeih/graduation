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
Route::post('/getgradestudents', 'AffairsController@getGradeStudents');
Route::get('/student/edit/{id}', 'AffairsController@editStudentForm');
Route::post('/student/update', 'AffairsController@updateStudent');
Route::get('/student/delete/{id}', 'AffairsController@deleteStudent');
Route::get('/student/payfees/{id}', 'AffairsController@payFees');
Route::get('/student/sendnotification/{id}', 'AffairsController@sendNotificationForm');
Route::post('/student/sendnotification/{id}', 'AffairsController@sendNotification');
Route::get('/student/result/{id}', 'AffairsController@resultsForm');
Route::get('/student/results/{id}/manage', 'AffairsController@resultsManageForm');
Route::post('/student/postresult/{id}', 'AffairsController@postResult');
Route::get('/student/result/{id}/{type?}/edit', 'AffairsController@resultsManageForm');
Route::get('/student/result/{id}/{type?}/delete', 'AffairsController@deleteResult');

Route::get('/affairs/updatetables', 'AffairsController@updateTableForm');
Route::post('/affairs/posttable', 'AffairsController@postTable');
/*
 *Admin Routes
 */
Route::get('/admin', 'AdminController@index');
Route::get('/updatetables', 'AdminController@updateTableForm');
Route::post('/posttable', 'AdminController@postTable');
Route::get('/addemployee', 'AdminController@addEmployeeForm');
Route::post('/addemployee', 'AdminController@postEmployee');