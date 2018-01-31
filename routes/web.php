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

    return view('welcome');
});

Auth::routes();

Route::get('/home', 'StudentController@index')->name('home');
Route::get('/create', 'StudentController@create')->name('create');
Route::post('/create', 'StudentController@store')->name('store');
Route::get('/studentlist', 'StudentController@studentlist')->name('studentlist');
Route::get('/edit', 'StudentController@edit')->name('studentlist');
Route::get('edit/{id}', 'StudentController@editdelete')->name('editdelete');
Route::post('update/{id}', 'StudentController@update')->name('update');
Route::delete('delete/{id}', 'StudentController@delete')->name('delete');

Route::get('/create_faculty', 'FacultyController@create_faculty')->name('create_faculty');
Route::post('/create_faculty', 'FacultyController@store_faculty')->name('store_faculty');
Route::get('/facultylist', 'FacultyController@facultylist')->name('facultylist');
Route::get('/edit_faculty', 'FacultyController@edit_faculty')->name('facultylist');
Route::get('edit_faculty/{id}', 'FacultyController@edit2_faculty')->name('edit2_faculty');
Route::post('update_faculty/{id}', 'FacultyController@update_faculty')->name('update_faculty');
Route::delete('delete_faculty/{id}', 'FacultyController@delete_faculty')->name('delete_faculty');
