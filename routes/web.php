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
// Auth Routes
Auth::routes();

// Landing Page
Route::get('/', function () {
    if(Auth::user()){
        return view('welcome'); 
    }
    else{
        return view('welcome'); 
    }
    
})->name('wel');

// Dashboard
Route::get('/dash', [
    "uses" => 'LoginController@dash',
    'middleware' => 'auth'
])->name('dash');

// Views
Route::get('/staff', [
    "uses" => 'LoggedController@staff',
    'as' => 'Logged.staff',
    'middleware' => 'auth'
]);
Route::get('/lab_as', [
    "uses" => 'LoggedController@lab_as',
    'as' => 'Logged.lab_as',
    'middleware' => 'auth'
]);

Route::get('/dept_off', [
    "uses" => 'LoggedController@dept_off',
    'as' => 'Logged.dept_off',
    'middleware' => 'auth'
]);
Route::get('/hod', [
    "uses" => 'LoggedController@hod',
    'as' => 'Logged.hod',
    'middleware' => 'auth'
]);
Route::get('/princi', [
    "uses" => 'LoggedController@princi',
    'as' => 'Logged.princi',
    'middleware' => 'auth'
    
]);
Route::get('/store_manager', [
    "uses" => 'LoggedController@store_manager',
    'as' => 'Logged.store_manager',
    'middleware' => 'auth'
]);
Route::get('/admin', [
    "uses" => 'LoginController@adminIndex',
    'as' => 'Logged.admin',
    'middleware' => 'auth'
]);


// --------------------lab_as part-----------------
Route::get('/lab_as/request', [
    "uses" => 'LabController@create',
    'as' => 'Logged.lab_as.request',
    'middleware' => 'auth'
]);

Route::post('/lab_as','LabController@store');
Route::get('/lab_as/history', [
    "uses" => 'LabController@history',
    'as' => 'Logged.lab_as.history',
    'middleware' => 'auth'
]);
Route::get('/lab_as/labcomponent', [
    "uses" => 'LabController@labcomp',
    'as' => 'Logged.lab_as.labcomp',
    'middleware' => 'auth'
]);
// -----------------------------------------

//--------------------staff part-----------------
Route::get('/staff/request','StaffController@create');
Route::post('/staff','StaffController@store');
Route::get('/staff/history','StaffController@history');
// -----------------------------------------

// Admin

Route::post('/admin','LoginController@adminStore');
Route::get('/admin/manage_users',[
    'uses' => 'LoginController@update',
    'as' => 'manage_user',
    'middleware' => 'auth'
]);

Route::get('admin/edit-user/{id}', [
    "uses" => 'LoginController@edit',
    'as' => 'edit.user',
    'middleware' => 'auth'

]);

Route::put('admin/edit-user/{id}/post', [
    "uses" => 'LoginController@edit',
    'as' => 'edit.user',
    'middleware' => 'auth'

]);




//  HOD
Route::get('/labs','HodController@see');
Route::get('/export/{type}','HodController@export');
Route::get('/req','PrincipleController@see');


//  Requests
Route::get('/staffR', [
    "uses" => 'LoggedController@staffR',
    'as' => 'staffR',
    'middleware' => 'auth'
]);

Route::get('/labR', [
    "uses" => 'LoggedController@labR',
    'as' => 'labR',
    'middleware' => 'auth'

]);

Route::get('/staffR/forward/{req_id}', [
    "uses" => 'LoggedController@forward_by_staff',
    'as' => 'forward.by.staff',
    'middleware' => 'auth'
]);
Route::get('/staffR/check/{req_id}', [
    "uses" => 'LoggedController@check_by_staff',
    'as' => 'check.by.staff',
    'middleware' => 'auth'
]);

Route::get('/labR/forward/{req_id}', [
    "uses" => 'LoggedController@forward_by_lab',
    'as' => 'forward.by.lab',
    'middleware' => 'auth'
]);
Route::get('/labR/check/{req_id}', [
    "uses" => 'LoggedController@check_by_lab',
    'as' => 'check.by.lab',
    'middleware' => 'auth'
]);


Route::get('/staffR/send_request/{req_id}/{avail_id}', [
    "uses" => 'LoggedController@send_req_to_staff',
    'as' => 'send.req.to.staff',
    'middleware' => 'auth'
]);

Route::get('/labR/send_request/{req_id}/{avail_id}', [
    "uses" => 'LoggedController@send_req_to_lab',
    'as' => 'send.req.to.lab',
    'middleware' => 'auth'
]);

