<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body data-spy="scroll" data-target="#navbar-example" class="text test">
<div>
    <ul class="nav nav-tabs" role="tablist">
        @foreach($data as $item)
            <div id="navbar-example" class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="glasses_box">
                    <figure><img src="images/glass1.png" alt="#"/></figure>
                    <h3><span class="blu">$</span>{{$item->price}}</h3>
                    <p>Model: {{$item->name}}</p>
                    {{--                            <p>Category: {{$item->brand->name}}</p>--}}
                </div>
            </div>
            <div class="col-md-12">
                <a class="read_more" href="{{ route('glasses_read', $item->id) }}">Read More</a>
            </div>
        @endforeach
    </ul>
</div>
</body>
</html>
