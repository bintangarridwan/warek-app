<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    {{-- // css and javascript --}}
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/7344c1e01b.js" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>

</head>
<body>
    @include('partials.navbar')
    <div class="container-fluid">
        @yield('container')
    </div>
</body>

</html>