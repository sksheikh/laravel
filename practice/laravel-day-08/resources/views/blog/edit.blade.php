@extends('master')

@section('title')
    Edit Blog
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3>Edit Blog Info</h3>
                        </div>
                        <div class="card-body">
                            <p class="text-success">{{Session::get('message')}}</p>
                            <form action="{{route('blog.update',['id'=>$blog->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Blog Category</label>
                                    <div class="col-md-8">
                                        <select name="category_id" class="form-control">
                                                <option value="{{$category->id}}">{{$category->name}}</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Blog Title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="title" value="{{$blog->title}}" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Short Description</label>
                                    <div class="col-md-8">
                                        <textarea name="short_description" rows="5" class="form-control">{{$blog->short_description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Long Description</label>
                                    <div class="col-md-8">
                                        <textarea name="long_description" rows="5" class="form-control">{{$blog->long_description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Blog Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control" accept="image/*">
                                        <img src="{{asset($blog->image)}}" alt="" width="100" height="100" class="mt-2">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-outline-success" value="Update Blog">
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

