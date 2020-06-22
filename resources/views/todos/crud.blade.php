@extends('layouts.app')


@section('title')
CRUD Todos
@endsection


@section('content')
<h1 class="text-center">Halaman Todos</h1>
<a href="/todos" class="btn btn-primary">Back</a> <br><br>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Create New Todos</button> <br><br>



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

<!-- <script type="text/javascript">
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script> -->
@endsection

