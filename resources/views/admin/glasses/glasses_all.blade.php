@extends('admin.layout')

@section('index')
    <h1 class="m-0">{{ $data[0] ? strtoupper($data[0]->getTable()) : 'Null' }}, Models: {{$data->total()}}</h1>
@endsection

@section('table')
    <a class="read_more" href="{{ route('admin.glasses_create') }}">Create</a>
    {{ $kirill }}
    @include('admin.admin_filter')
    @foreach($data as $item)
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
            <div class="glasses_box">
{{--                <figure><img src="images/glass1.png" alt="#"/></figure>--}}
                <h3><span class="blu">$</span>{{$item->price}}</h3>
                <p>Model: {{$item->name}}</p>
                <p>Brand: {{$item->brand->name}}</p>
{{--                {{$item->category->last()}}--}}
                <p>Category:
                    @foreach($item->category as $cat_name)
                        {{ $item->category->last()->name == $cat_name->name ? $cat_name->name . '' : $cat_name->name . ','}}
                    @endforeach
                </p>
            </div>
        </div>
        <div class="col-md-12">
            <a class="read_more" href="{{ route('admin.glasses_read', [$item->id, $data->currentPage()]) }}">Read_More</a>
            <a href="{{ route('admin.glasses_update', [$item->id, $data->currentPage()]) }}">Update</a>
            <form action="{{ route('admin.glasses_delete', $item->id) }}" method="post">
                @csrf
                @method('delete')
                <input class="btn-danger" type="submit" value="Delete">
            </form>
        </div>
    @endforeach
    {{ $data->withQueryString()->onEachSide(2)->links() }}

{{--    @if($data->hasPages())--}}
{{--        <p>All model: {{ $data->total() }}</p>--}}
{{--        <p>{{$data->onFirstPage() ? true : null}}</p>--}}
{{--        --}}{{--            {{ $data->getUrlRange($data->onFirstPage() ?? 1, $data->lastPage()) }}--}}
{{--        <nav aria-label="...">--}}
{{--            <ul class="pagination">--}}
{{--                <li class="page-item">--}}
{{--                    <a class="page-link" href="{{ $data->url(1) }}">First</a>--}}
{{--                </li>--}}
{{--                <li class="page-item">--}}
{{--                    <a class="page-link" href="{{ $data->previousPageUrl() }}" tabindex="-1">Previous</a>--}}
{{--                </li>--}}

{{--                @for($i=$data->currentPage()-3 >= 1 ? $data->currentPage()-3 : 1; $i<=$data->currentPage()-1; $i++)--}}
{{--                    <li class="page-item"><a class="page-link" href="{{ $data->url($i) }}">{{ $i }}</a></li>--}}
{{--                @endfor--}}

{{--                <li class="page-item active">--}}
{{--                    <a class="page-link" href="?page={{ $data->currentPage() }}">{{ $data->currentPage() }} <span class="sr-only">(current)</span></a>--}}
{{--                </li>--}}

{{--                @for($i=$data->currentPage()+1; $i<=$data->currentPage()+3; $i++)--}}
{{--                    @if($i > $data->lastPage())--}}
{{--                        @break--}}
{{--                    @endif--}}
{{--                    <li class="page-item"><a class="page-link" href="{{ $data->url($i) }}">{{ $i }}</a></li>--}}
{{--                @endfor--}}

{{--                <li class="page-item">--}}
{{--                    <a class="page-link" href="{{ $data->nextPageUrl() }}">Next</a>--}}
{{--                </li>--}}
{{--                <li class="page-item">--}}
{{--                    <a class="page-link" href="?page={{ $data->lastPage() }}">Last</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </nav>--}}
{{--    @endif--}}
@endsection
