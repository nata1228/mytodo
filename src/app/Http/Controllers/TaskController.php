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
        $task = Task::find($id);
        return view('todos.edit',compact('task'));
    }

    public function update(Request $request){
        $task = Task::find($request);
        $task->name = $request->input('name');
        $task->limit = $request->input('limit');
        $task->save();
        return redirect('/tasks');
    }

    public function store(Request $request){
        $task = new Task();
        $task->name = $request->input('name');
        $task->limit = $request->input('limit');
        $task->save();
        return redirect('/tasks');
    }

    public function delete($id){
        $task =Task::find($id);
        $task->delete();
        return redirect('/tasks');
    }
}