@extends('layouts.app')

@section('title')
Todos
@endsection

@section('content')
<h1 class="text-center">Halaman Todos</h1>
        <a href="crud" class="btn btn-primary">Halaman Crud</a> <br><br>
        <div class="row justify-content-center">
            <div class="col-md-8 offsets-md-2">
                <div class="card card-default">
                    <div class="card-header">
                        Todos
                    </div>

                    <div class="card-body">
                        <div class="list-group">
                            @foreach($todos as $todo)
                            <li class="list-group-item">
                                {{$todo->name}}
                                <div class="float-right">
                                <a href="/todos/{{$todo->id}}">
                                <i class="fas fa-eye"></i>
                                </a>

                            <a href="/todos/{{$todo->id}}">
                                <i class="fas fa-eye"></i>
                            </a>

                            <a href="/todos/{{$todo->id}}">
                                <i class="fas fa-times-circle"></i>
                            </a>
                            </div>
                            </li>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection