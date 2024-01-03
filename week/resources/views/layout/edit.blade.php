<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit mode</title>
</head>
<body>
<form method="POST" action="{{route('student-update',$student->id)}}" class="form">
    @csrf
    @method('PUT')
    <label>Name</label>
    <input type="text" name="name" autocomplete="off" value="{{$student->name}}">
    <br>
    <label>Age</label>
    <input type="number" name="age" autocomplete="off" value="{{$student->age}}">
    <br>

    <label>Number</label>
    <input type="number" name="number" autocomplete="off" value="{{$student->number}}">
    <br>

    <button type="submit">update</button>
</body>
</html>
