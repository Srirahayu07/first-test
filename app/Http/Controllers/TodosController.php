<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
      
        return view('todos.index')->with('todos', Todo::all());
    }

    public function crud(){
        return view('todos.crud')->with('todos', Todo::all());
    }

    public function show($todoId){
        return view('todos.show')->with('todos', Todo::find($todoId));
    }

    public function create(){
        return view('todos.create');
    }

    public function store(){
        $this->validate(request(),[
            'name'=>'required|min:6|max:25',
            'description'=>'required|min:25|max:255',
            'completed'=>'required'
        ]);


        $data = request()->all();

        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = $data['completed'];

        $todo->save();

        return redirect('/todos');
    }
}
