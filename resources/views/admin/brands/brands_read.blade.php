@extends('admin.layout')

@section('read')
    <h3>{{ $brand }}</h3>
    @php($str='page=')
    <a href="{{ route('admin.brands_update', [$brand->id, $str . $page]) }}"><button>Update</button></a>

    <form action="{{ route('admin.brands_delete', $brand->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    </form>

    <a href="{{ route('admin.brands', $str . $page) }}"><button>Back_TEMPLATE</button></a>
@endsection
