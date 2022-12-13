@extends('admin.master')
@section('title')
    Add Product
@endsection

@section('body')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ustora</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Product</a></li>
                        <li class="breadcrumb-item active">Edit Product</li>
                    </ol>
                </div>
                <h4 class="page-title">Edit Product</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <!-- Start Content Here -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <span class="text-success">{{Session::has('success') ? Session::get('success') : ''}}</span>

                    <form action="{{route('update-product',['id'=>$product->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" value="{{$product->name}}" class="form-control" placeholder="Enter project name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Price</label>
                                    <input type="number" name="price" value="{{$product->price}}" class="form-control" placeholder="Enter project name">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" id="simplemde1"  cols="30" rows="10" class="form-control">{{$product->description}}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label  class="form-label">Upload your product</label>
                                    <div class="">
                                        <input type="file" name="image" class="form-control" accept="image/*">
                                        <img src="{{asset($product->image)}}" alt="" width="50">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <input type="submit" class="btn btn-success" value="Add Product">
                                </div>

                            </div>
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label  class="form-label">Category</label>
                                    <div class="">
                                        <select name="category_id" id="" class="form-control">
                                            <option value="" disabled>--Select Category--</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{$product->category->id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label  class="form-label">Brand</label>
                                    <div class="">
                                        <select name="brand_id" id="" class="form-control">
                                            <option value="" disabled>--Select Brand--</option>
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->id}}" {{$product->brand->id == $brand->id ? 'selected' : ''}}>{{$brand->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label  class="form-label">Status</label>
                                    <div class="">
                                        <label for=""><input type="radio" name="status" value="1" {{$product->status == 1 ? 'checked' : '' }}>Publish</label>
                                        <label for=""><input type="radio" name="status" value="0" {{$product->status == 0 ? 'checked' : ''}}>Unpublish</label>
                                    </div>
                                </div>

                            </div>



                        </div> <!-- end col-->


                        <!-- end row -->
                    </form>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- Start Content Here -->
@endsection


