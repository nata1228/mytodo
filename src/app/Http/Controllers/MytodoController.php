<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MytodoController extends Controller
{
    // public function 関数名(){
    public function index(){
        $todo = 'aaaa';
        $limit = '2022'
        // return view('返したいbladeファイル');
        return view('todos.index', compact('todo'));
    }
}