@extends('admin.layout')

@section('index')
    @php($data = $brands)
    <h1 class="m-0">{{ $data[0] ? strtoupper($data[0]->getTable()) : 'Null' }}, Models: {{$data->total()}}</h1>
@endsection

@section('table')
    <a class="read_more" href="{{ route('admin.brands_create') }}">Create</a>
    {{ $kirill }}
    @foreach($brands as $brand)
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
            <div class="glasses_box">
               <p> Brand: <a href="{{ route('admin.brands_read', [$brand->id, $brands->currentPage()]) }}">{{$brand->name}}</a> count: {{ count($brand->glasses) }}</p>
                <p>Category:</p>
            </div>
        </div>
    @endforeach
    {{ $data->withQueryString()->onEachSide(2)->links() }}
@endsection
