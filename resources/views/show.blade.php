<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <title>Show</title>
</head>
<body>
    <p>Id: {{$student->id}}</p>
    <p>Name: {{$student->name}}</p>
    <p>Score: {{$student->score}}</p>
    <p>Activities: </p>
    @foreach ($student->activities)
        <p>{{ $activities->name }}</p>
    @endforeach
</body>
</html>