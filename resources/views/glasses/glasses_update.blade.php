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
    @include('menu')
    <form action="{{ route('glasses_update_patch', $glasses->id) }}" method="post">
        @csrf
        <p>ID {{ $glasses->id }}</p>
        @method('patch')
        <input name="name" type="text" value="{{ $glasses->name }}">
        @error('name')<p>{{ $message }}</p>@enderror
        <input name="slug" type="text" value="{{ $glasses->slug }}">
        @error('slug')<p>{{ $message }}</p>@enderror
        <input name="text" type="text" value="{{ $glasses->text }}">
        @error('text')<p>{{ $message }}</p>@enderror
        <input name="price" type="text" value="{{ $glasses->price }}">
        @error('price')<p>{{ $message }}</p>@enderror
        <input name="discount" type="text" value="{{ $glasses->discount }}">
        @error('discount')<p>{{ $message }}</p>@enderror

        <select id="brands" name="brand_id">
            @foreach($brand as $br)
                <option {{ $br->id === $glasses->brand->id ? 'selected' : '' }}value="{{ $br->id }}">{{ $br->name }}</option>
            @endforeach

        </select>

        <select multiple id="category" name="category">
            @foreach($category as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>

        <input name="is_public" type="text" value="{{ $glasses->is_public }}">
        @error('is_public')<p>{{ $message }}</p>@enderror
        <button type="submit">Send</button>
    </form>
    <a href="{{ route('glasses_read', [$glasses->id, $page]) }}"><button>Back</button></a>
</body>
</html>
