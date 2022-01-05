<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
 
class MytodoController extends Controller
{
    public function index(){
        return view('todos.index');
    }
}