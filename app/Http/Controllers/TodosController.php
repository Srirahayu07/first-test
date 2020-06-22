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
            'name'=>'required',
            'description'=>'required',
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

    public function edit($todoId){
        
         return view('todos.edit')->with('todos', Todo::find($todoId));
    }

    public function update($todoId){
        $this->validate(request(),[
            'name'=>'required',
            'description'=>'required',
            'completed'=>'required'
        ]);

        $data = request()->all();
        $todo=Todo::find($todoId);
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = $data['completed'];

        $todo->save();

        return redirect('/todos');
    }

    public function delete($todoId){
        $todo = Todo::find($todoId);
        $todo->delete();

        return redirect('/todos');
    }
}
