<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="{{route('home')}}" class="navbar-brand">Logo</a>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('full-name')}}" class="nav-link">Full Name</a></li>
            <li><a href="{{route('home')}}" class="nav-link">Calculator</a></li>
            <li class="dropdown">
                <a href="{{route('home')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" >Category</a>
                <ul class="dropdown-menu">
{{--                    @foreach($categories as $category)--}}
                    <li><a href="" class="dropdown-item"></a></li>
{{--                    @endforeach--}}
                </ul>
            </li>
            <li class="dropdown">
                <a href="{{route('home')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Brand</a>
                <ul class="dropdown-menu">
{{--                    @foreach($brands as $brand)--}}
{{--                    <li><a href="" class="dropdown-item">{{$brand['name']}}</a></li>--}}
{{--                    @endforeach--}}
                </ul>

            </li>
            <li><a href="{{route('home')}}" class="nav-link">Product</a></li>
        </ul>
    </div>
</nav>
