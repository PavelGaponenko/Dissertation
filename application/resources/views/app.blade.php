<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Genetic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body style="background-color: #F5F5DC">

    @if(!request()->is('/'))
        @include('components.menu')
    @endif

    @if(request()->is('/'))
        @include('pages.auth')
    @endif

    @if(request()->is('create'))
        @include('pages.new_order')
    @endif

    @if(request()->is('orders'))
        @include('pages.orders')
    @endif

    @if(request()->is('genetic'))
        @include('pages.route_calculation')
    @endif

    @if(request()->is('types'))
        @include('pages.types_jobs')
    @endif
</body>
</html>
