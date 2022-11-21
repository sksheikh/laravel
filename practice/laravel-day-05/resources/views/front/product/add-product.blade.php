@extends('front.master')

@section('title')
    add product
@endsection


@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Add Product Page</h2>
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="card">
                                <div class="card-header">Add product form</div>
                                <div class="card-body">
                                    <p class="text-success">{{Session::get('message')}}</p>
                                    <form action="{{route('save-product')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mt-2">
                                            <label for="" class="col-md-3">Product Name</label>
                                            <div class="col-md-8">
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <label for="" class="col-md-3">Product Price</label>
                                            <div class="col-md-8">
                                                <input type="text" name="price" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <label for="" class="col-md-3">Product Description</label>
                                            <div class="col-md-8">
                                                <textarea name="description" id="" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="row mt-2 ">
                                            <label for="" class="col-md-3">Product Image</label>
                                            <div class="col-md-8">
                                                <input type="file" name="image" class="form-control" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <label for="" class="col-md-3"></label>
                                            <div class="col-md-8">
                                                <input type="submit"   class="btn btn-outline-success" value="Create New Product">
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
