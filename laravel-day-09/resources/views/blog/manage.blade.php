@extends('master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">All Blogs</div>
                        <div class="card-body">
                            <p class="text-success">{{Session::get('message')}}</p>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$blog->title}}</td>
                                        <td>{{$blog->category->name}}</td>
                                        <td><img src="{{asset($blog->image)}}" alt="" height="50" width="70" /></td>
                                        <td>{{$blog->status}}</td>
                                        <td>
                                            <a href="{{route('blog.detail',['id'=>$blog->id])}}" class="btn btn-outline-success btn-sm">Details</a>
                                            <a href="{{route('blog.edit',['id'=>$blog->id])}}" class="btn btn-outline-success btn-sm">Edit</a>
                                            <a href="" class="btn btn-outline-danger btn-sm">Delete</a>
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


