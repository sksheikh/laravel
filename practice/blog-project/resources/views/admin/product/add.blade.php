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
                        <li class="breadcrumb-item active">Add Product</li>
                    </ol>
                </div>
                <h4 class="page-title">Add Product</h4>
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

                    <form action="{{route('new-product')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter project name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Price</label>
                                    <input type="number" name="price" class="form-control" placeholder="Enter project name">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" id="simplemde1"  cols="30" rows="10" class="form-control"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label  class="form-label">Upload your product</label>
                                    <div class="">
                                        <input type="file" name="image" class="form-control" accept="image/*">
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
                                            <option value="">--Select Category--</option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label  class="form-label">Brand</label>
                                    <div class="">
                                        <select name="brand_id" id="" class="form-control">
                                            <option value="">--Select Brand--</option>
                                            @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label  class="form-label">Status</label>
                                    <div class="">
                                        <label for=""><input type="radio" name="status" value="1" checked>Publish</label>
                                        <label for=""><input type="radio" name="status" value="0">Unpublish</label>
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

