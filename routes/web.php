<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

//Route::get('/loginform', function () {
//    return view('login');
//});
Route::get('/doctorhomepage', function () {
    return view('doctor');
});
Route::get('/adminhomepage', function () {
    return view('adminusers');
});
Route::post('/register', function () {
    return view('admin');
});
Route::get('/nurse', function () {
    return view('patientadded');
});

//usercontroller routes
Route::get('/allUsers',  'UserController@selectAllUsers');
Route::post('/allUsersBack',  'UserController@allUsers');
Route::post('/login',  'UserController@loginUser');
Route::post('/deleteUser','UserController@deleteUser');
Route::post('/addUser',  'UserController@addUser');

Route::get('/showAppointments',  'PatientController@showAppointments');

Route::post('/logout', 'UserController@logout' );
Route::post('/change_password', 'UserController@changePassword' );
Route::post('/patientTreatment',  'PatientController@patientTreatment');
Route::post('/searchPatient',  'PatientController@searchPatient');
Route::post('/editPatient',  'PatientController@editPatient');
Route::post('/postPatientEdit',  'PatientController@postPatientEdit');
Route::get('/showAllAppointments',  'PatientController@showAllAppointments');
Route::post('/addPatient',  'PatientController@addPatient');
