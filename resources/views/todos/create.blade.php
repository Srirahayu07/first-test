@extends('layouts.app')

@section('title')
Creating Todos
@endsection

@section('content')
<h1 class="text-center">Create Todos</h1>
<a href="/todos" class="btn btn-primary">Back</a> <br><br>
<div class="row justify-content-center">
<div class="col-md-8">

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
<form action="/store-todos" method="POST">
@csrf
<div class="form-group">
Name: <input type="text" class="form-control" name="name"> </div>

<div class="form-group">
Description: <textarea type="text" class="form-control" name="description"> </textarea></div>

<div class="form-group">
Completed: 
<select class="form-control" name="completed">
    <option value=" ">Choose</option>
    <option @if (old('completed') == "1") {{ 'selected' }} @endif value="1">True</option>
    <option @if (old('completed') == "0") {{ 'selected' }} @endif value="0">False</option>
  </select>
</div>

<button type="submit" class="btn btn-success">Create</button>
</form>

</div>
</div>
</div>
</div>
@endsection