<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','pagesController@index')->name('home');

Route::get('/admin/dashbord','AdminController@dashbord')->name('admin.dashbord');

Route::get('/admin/main','AdminMainPagesController@index')->name('admin.main');
Route::put('/admin/main','AdminMainPagesController@update')->name('admin.main.update');

Route::get('/admin/services','AdminController@services')->name('admin.services');
Route::get('/admin/portfolio','AdminController@portfolio')->name('admin.portfolio');
Route::get('/admin/about','AdminController@about')->name('admin.about');
Route::get('/admin/contact','AdminController@contact')->name('admin.contact');

 Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
