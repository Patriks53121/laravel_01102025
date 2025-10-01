<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/create/store/" method="POST">
    @csrf
    @method('POST')
    <label>Title:</label>
    <input type="text" name="title"><br>
    <label>Author:</label>
    <input type="text" name="author"></textarea><br>
    <label>Year:</label>
    <input type="date" name="published_year"></textarea><br>
    <button type="submit">Create</button>
</form>
</body>
</html>