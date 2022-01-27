<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        // get, allは配列で帰ってくる
        $tasks = Task::all();
        return view('todos.index',compact('tasks'));
    }

    public function edit($id){
        // オブジェクトで返るってくる
        $task = Task::find($id);
        return view('todos.edit',compact('task'));
    }
}