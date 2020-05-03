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

Route::post('/contact/postrequest', 'MiscController@postRequest');

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



///Student Affairs
Route::get('/affairs', 'AffairsController@indexForm');
Route::get('/addstudent',  "AffairsController@addStudentForm");
Route::post('/postuser', 'AffairsController@registerUser');

Route::get('/getgradestudents', 'AffairsController@getGradeStudents');

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
Route::get('/affairs/showrequests', 'AffairsController@showRequestsForm');
/*
 *Admin Routes
 */
Route::get('/admin', 'AdminController@index');
Route::get('/updatetables', 'AdminController@updateTableForm');
Route::post('/posttable', 'AdminController@postTable');
Route::get('/addemployee', 'AdminController@addEmployeeForm');
Route::post('/addemployee', 'AdminController@postEmployee');
// Route::post('/logout', 'UserController@logout');


/*
*Teacher Routes
*/
Route::get('/teacher',  'TeacherController@index');
Route::get('/teacher/managestudents', 'TeacherController@manageStudentsForm');
Route::get('/teacher/student/result/{id}', 'TeacherController@resultForm');
Route::get('/teacher/student/sendnotification/{id}', 'TeacherController@notesForm');
Route::post('/teacher/student/postresult/{id}', 'TeacherController@postResult');
Route::post('/teacher/student/sendnotification/{id}', 'TeacherController@postNotification');
Route::get('/teacher/answerquestions', 'TeacherController@answerQuestionsForm');
Route::post('/teacher/answer/{id}', 'TeacherController@answerQuestion');

/*
 *Parent
 */

Route::get('/parent', 'ParentController@index');
Route::get('/parent/notifications', 'ParentController@notificationsForm');
Route::get('/parent/comingexams', 'ParentController@comingexamsForm');
Route::get('/parent/resutls', 'ParentController@showResults');
Route::get('/parent/ask', 'ParentController@askForm');
Route::post('/parent/postquestion', 'ParentController@postQuestion');