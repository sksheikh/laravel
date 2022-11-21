<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-md bg-light shadow">
    <div class="container">
        <a href="{{route('home')}}" class="navbar-brand">Logo</a>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('add-product')}}" class="nav-link">add product</a></li>
            <li><a href="{{route('manage-product')}}" class="nav-link">manage product</a></li>

        </ul>
    </div>
</nav>
@yield('body')


<script src="public/assets/js/bootstrap.bundle.js"></script>
</body>
</html>
