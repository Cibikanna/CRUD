<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Displaying the database</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>
    <a href="{{route('layout-form')}}">Return to form</a><br>
    <h1>The table:</h1><br>

    <table border="1">
        <th>Id</th>
        <th>Name</th>
        <th>Age</th>
        <th>Number</th>
        <th>Delete</th>
        <th>Edit</th>

        @foreach ($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->number}}</td>
                <td>
                    <form method="POST" action="{{route('student-delete',$student->id)}}" >
                        @csrf
                        @method('DELETE')
                        <input type="hidden" value="DELETE">
                        <button type="submit">delete</button>
                    </form>
                </td>
                <td>
                    <form method="GET" action="{{route('student-edit',$student->id)}}" >
                        @csrf
                        <input type="hidden" value="DELETE">
                        <button type="submit">Edit</button>
                    </form>
{{--                    <a href="{{route('student-edit',$student->id)}}">Edit</a>--}}
                </td>
            </tr>


        @endforeach
    </table>
{{$students->links()}}
</body>
</html>
