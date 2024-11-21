<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;

class TodoListController extends Controller
{
    public function index(){

        $todos = TodoList::all();

        return view('todos.index', compact('todos'));
    }

    public function store(Request $request){
        $todo = new TodoList();
        $todo->title = $request->todo_name;
        $todo->status = 1;
        $todo->save();

        return redirect()->back();
    }
}
