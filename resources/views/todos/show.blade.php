<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Todos</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
<body>
    <div class="container">
    <h1>Data ke- : {{$todos->id}}</h1>
    <a href="/todos" class="btn btn-primary">Back</a> <br><br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">Name</div>
                <div class="card-body">
                    <p>{{$todos->name}}</p>
                </div>
                <div class="card-header">Description</div>
                <div class="card-body">
                    <p>{{$todos->description}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>