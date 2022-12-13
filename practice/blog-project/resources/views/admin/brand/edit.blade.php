@extends('admin.master')
@section('title')
    Edit Brand
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
                        <li class="breadcrumb-item active">Edit Brand</li>
                    </ol>
                </div>
                <h4 class="page-title">Edit Brand</h4>
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

                    <form action="{{route('update-brand',['id'=>$brand->id])}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" value="{{$brand->name}}" class="form-control" placeholder="Enter project name">
                                </div>

                                <div class="mb-3">
                                    <label  class="form-label">Status</label>
                                    <div class="">
                                        <label for=""><input type="radio" name="status" value="1" {{$brand->status == 1 ? 'checked' : ''}} /> Publish </label>
                                        <label for=""><input type="radio" name="status" value="0" {{$brand->status == 0 ? 'checked' : ''}} /> Unpublish </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="submit" class="btn btn-success" value="Update Brand">
                                </div>


                            </div> <!-- end col-->

                        </div>
                        <!-- end row -->
                    </form>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- Start Content Here -->
@endsection


