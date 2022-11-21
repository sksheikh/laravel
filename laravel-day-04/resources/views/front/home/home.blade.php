@extends('front.master')

@section('title')
    home

@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">All Products</h2>
                    <div class="row mt-4">
                        @foreach($products as $product)
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{asset('assets/image/'.$product['image'])}}" alt="" class="card-img-top">
                                    <div class="card-body">
                                        <h6>{{$product['name']}}</h6>
                                        <p>{{$product['price']}}</p>
                                        <a href="" class="btn btn-outline-info">view</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
