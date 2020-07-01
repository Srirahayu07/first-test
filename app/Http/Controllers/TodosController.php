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

    public function show(Todo $todo){
        return view('todos.show')->with('todos', $todo);
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
        session()->flash('success','Todos Created Successfuly');
        return redirect('/todos');
    }

    public function edit(Todo $todo){
        
         return view('todos.edit')->with('todos', $todo);
    }

    public function update(Todo $todo){
        $this->validate(request(),[
            'name'=>'required',
            'description'=>'required',
            'completed'=>'required'
        ]);

        $data = request()->all();
   
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = $data['completed'];

        $todo->save();
        session()->flash('success','Todos Updated Successfuly');
        return redirect('/todos');
    }

    public function delete(Todo $todo){
       
        $todo->delete();
        session()->flash('success','Todos Deleted Successfuly');
        return redirect('/todos');
    }

    public function completed(Todo $todo){
        $todo->completed = true;
        $todo->save();
        session()->flash('success','Todos Completed Successfuly');
        return redirect('/todos');
    }
}
