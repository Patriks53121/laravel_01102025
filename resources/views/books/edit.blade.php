<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/edit/update/{{ $book->id }}" method="POST">
    @csrf
    @method('PUT')
    <label>Title:</label>
    <input type="text" name="title" value="{{$book->title}}"><br>
    <label>Author:</label>
    <input type="text" name="author" value="{{$book->author}}"><br>
    <label>Year:</label>
    <input type="text" name="published_year" value="{{$book->published_year}}"><br>
    <button type="submit">Update</button>
</body>
</html>