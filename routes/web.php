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


/*Создаем путь к контроллеру*/
Route::get('/tasks','TasksController@index');
Route::get('/tasks{task}','TasksController@show');

/*Выведем содержимое таблицы tasks с заданным условием*/
/*Route::get('/task', function () {
   $tasks = App\Task::incomplete();
    return view('tasks.index', compact('tasks'));
});*/

/*Route::get('/task{task}', function ($id) {
    $task = DB::table('tasks')->find($id);
    return view('tasks.show', compact('task'));
});*/


