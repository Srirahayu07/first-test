@extends('layouts.app1')



@section('content')
<a href="/todos" class="btn btn-primary">Back</a> <br><br>
<h1>Number: {{$todo->id}}</h1>
<h3 class="font-italic text-center">{{$todo->name}}</h3>
    
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                
                <div class="card-header">Description</div>
                <div class="card-body">
                    <p>{{$todo->description}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection