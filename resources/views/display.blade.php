<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>display data from database in laravel</h1>
    
    <table border="1px" align="center">
        <tr>
            <th>Student Name</th>
            <th>Email</th>
            <th>Image</th>
        </tr>
        
        @foreach($data as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>
                <img width="100px" height="100px" src="studentimage/{{ $student->image }}" alt="">
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>