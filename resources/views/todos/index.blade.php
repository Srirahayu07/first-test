@extends('layouts.app1')


@section('content')
 <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
              
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item m-0  "><a href="#">Home</a></li>
                <li class="breadcrumb-item m-0  active">Dashboard v1</li>
              </ol>
                
            </div><!-- /.col -->
          </div><!-- /.row -->
<h1 class="text-center">Halaman Todos</h1>
        
            <a href="/new-todos" class="btn btn-primary"><i class="fas fa-user"></i> Create Todos</a> <br><br>
                <div class="card card-default">
                    <div class="card-header">
                        Todos
                    </div>

                    <div class="card-body">
                        <div class="list-group">
                            @foreach($todo as $todoo)
                            <div class="row text-center">
                            <div class="col-md-3">{{$todoo->name}}</div>

                                <div class="col-md-3">
                                 @if($todoo->completed=='1')
                                 <p style="color:green"><i>Completed</i></p>
                                     @elseif($todoo->completed=='0')
                                 <p style="color:red"><i>Uncompleted</i></p>
                                     @else

                                    @endif
                                </div>
 

                                <div class="col-md-3">

                                    <a href="/todos/{{$todoo->id}}">
                                     <i class="fas fa-eye mr-2" style="color:black"></i>
                                    </a>

                                    <a href="/todos/{{$todoo->id}}/edit">
                                     <i class="fas fa-edit mr-2" style="color:black"></i>
                                    </a>

                                    <a href="#" data-toggle="modal" data-target="#myModal{{$todoo->id}}">
                                    <i class="fas fa-trash" style="color:black"></i>
                                    </a>
                                </div>

                                <div class="col-md-3">

                                @if(!$todoo->completed)
                                <a href="/todos/{{$todoo->id}}/completed" class="btn btn-warning btn-xs">Completed</a>
                                @endif
                               
                                </div>
                            </div>


  <!-- The Modal -->
  <div class="modal fade" id="myModal{{$todoo->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Delete</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Are you sure delete <i><b>{{$todoo->name}}</b></i>?
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          <a href="/todos/{{$todoo->id}}/delete"><button type="button" class="btn btn-danger">Yes</button></a>
        </div>
        
      </div>
    </div>
  </div>

                            @endforeach
                        </div>
                    </div>
                </div>
           
        
@endsection