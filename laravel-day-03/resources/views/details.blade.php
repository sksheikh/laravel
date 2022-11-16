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
            <li><a href="" class="nav-link">Home</a></li>
            <li><a href="" class="nav-link">Full Name</a></li>
        </ul>
    </div>
</nav>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Product Details</h1>
                <div class="row">
{{--                    @foreach($products as $product)--}}
                        <div class="col-md-4 mt-3">
                            <div class="card">
                                <img src="{{asset('/assets/image/'.$product['image'])}}" alt="" style="height: 250px;">
                                <div class="card-body">
                                    <h4 class="card-title">{{$product['name']}}</h4>
                                    <p>Price: {{$product['price']}}</p>
                                    <a href="{{ route('product-details',['id'=>$product['id']])}}" class="btn btn-outline-success">View</a>
                                </div>
                            </div>
                        </div>
{{--                    @endforeach--}}

                </div>
            </div>
        </div>

    </div>
</section>

<script src="{{asset('/')}}assets/js/bootstrap.bundle.js"></script>
</body>
</html>

