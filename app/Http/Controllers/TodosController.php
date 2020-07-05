<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TodosController extends Controller
{
    public function index(){
        $todo = DB::table('todo')->get();
        return view('todos.index',['todo'=>$todo]);
    }

    public function crud(){
        $todo = DB::table('todo')->get();
        return view('todos.crud',['todo'=>$todo]);
    }

    public function show($id){
        $todo = Todo::find($id);
        return view('todos.show',['todo'=>$todo]);
    }

    public function create(){
        return view('todos.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'judul'=>'required',
            'description'=>'required',
            'completed'=>'required'
        ]);


        Todo::create([
            'name'=>$request->name,
            'judul'=>$request->judul,
            'description'=>$request->description,
            'completed'=>$request->completed,
        ]);
        session()->flash('success','Todos Created Successfuly');
        return redirect('/timeline');
    }

    public function edit($id){
        $todo = Todo::find($id);
         return view('todos.edit',['todo' => $todo]);
    }

    public function update($id, Request $request){
        $this->validate($request,[
            'name',
            'judul',
            'description',
            'completed'
        ]);

        $todo = Todo::find($id);
   
        $todo->name = $request->name;
        $todo->judul = $request->judul;
        $todo->description = $request->description;
        $todo->completed = $request->completed;

        $todo->save();
        session()->flash('success','Todos Updated Successfuly');
        return redirect('/timeline');
    }

    public function delete($id){
        $todo = Todo::find($id);
        $todo->delete();
        session()->flash('success','Todos Deleted Successfuly');
        return redirect('/todos');
    }

    public function completed($id){
        $todo = Todo::find($id);
        $todo->completed = true;
        $todo->save();
        session()->flash('success','Todos Completed Successfuly');
        return redirect('/todos');
    }

    public function timeline(){
        $todo = DB::table('todo')->orderBy('created_at','desc')->get();
         return view('todos.timeline',['todo'=>$todo]);
        
    }
     public function profile($id){
         $todo = Todo::find($id);
        return view('todos.profile',['todo'=>$todo]);
    }

    public function detail_news($id){
        $todo = Todo::find($id);
        
        return view('todos.detail_news',['todo'=>$todo]);
}
}
