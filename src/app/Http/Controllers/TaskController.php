<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('todos.index',compact('tasks'));
    }

    public function edit($id){
        $body = Task::find($id);
        return view('todos.edit',compact('body'));
    }
}