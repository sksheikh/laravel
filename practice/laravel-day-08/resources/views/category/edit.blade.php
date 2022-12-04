@extends('master')

@section('title')
    Add Category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit  Category</h4>
                        </div>
                        <div class="card-body">
                            <p class="text-success">{{Session::get('message')}}</p>
                            <form action="{{route('category.update',['id'=>$category->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" value="{{$category->name}}" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Category Description</label>
                                    <div class="col-md-8">
                                        <textarea name="description"  rows="5" class="form-control">{{$category->description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Category Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control" accept="image/*">
                                        <img src="{{asset($category->image)}}" alt="" width="100" height="100" class="mt-2">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" value="Update Category"  class="btn btn-outline-success">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

