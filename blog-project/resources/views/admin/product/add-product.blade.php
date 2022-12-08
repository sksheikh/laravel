@extends('admin.master')

@section('title')
Add Product
@endsection

@section('body')
<div class="row mt-5">
    <div class="col-md-10 mx-auto">
        <div class="card">
            <div class="card-header">
                <span class="h3 lh-base">Add Product</span>
                <span class="float-end"><a href="{{route('manage-product')}}" class="btn btn-primary">Manage product</a></span>

            </div>
            <div class="card-body">
                <p class="text-success">{{Session::has('success') ? Session::get('success') : ''}}</p>
                <form action="{{route('new-product')}}" method="post" enctype="multipart/form-data">

                    @csrf
                    <div class="row mt-2">
                        <label for="" class="col-md-4">Category Name</label>
                        <div class="col-md-8">
                            <select name="category_id" id="" class="form-control">
                                <option value="" selected disabled>--Select Category--</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="" class="col-md-4">Brand Name</label>
                        <div class="col-md-8">
                            <select name="brand_id" id="" class="form-control">
                                <option value="" selected disabled>--Select Brand--</option>
                                @foreach($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="" class="col-md-4">Product Name</label>
                        <div class="col-md-8">
                            <input type="text" name="name" class="form-control" />
                        </div>
                    </div>

                    <div class="row mt-2">
                        <label for="" class="col-md-4">Product Price</label>
                        <div class="col-md-8">
                            <input type="number" name="price" class="form-control" />
                        </div>
                    </div>

                    <div class="row mt-2">
                        <label for="" class="col-md-4">Product Description</label>
                        <div class="col-md-8">
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <label for="" class="col-md-4">Product Image</label>
                        <div class="col-md-8">
                            <input type="file" name="image" class="form-control" accept="image/*" />
                        </div>
                    </div>

                    <div class="row mt-2">
                        <label for="" class="col-md-4">Status</label>
                        <div class="col-md-8">
                            <label for=""><input type="radio" name="status" value="1" checked> Published</label>
                            <label for=""><input type="radio" name="status" value="0"> Unpublished</label>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <label for="" class="col-md-4"></label>
                        <div class="col-md-8">
                            <input type="submit"  class="btn btn-success" value="Add Product" />
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection

