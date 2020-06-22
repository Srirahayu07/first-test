@extends('layouts.app')

@section('title')
Todos
@endsection

@section('content')
<h1 class="text-center">Halaman Todos</h1>
        <div class="row justify-content-center">
            <div class="col-md-8 offsets-md-2">
            <a href="/new-todos" class="btn btn-primary"><i class="fas fa-user"></i> Create Todos</a> <br><br>
                <div class="card card-default">
                    <div class="card-header">
                        Todos
                    </div>

                    <div class="card-body">
                        <div class="list-group">
                            @foreach($todos as $todo)
                            <li class="list-group-item">
                                {{$todo->name}}
                                <div class="text-center">
                                 @if($todo->completed=='True')
                                 <p style="color:green"><i>Completed</i></p>
                                     @elseif($todo->completed=='False')
                                 <p style="color:red"><i>Uncompleted</i></p>
                                     @else

                                @endif
                                </div>


                                <div class="float-right">

                                <a href="/todos/{{$todo->id}}">
                                <i class="fas fa-eye" style="color:black"></i>
                                </a>

                            <a href="/todos/{{$todo->id}}/edit">
                                <i class="fas fa-edit" style="color:black"></i>
                            </a>

                            <a href="/todos/{{$todo->id}}">
                                <i class="fas fa-times" style="color:red"></i>
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