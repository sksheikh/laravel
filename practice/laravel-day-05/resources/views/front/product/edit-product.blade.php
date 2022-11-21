@extends('front.master')

@section('title')
add product
@endsection


@section('body')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Edit Product Page</h2>
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card">
                            <div class="card-header">Edit product form</div>
                            <div class="card-body">
                                <p class="text-success">{{Session::get('message')}}</p>
                                <form action="{{route('update-product',['id'=>$product->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mt-2">
                                        <label for="" class="col-md-3">Product Name</label>
                                        <div class="col-md-8">
                                            <input type="text" name="name" value="{{$product->name}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <label for="" class="col-md-3">Product Price</label>
                                        <div class="col-md-8">
                                            <input type="text" name="price" value="{{$product->price}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <label for="" class="col-md-3">Product Description</label>
                                        <div class="col-md-8">
                                            <textarea name="description"  id="" class="form-control">{{$product->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mt-2 ">
                                        <label for="" class="col-md-3">Product Image</label>
                                        <div class="col-md-8">
                                            <input type="file" name="image" class="form-control" accept="image/*">
                                            <img src="{{asset('/').$product->image}}" alt="" height="100" width="100" class="mt-2">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <label for="" class="col-md-3"></label>
                                        <div class="col-md-8">
                                            <input type="submit"   class="btn btn-outline-success" value="Update Product Info">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
