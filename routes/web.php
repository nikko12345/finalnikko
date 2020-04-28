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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'SubjectController@index')->name('subjects.index');


Route::get('home/subjects', 'SubjectController@index')->name('subjects.index');
Route::get('home/subjects/add', 'SubjectController@addSubject')->name('subjects.add');
Route::post('home/subjects/store', 'SubjectController@store')->name('subjects.store');
Route::post('home/subjects/update', 'SubjectController@update')->name('subjects.update');
Route::post('home/subjects/destroy', 'SubjectController@destroy')->name('subjects.destroy');
Route::post('home/subjects/subjectenroll', 'SubjectController@subjectEnroll')->name('subjects.subjectenroll');