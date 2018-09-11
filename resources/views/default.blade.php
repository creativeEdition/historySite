<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Historia lokalna-historia globalna</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

</head>

<body class="@yield('body_class')">
<header>
    <div class="container">
        <div class="header-img">
            <img src="{{asset('images/heading-img.jpg')}}" >
        </div>
    </div>
    @menu
    @endmenu
</header>

<div class="container">
    @yield('content')
</div>


@footer
@endfooter
<script src="{{asset('js/jquery-3.3.1.js')}}"></script>
<script src="{{asset('js/popper-1.14.4.js')}}"></script>
<script src="{{asset('js/app.js') }}"></script>
<script src="{{asset('js/bootstrap-4.1.3.js')}}"></script>

</body>
</html> 