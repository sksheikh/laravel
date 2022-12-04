@extends('master')

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card card-body">
                        <img src="{{asset($blog->image)}}" alt="" class="card-img-top" height="400">
                        <h4 class="text-capitalize mt-2">{{$blog->title}}</h4>
                        <p>{{$blog->long_description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
