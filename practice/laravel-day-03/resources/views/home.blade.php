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

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">All Products</h2>
                <div class="row mt-4">
                    @foreach($products as $product)
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{asset('/assets/image/'.$product['image'])}}" alt="" class="card-img-top" style="height: 200px;">
                            <div class="card-body">
                                <h6>{{$product['name']}}</h6>
                                <p>{{$product['price']}}</p>
                                <a href="{{route('product-details',['id'=>$product['id']])}}" class="btn btn-outline-info">View</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>

