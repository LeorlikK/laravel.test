@extends('admin.layout')

@section('update')
    <h1>HELLO UPDATE</h1>
    <h1>Page: {{ $page }}</h1>
    <form action="{{ route('admin.glasses_update_patch', [$glasses->id, $page]) }}" method="post">
        @csrf
        @method('patch')
        <p>ID {{ $glasses->id }}</p>
        <label for="input_n">Model</label><input id="input_n" name="name" type="text" value="{{ $glasses->name }}"><br>
        @error('name')<p>{{ $message }}</p>@enderror
        <lable for="input_s">Slug</lable><input id="input_s" name="slug" type="text" value="{{ $glasses->slug }}"><br>
        @error('slug')<p>{{ $message }}</p>@enderror
        <lable for="input_t">Text</lable><input id="input_t" name="text" type="text" value="{{ $glasses->text }}"><br>
        @error('text')<p>{{ $message }}</p>@enderror
        <lable for="input_p">Price</lable><input id="input_p" name="price" type="text" value="{{ $glasses->price }}"><br>
        @error('price')<p>{{ $message }}</p>@enderror
        <lable for="input_d">Discount</lable><input id="input_d" name="discount" type="text" value="{{ $glasses->discount }}"><br>
        @error('discount')<p>{{ $message }}</p>@enderror

        <label for="brands">Brand</label>
        <select id="brands" name="brand_id">
            @foreach($brand as $br)
                <option {{ $br->id === $glasses->brand->id ? 'selected' : '' }}value="{{ $br->id }}">{{ $br->name }}</option>
            @endforeach
        </select>

        <label for="category">Category</label>
        <select multiple id="category" name="category">
            @foreach($category as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>

        <label for="is_public">Public</label>
        <input id="is_public" name="is_public" type="checkbox" value="{{ $glasses->is_public }}">
        @error('is_public')<p>{{ $message }}</p>@enderror
        <button type="submit">Send</button>
    </form>
@endsection
