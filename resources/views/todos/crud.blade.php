@extends('layouts.app')


@section('title')
CRUD Todos
@endsection


@section('content')
<h1 class="text-center">Halaman Todos</h1>
<a href="/todos" class="btn btn-primary">Back</a> <br><br>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Create New Todos</button> <br><br>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Todos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/store-todos" method="POST">>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Description:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>

          <div class="form-group">
            Completed: 
            <select class="form-control" name="completed">
            <option name="true" value="1">True</option>
            <option name="false" value="0">False</option>
            </select>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Create</button>
      </div>
    </div>
  </div>
</div>

<table class="table table-bordered table-responsive table-hover">


<thead>
    <td>Name</td>
    <td>Description</td>
    <td>Completed</td>
    <td>Action</td>
</thead>

@foreach($todos as $todo)
<tr>
    <td>{{$todo->name}}</td>
    <td>{{$todo->description}}</td>
    <td>{{$todo->completed}}</td>
    <td>
        <a href="#" class="btn btn-warning">Edit</a> ||
        <a href="#" class="btn btn-danger">Delete</a>
    </td>
</tr>
@endforeach

</table>

<script>
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>
@endsection

