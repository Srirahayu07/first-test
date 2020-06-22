@extends('layouts.app')

@section('title')
Todos
@endsection

@section('content')
<h1 class="text-center">Halaman Todos</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
            <a href="/new-todos" class="btn btn-primary"><i class="fas fa-user"></i> Create Todos</a> <br><br>
                <div class="card card-default">
                    <div class="card-header">
                        Todos
                    </div>

                    <div class="card-body">
                        <div class="list-group">
                            @foreach($todos as $todo)
                            <div class="row list-group-item text-center">
                            <div class="col-md-4">{{$todo->name}}</div>

                                <div class="col-md-4">
                                 @if($todo->completed=='True')
                                 <p style="color:green"><i>Completed</i></p>
                                     @elseif($todo->completed=='False')
                                 <p style="color:red"><i>Uncompleted</i></p>
                                     @else

                                    @endif
                                </div>


                                <div class="col-md-4">

                                    <a href="/todos/{{$todo->id}}">
                                     <i class="fas fa-eye" style="color:black"></i>
                                    </a>&nbsp;&nbsp;&nbsp;

                                    <a href="/todos/{{$todo->id}}/edit">
                                     <i class="fas fa-edit" style="color:black"></i>
                                    </a>&nbsp;&nbsp;&nbsp;

                                    <a href="#" data-toggle="modal" data-target="#myModal">
                                    <i class="fas fa-trash" style="color:black"></i>
                                    </a>
                                </div>
                            </div>


  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Delete</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Are you sure delete <i><b>{{$todo->name}}</b></i>?
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          <a href="/todos/{{$todo->id}}/delete"><button type="button" class="btn btn-danger">Yes</button></a>
        </div>
        
      </div>
    </div>
  </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection