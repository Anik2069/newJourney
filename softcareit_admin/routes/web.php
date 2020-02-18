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

Route::get('/login', function () {

    return view('login');
});

Route::get('/', function () {

    return view('login');
});


Route::post('/submitvalue', "LogindataController@checkuser");

Route::group(['middleware' => 'checkuser1'],function () {


    Route::get('/home', function () {
        return view('index');
    });

    Route::get('/addlist', "EmployeeController@viewlist");
    Route::post('/submitinlist', "EmployeeController@insertlist");
    Route::post('/submitexlist', "EmployeeController@insertexlist");
    Route::get('/deleteex/{id}', "EmployeeController@deleteexlist");
    Route::get('/deletein/{id}', "EmployeeController@deleteinlist");

    Route::get('/addincome', "IncomehistoryController@viewlist");
    Route::post('/submitinhistory', "IncomehistoryController@insertlist");
    Route::post('/submitexhistory', "ExpenditurehistoryController@insertexlist");


    Route::post('/addemp', "EmployeeController@submitinfo");
    Route::get('/getdata', "AttendenceController@getdata");
    Route::get('/logout', "LogindataController@logout");
    Route::post('/submitattendence', "AttendenceController@addattendence");



});

Route::group(['middleware' => 'userrole'],function () {
    Route::get('/report', "IncomehistoryController@report");
    Route::post('/search', "IncomehistoryController@search");
    Route::get('/attendence', "EmployeeController@attedence");
    Route::get('/addemployee', "EmployeeController@addemploye");
});
