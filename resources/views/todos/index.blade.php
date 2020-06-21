<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
<body>
    <div class="container">
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
                                <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right">View</a>
                            </li>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>


</table>
</body>
</html>
