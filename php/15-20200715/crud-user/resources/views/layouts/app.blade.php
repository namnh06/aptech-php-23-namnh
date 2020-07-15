<html>

<head>
    <title>User CRUD - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
</head>

<body>
    @include('layouts.header')
    @section('content')
    @show
    @include('layouts.footer')
    @stack('script')
</body>

</html>