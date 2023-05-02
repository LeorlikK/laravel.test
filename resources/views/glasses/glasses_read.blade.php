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
    {{ $glasses }}<br>
    <h1>Page: {{ $page }}</h1>
    <a href="{{ route('glasses_update_get', [$glasses->id, $page]) }}"><button>Update</button></a>

    <form action="{{ route('glasses_delete', $glasses->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Delete">
{{--        <button type="submit">Delete</button>--}}
    </form>
    @php($str='page=')
    <a href="{{ route('get_all', $str . $page) }}"><button>Back_ALL</button></a>
    <a href="{{ route('get_all_my', $str . $page) }}"><button>Back_MY</button></a>
    <a href="{{ route('get_all_template', $str . $page) }}"><button>Back_TEMPLATE</button></a>
</body>
</html>
