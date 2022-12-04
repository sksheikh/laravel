@extends('master')

@section('title')
    Manage Blog
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>All Blogs</h3>
                        </div>
                        <div class="card-body">
                            <p class="text-success">{{Session::get('message')}}</p>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$blog->title}}</td>
                                        <td>{{$blog->category->name}}</td>
                                        <td>{{$blog->status==1 ? 'Published' : 'Unpublished'}}</td>
                                        <td>
                                            <img src="{{asset($blog->image)}}" alt="" height="50" width="50">
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-info btn-sm">Details</a>
                                            <a href="{{route('blog.edit',['id'=>$blog->id])}}" class="btn btn-success btn-sm">Edit</a>
                                            <a href="{{route('blog.delete',['id'=>$blog->id])}}" class="btn btn-danger btn-sm" onclick="alert('are you sure ? you want to delete this blog ')">Delete</a>
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
