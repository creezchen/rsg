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
//App::setLocale('ja');


Route::post('/rsg_signup', 'RsgLoginController@signup')->name('rsg_signup');
Route::post('/rsg_signup_handle', 'RsgLoginController@signupHandle')->name('rsg_signup_handle');

Route::post('/rsg_signin', 'RsgLoginController@signin')->name('rsg_signin');
Route::post('/rsg_signin_handle', 'RsgLoginController@signinHandle')->name('rsg_signin_handle');

Route::get('/rsg_activation', 'RsgLoginController@activation')->name('rsg_activation');
Route::get('/rsg_logout', 'RsgLoginController@logout')->name('rsg_logout');


Route::get('/help', 'HomeController@help')->name('help');
Route::get('/notice', 'HomeController@notice')->name('notice');
Route::Post('/getrsg', 'HomeController@getrsg')->name('getrsg');

Route::get('/product/detail', 'ProductController@detail')->name('detail');

//这一行代码一定要放在最下面。若有get路由放在它后面，则这些get路由不能正常工作。
Route::get('/{customer_email?}', 'HomeController@index')->name('home');


