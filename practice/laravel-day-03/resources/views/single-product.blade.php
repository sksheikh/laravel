<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">Logo</a>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
        </ul>
    </div>
</nav>
<?php

?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Single Product Page</h2>
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card card-body">
                            <div class="row">

                                <div class="col-md-4">
                                    <img src="{{asset('/assets/image/'.$results['image'])}}" alt="" class="card-img">
                                </div>
                                <div class="col-md-8">
                                       <h3>{{$results['name']}}</h3>
                                    <p>{{$results['description']}}</p>
                                    <p>Price: {{$results['price']}}</p>
                                    <a href="" class="btn btn-outline-primary">Buy now</a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
</body>
</html>






