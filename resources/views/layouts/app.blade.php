<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        @yield('title')
    </title>

    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_TV_2015.png">
    @include('layouts.style')
    @include('layouts.style-framework')
    @yield('css')
</head>

<body class="skin-blue sidebar-mini">
    @include('layouts.header')
    @yield('content')
    @include('layouts.scripts')
    @yield('scripts')
    @include('layouts.footer')
</body>
</html>