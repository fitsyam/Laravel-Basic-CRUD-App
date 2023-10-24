<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>
</head>

<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if (Session::has('message'))
    <div>
        {{ Session::get('message') }}
    </div>
    @endif

    <form action="{{ route('store_password') }}" method="post">
        @csrf
        @method('PATCH') <!-- Gunakan metode PATCH -->
        <input type="password" name="new_password">
        <input type="password" name="new_password_confirmation">
        <button type="submit">Change Password</button>
    </form>
</body>

</html>