<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">Logo</a>
        <ul class="navbar-nav">
            <li><a href="/" class="nav-link">Home</a></li>
            <li><a href="{{route('full')}}" class="nav-link">Full Name</a></li>
            <li><a href="{{route('calculator')}}" class="nav-link">Calculator</a></li>
        </ul>
    </div>
</nav>

<h1 class="text-center">This is calculator page</h1>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <h3 class="text-center">Calculator</h3>
                    <div class="card-body">
                        <form action="">
                            <div class="row mt-2">
                                <label for="" class="col-md-4">First Number</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Last Name</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <label for="" class="col-md-4">Action</label>
                                <div class="col-md-8">
                                    <input type="radio" name="action" value="+">+
                                    <input type="radio" name="action" value="-">-
                                    <input type="radio" name="action" value="*">*
                                    <input type="radio" name="action" value="/">/
                                    <input type="radio" name="action" value="%">%
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Result</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-info" value="add name">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>

