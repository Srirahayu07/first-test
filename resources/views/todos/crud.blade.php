<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
<body class="container">
<h1 class="text-center">Halaman Todos</h1>
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
</body>
</html>
