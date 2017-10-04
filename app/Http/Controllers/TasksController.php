<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    //indx method 
    public function index(){
        echo 'tasks';

        $tasks=Task::all();
        return view('tasks.index',compact('tasks'));


        }
    }

