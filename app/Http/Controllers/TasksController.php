<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Вывод содержимого из таблицы tasks
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $tasks = App\Task::all();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Вывод опеределенного значения на определенной странице
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id) {
        $task = App\Task::find($id);
        return view('tasks.show', compact('tasks'));
    }
}
