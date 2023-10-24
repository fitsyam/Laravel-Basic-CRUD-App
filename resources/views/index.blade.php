<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
<h1>{{__('Welcome to This Page!')}}</h1>

    <p>Locale: {{ App::getLocale()}}</p>
    <a href="{{route('set_locale', 'en')}}">English</a>
    <a href="{{route('set_locale', 'id')}}">Indonesia</a>
    <br>

    @if(Auth::check())
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
    <p>{{__('Name')}}: {{ $user->name }}</p>
    <p>{{__('ID')}}: {{ $id }}</p>
    <p>{{__('Role')}}: {{ $user -> role }}</p>
    @else
    <a href="{{ route('login') }}">{{__('Login')}}</a>
    <a href="{{ route('register') }}">{{__('Register')}}</a>
    @endif

    <table border="1px">
        <tr>
            <th>ID</th>
            <th>{{__('Name')}}</th>
            <th>{{__('Score')}}</th>
            <th>{{__('Actions')}}</th>
        </tr>
        @foreach ($data as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>
                <a href="{{ route('show', $student->id) }}">{{ $student->name }}</a>
            </td>
            <td>{{ $student->score }}</td>
            <td>
                <form action="{{ route('edit', $student) }}" method="get">
                    @csrf
                    <button type="submit">{{__('Edit')}}</button>
                </form>
                <form action="{{ route('delete', $student) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">{{__('Delete')}}</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{__('Current Page')}}: {{ $data->currentPage() }} <br>
    {{__('Total Data')}}: {{ $data->total() }} <br>
    {{__('Data per page')}}: {{ $data->perPage() }} <br>

    {{ $data->links('pagination::bootstrap-4') }}
</body>
</html>
