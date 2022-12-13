@extends('admin.master')
@section('title')
    Update Category
@endsection

@section('body')
    <section>
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ustora</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Category</a></li>
                            <li class="breadcrumb-item active">Update Category</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Update Category</h4>
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

                        <form action="{{route('update-category',['id'=>$category->id])}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" value="{{$category->name}}" placeholder="Enter project name">
                                    </div>

                                    <div class="mb-3">
                                        <label  class="form-label">Status</label>
                                        <div class="">
                                            <label for=""><input type="radio" name="status" value="1" {{$category->status == 1 ? 'checked' : ''}} /> Publish </label>
                                            <label for=""><input type="radio" name="status" value="0" {{$category->status == 0 ? 'checked' : ''}} /> Unpublish </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <input type="submit" class="btn btn-success" value="Update Category">
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
    </section>
@endsection

