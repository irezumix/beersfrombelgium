<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beers</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <header class="main-header">
@include('includes.logo')
        @include('includes.main-nav')
    </header>
    <section class="main-content">
        @yield('main-content')
    </section>

<aside class="sidebar"> <section>
    @yield('sidebar')
</section>
</aside>

    <footer class="main-footer"></footer>
    <small>Copyright - CVO De Verdieping {{date('Y')}}</small>
</div>
</body>
</html>