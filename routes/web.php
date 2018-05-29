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
})->name('welcome');

Route::get('second_page', function () {
    return view('second_page');
})->name('second_page');

Route::get('third_page', function () {
    return view('third_page');
})->name('third_page');

Route::get('hello', function () {
	$tasks = [
		'add task',
		'find task',
		'review task'
	];
    return view('hello', compact('tasks'));
})->name('hello');

Route::post('CheckHeight', function () {
    return view('welcome');
})->middleware('CheckHeight')->name('CheckHeight');

Route::post('CheckWeight', function () {
    return view('welcome');
})->middleware('CheckWeight')->name('CheckWeight');

// Route::get('/tasks', function () {
// 	// $tasks = DB::table('tasks')->get();
// 	// $tasks = App\Task::all();
// 	$tasks = App\Task::incomplete();
//     return view('tasks.index', compact('tasks'));
// });

// Route::get('/tasks/{task}', function ($id) {
// 	$task = DB::table('tasks')->find($id);
//     return view('tasks.show', compact('task'));
// });


//articles and users
Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/articles', 'ArticlesController@showAll')->name('articles');

Route::get('/users', 'UsersController@showAll')->name('users');

Route::get('stud_delete/{id}','UsersController@deleteUser')->name('user_delete');


//lect sub rooms
Route::get('lectures/','LecturesController@render')->name('lectures');

Route::get('subjects/','SubjectsController@render')->name('subjects');

Route::get('rooms/','RoomsController@render')->name('rooms');
