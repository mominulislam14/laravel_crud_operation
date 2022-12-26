<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>This is home page</h1>
    
    <div align="center">
        <form action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding:10px;">
                <label for="">Name</label>
                <input type="text" name="name">
            </div>
            <div style="padding:10px;">
                <label for="">Email</label>
                <input type="email" name="email">
            </div>
            <div style="padding:10px;">
                <label for="">Image</label>
                <input type="file" name="file">
            </div>
            <div style="padding:10px;">
                <input type="Submit">
            </div>

        </form>
    </div>
    
</body>
</html>