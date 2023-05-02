@extends('admin.layout')

@section('update')
    <h1>HELLO UPDATE</h1>
    <h1>Page: {{ $page }}</h1>
    <form action="{{ route('admin.brands_update_patch', [$brand->id, $page]) }}" method="post">
        @csrf
        @method('patch')
        <p>ID {{ $brand->id }}</p>
        <label for="input_n">Model</label><input id="input_n" name="name" type="text" value="{{ $brand->name }}"><br>
        @error('name')<p>{{ $message }}</p>@enderror
        <lable for="input_s">Slug</lable><input id="input_s" name="slug" type="text" value="{{ $brand->slug }}"><br>
        @error('slug')<p>{{ $message }}</p>@enderror

        <button type="submit">Send</button>
    </form>
@endsection
