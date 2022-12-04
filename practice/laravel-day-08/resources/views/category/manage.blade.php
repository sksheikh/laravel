@extends('master')

@section('title')
    Manage Category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>All Categories</h3>
                        </div>
                        <div class="card-body">
                            <p class="text-success">{{Session::get('message')}}</p>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Category Description</th>
                                    <th>Category image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->description}}</td>
                                    <td>
                                        <img src="{{asset($category->image)}}" alt="" height="50" width="50">
                                    </td>
                                    <td>
                                        <a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-success btn-sm">Edit</a>
                                        <a href="{{route('category.delete',['id'=>$category->id])}}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
