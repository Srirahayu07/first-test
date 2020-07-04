@extends('layouts.app1')


@section('content')


<h1 class="text-center">Halaman Todos</h1>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Create New Todos</button> <br><br>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable Todos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Completed</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach($todo as $todoo)
                  <tr>
                    <td>{{$todoo->name}}</td>
                    <td>{{$todoo->description}}</td>
                    <td>{{$todoo->completed}}</td>
                    <td>
                    <a href="#" class="btn btn-warning">Edit</a> ||
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
                </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Completed</th>
                    <th>Action</th>
                  </tr>
        </tfoot>
        </table>
    </div>
</div>


@endsection

