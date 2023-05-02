@extends('admin.layout')

@section('create')
    <form action="{{ route('admin.brands_create_post') }}" method="post">
        @csrf
        <label for="brand_create_id">Name:</label>
        <input id="brand_create_id" type="text" placeholder="Name" name="name">
        <label for="slug_create_id">Slug:</label>
        <input id="slug_create_id" type="text" placeholder="Slug" name="slug">
        <button type="submit">Create</button>
    </form>
@endsection
