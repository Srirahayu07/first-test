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
<form action="/todos/{{$todos->id}}/update-todos" method="POST">
@csrf
<input type="hidden" name="todo_id" value="{{$todos->id}}">
<div class="form-group">
Name: <input type="text" class="form-control" name="name" value="{{$todos->name}}"> </div>

<div class="form-group">
Description: <textarea type="text" class="form-control" name="description">{{$todos->description}} </textarea></div>

<div class="form-group">
Completed: 
<select class="form-control" name="completed">
    <option @if($todos->completed == '1') selected value="{{ $todos->completed }}"@endif>True</option>
    <option @if($todos->completed == '0') selected value="{{ $todos->completed }}"@endif>False</option>
  </select>
</div>

<button type="submit" class="btn btn-success">Update Todos</button>
</form>

</div>
</div>
</div>
</div>
@endsection

