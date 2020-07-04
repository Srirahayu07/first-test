@extends('layouts.app')

@section('title')
Edit Todos
@endsection

@section('content')
<h1 class="text-center">Edit Todos</h1>
<div class="row justify-content-center">
<div class="col-md-8">
<a href="/todos" class="btn btn-primary">Back</a> <br><br>
<div class="card card-default">
<div class="card-header">New Todos</div>

<div class="card-body">
@if($errors->any())
<div class="alert alert-danger">
    <ul class="list-group">
    @foreach($errors->all() as $error)
        <li class="list-group-item">
        {{$error}}
        </li>
        @endforeach
    </ul>
   
</div>
@endif
<form action="/todos/{{$todo->id}}/update-todos" method="POST">
@csrf
<input type="hidden" name="todo_id" value="{{$todo->id}}">
<div class="form-group">
Narasumber: <input type="text" class="form-control" name="name" value="{{$todo->name}}"> </div>

<div class="form-group">
Judul: <input type="text" class="form-control" name="judul" value="{{$todo->judul}}"> </div>

<div class="form-group">
Description: <textarea type="text" class="form-control" name="description">{{$todo->description}} </textarea></div>

<div class="form-group">
Completed: 
<select class="form-control" name="completed">
    <option @if($todo->completed == '1') selected value="{{ $todo->completed }}"@endif>True</option>
    <option @if($todo->completed == '0') selected value="{{ $todo->completed }}"@endif>False</option>
  </select>
</div>

<button type="submit" class="btn btn-success">Update Todos</button>
</form>

</div>
</div>
</div>
</div>
@endsection

