<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form List</h1>
    <p><a href="/create">Add book</a></p>
    <ul>
        @foreach ($books as $book)
        <div class="border">
            <li class="li">Title: {{ $book->title }}</li>
            <li class="li">Author: {{ $book->author }}</li>
            <li class="li">Year: {{ $book->published_year }}</li>
            <br />
            <form action="/delete/{{ $book->id }}" method="POST" style="display:inline;">
                @csrf
                @method('Delete')
                <button class="btn" type="submit">Delete</button>
            </form>
            <form action="/edit/{{ $book->id }}" method="GET" style="display:inline;">
                <button class="btn" type="submit">Edit</button>
            </form>
        </div>
        <br />
        @endforeach
    </ul>
    <style>

        .border {
            border: 2px solid black;
        }

        .li {
            font-size: 25px;
        }

    </style>
</body>
</html>