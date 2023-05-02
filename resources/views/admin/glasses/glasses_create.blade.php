@extends('admin.layout')

@section('create')
    <form action="{{ route('admin.glasses_create_post') }}" method="post">
        @csrf
        <input name="name" type="text" placeholder="Name" value="{{ old('name') }}"><br>
        @error('name')<p class="text-danger">{{ $message }}</p>@enderror
        <input name="slug" type="text" placeholder="Slug" value="{{ old('slug') }}"><br>
        @error('slug')<p class="text-danger">{{ $message }}</p>@enderror
        <input name="text" type="text" placeholder="Text" value="{{ old('text') }}"><br>
        @error('text')<p class="text-danger">{{ $message }}</p>@enderror
        <input name="price" type="text" placeholder="Price" value="{{ old('price') }}"><br>
        @error('price')<p class="text-danger">{{ $message }}</p>@enderror
        <input name="discount" type="text" placeholder="Discount" value="{{ old('discount') }}"><br>
        @error('discount')<p class="text-danger">{{ $message }}</p>@enderror

        <label for="brands">Brand</label>
        <select id="brands" name="brand_id">
            @foreach($brand as $br)
                <option
                    {{ old('brand_id') }}
                    value="{{ $br->id }}">{{ $br->name }}</option>
            @endforeach
        </select>
        @error('brand_id')<p class="test-danger">{{ $message }}</p>@enderror

        <label for="category">Category</label>
        <select multiple id="category" name="category[]"> // []
            @foreach($category as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
        @error('$category')<p class="test-danger">{{ $message }}</p>@enderror

        <input name="is_public" type="text" placeholder="Public" value="{{ old('is_public') }}">
        @error('is_public')<p class="test-danger">{{ $message }}</p>@enderror



        <button type="submit">Send</button>
    </form>
    <a href="{{ route('admin.glasses') }}"><button>Back</button></a>
@endsection
