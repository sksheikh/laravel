@extends('admin.master')

@section('title')
    Manage Brand
@endsection


@section('body')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ustora</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Brand</a></li>
                        <li class="breadcrumb-item active">Manage Brand</li>
                    </ol>
                </div>
                <h4 class="page-title">Manage Brand</h4>
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
                    <table id="scroll-horizontal-datatable" class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Brand Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($brands as $brand)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$brand->name}}</td>
                                <td>{{$brand->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('edit-brand',['id'=>$brand->id])}}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{route('delete-brand',['id'=>$brand->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this brand?')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- Start Content Here -->
@endsection

