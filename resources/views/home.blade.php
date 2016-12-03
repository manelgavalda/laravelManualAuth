@extends('layouts.app')

@section('htmlheader_title')

@endsection

@section('main-content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row text-center">
        <h3>Tasques</h3>
        <form action="/tasques" method="GET">
            <input type="submit" value="Tasques" class="btn btn-primary" name="tasques">
        </form>

        <h3>Logout</h3>
        <form action="/logout" method="GET">
            <input type="submit" value="Logout" class="btn btn-primary" name="logout">
        </form>

        <h3>Welcome</h3>
        <form action="/" method="GET">
            <input type="submit" value="Welcome" class="btn btn-primary" name="welcome">
        </form>


    </div>

</body>
</html>
@endsection