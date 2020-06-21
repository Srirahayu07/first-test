@extends('layouts.app')

@section('title')
Single Todo: {{$todos->name}}
@endsection

@section('content')
<a href="/todos" class="btn btn-primary">Back</a> <br><br>
<h1>Number: {{$todos->id}}</h1>
<h3 class="font-italic text-center">{{$todos->name}}</h3>
    
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                
                <div class="card-header">Description</div>
                <div class="card-body">
                    <p>{{$todos->description}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection