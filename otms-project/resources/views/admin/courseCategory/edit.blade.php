@extends('admin.master')

@section('title')
    Edit Category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="card">

                        <div class="card-header">
                            <span class="h3 card-title float-start">Edit Course Category</span>
                            <a href="{{route('course-categories.index')}}" class="btn btn-info float-end">Manage</a>
                        </div>


                        <div class="card-body">
                            <p class="text-success">{{Session::has('success') ? Session::get('success') : ''}}</p>
                            <form action="{{route('course-categories.update',$courseCategory->id)}}" method="post">
                                @csrf
                                @method('put')

                                <div class="row mt-3">
                                    <div class="col-md-8 mx-auto">
                                        <label for="" class="">Category Name</label>
                                        <input type="text" name="name" value="{{$courseCategory->name}}" class="form-control">
                                    </div>
                                </div>


                                <div class="row mt-3">

                                    <div class="col-md-8 mx-auto">
                                        <label for="" class="">Status</label><br>
                                        <label><input type="radio" name="status" value="1" {{$courseCategory->status == 1 ? 'checked' :''}}>Published</label>
                                        <label><input type="radio" name="status" value="0" {{$courseCategory->status == 0 ? 'checked' :''}}>Unpublished</label>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-8 mx-auto">
                                        <input type="submit" class="btn btn-primary" value="Update Category" >
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

