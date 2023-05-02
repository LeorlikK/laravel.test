<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="test">
    @include('menu')
    <form action="{{ route('glasses_create_post') }}" method="post">
        @csrf

        <input name="name" type="text" placeholder="Name" value="{{ old('name') }}">
        @error('name')<p>{{ $message }}</p>@enderror
        <input name="slug" type="text" placeholder="Slug" value="{{ old('slug') }}">
        @error('slug')<p>{{ $message }}</p>@enderror
        <input name="text" type="text" placeholder="Text" value="{{ old('text') }}">
        @error('text')<p>{{ $message }}</p>@enderror
        <input name="price" type="text" placeholder="Price" value="{{ old('price') }}">
        @error('price')<p>{{ $message }}</p>@enderror
        <input name="discount" type="text" placeholder="Discount" value="{{ old('discount') }}">
        @error('discount')<p>{{ $message }}</p>@enderror

        <label for="brands">Brand</label>
        <select id="brands" name="brand_id">
            @foreach($brand as $br)
                <option
                    {{ old('brand_id') }}
                    value="{{ $br->id }}">{{ $br->name }}</option>
            @endforeach
        </select>

        <label for="category">Category</label>
        <select multiple id="category" name="category[]"> // []
            @foreach($category as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
        @error('$category')<p>{{ $message }}</p>@enderror

        <input name="is_public" type="text" placeholder="Public" value="{{ old('is_public') }}">
        @error('is_public')<p>{{ $message }}</p>@enderror



        <button type="submit">Send</button>
    </form>
    <a href="{{ route('get_all') }}"><button>Back</button></a>
</body>
</html>
