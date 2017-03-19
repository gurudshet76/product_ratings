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
    //return view('welcome');
    //return 'Hello! Welcome to my first app!';
    //return View::make('home');
    return View::make('login');
});


Route::get('/home', function() { 
    return View::make('home'); 
}); 

Route::get('/fileimp', function(){
    return View::make('importfile');
});

Route::get('/about', function() { 
    return 'This is our about page'; 
}); 


Route::get('/contact', function() { 
    return View::make('contact'); 
});

//--
Route::get('/managerdash', function() {
    return View::make('managerdash');
});

Route::get('/staffdash', function() { 
    return View::make('staffdash');
});

Route::get('/visitordash', function() { 
    return View::make('visitordash');
});

Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

//-- File import
Route::post('/importExcelFile', 'ImportFiles@importExcelFile');
Route::post('/importJsonFile', 'ImportFiles@importJsonFile');

//-- Product management
Route::get('/prodinfo', 'ManagerDashBoardController@getProductInfoData');
Route::post('/proddelete', 'ManagerDashBoardController@deleteSelectedProds');
Route::post('/addproduct', 'ManagerDashBoardController@addproduct');
Route::post('/editproduct', 'ManagerDashBoardController@editProdInfo');
//-- Manager dashboard
Route::get('/prodratings', 'ManagerDashBoardController@getManageProdRatings');
Route::post('/addratings', 'ManagerDashBoardController@addUserRatings');

//-- User management
Route::get('/userinfo', 'UserController@launchUserList');
Route::post('/userdelete', 'UserController@deleteUser');
Route::post('/addUser', 'UserController@addUserInfo');
Route::post('/editUser', 'UserController@editUserInfo');

//-- User roles management
Route::get('/userrolesmgmt', 'UserController@permissionOnRole');
Route::post('/deleteuserrole','UserController@deleteRole');
Route::post('/adduserrole', 'UserController@addRole');
Route::post('/edituserrole','UserController@editRole');