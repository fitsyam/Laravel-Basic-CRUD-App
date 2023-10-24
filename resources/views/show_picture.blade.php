<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Picture</title>
</head>
<body>
    <p>{{$picture->name}}</p>
    <p>{{$picture->path}}</p>
    <img src="{{ $url }}" alt="" height="200px">
    <form action="{{route('picture.delete', $picture)}}" method="post">
        @method('delete')
        @csrf
        <button type="submit">Delete</button>
    </form>
</body>
</html>