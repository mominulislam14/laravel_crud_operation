<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Update page</h1>
    <form action="{{ url('update',$student->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">Student Name</label>
            <input type="text" name="name" value="{{ $student->name }}">
        </div>
        <div>
            <label for="">Student Email</label>
            <input type="text" name="email" value="{{ $student->email }}">
        </div>
        <div>
            <label for="">Old image</label>
            <img height="100" width="100" src="/studentimage/{{ $student->image }}" alt="">
        </div>
        <div>
            <label for="">Change the image</label>
            <input type="file" name="file">
        </div>
        <div>
            <input type="submit" value="submit">
        </div>
    </form>
</body>
</html>