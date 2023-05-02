@extends('admin.layout')

@section('read')
    {{ $glasses }}
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
        <div class="glasses_box">
            <h3>Price: <span class="blu">$</span>{{$glasses->price}}</h3>
            <h3>Discount: <span class="blu">%</span>{{$glasses->discount ?? 0}}</h3>
            <p>Model: {{$glasses->name}}</p>
            <p>Brand: {{$glasses->brand->name}}</p>
            <p>Category:
                @foreach($glasses->category as $cat_name)
                    {{ $glasses->category->last()->name == $cat_name->name ? $cat_name->name . '' : $cat_name->name . ','}}
                @endforeach
            </p>
            <p>Slug: {{$glasses->slug}}</p>
            <p>Text: {{$glasses->text}}</p>
            <p>create_at: {{$glasses->create_at}}</p>
            <p>update_at: {{$glasses->update_at}}</p>
        </div>
    </div>

    <a href="{{ route('admin.glasses_update', [$glasses->id, $page]) }}"><button>Update</button></a>

    <form action="{{ route('admin.glasses_delete', $glasses->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Delete">
    </form>

    @php($str='page=')
    <a href="{{ route('admin.glasses', $str . $page) }}"><button>Back_TEMPLATE</button></a>
@endsection
