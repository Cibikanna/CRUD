<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('NiceAdmin/css/style.css') }}">
<script src="{{ asset('NiceAdmin/js/main.js') }}"></script>

    <title>form page</title>
</head>
<body>
    <form method="post" action="{{route('layout-upload')}}" class="form">
@csrf
        <label>Name</label>
        <input type="text" name="name" autocomplete="off">
        <br>
        <label>Age</label>
        <input type="number" name="age" autocomplete="off">
        <br>

        <label>Number</label>
        <input type="number" name="number" autocomplete="off">
        <br>

        <button type="submit">send</button>
    </form>

    <a href="{{route('show-table')}}">Show table</a>
</body>
</html>
