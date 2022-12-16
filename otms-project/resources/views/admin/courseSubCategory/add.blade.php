@extends('admin.master')

@section('title')
    Add Category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="card">

                            <div class="card-header">
                                <span class="h3 card-title float-start">Add Course Sub Category</span>
                                <a href="{{route('course-sub-categories.index')}}" class="btn btn-info float-end">Manage</a>
                            </div>


                            <div class="card-body">
                                <form action="{{route('course-sub-categories.store')}}" method="post">
                                    @csrf

                                    <div class="row mt-3">
                                        <div class="col-md-8 mx-auto">
                                            <label for="" class="">Category Name</label>
                                            <select name="category_id" id="" class="form-control">
                                                <option value="">--Select Category--</option>
                                                @foreach($courseCategories as $courseCategory)
                                                <option value="{{$courseCategory->id}}">{{$courseCategory->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-8 mx-auto">
                                            <label for="">Sub Category Name</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mt-3">

                                        <div class="col-md-8 mx-auto">
                                            <label for="" class="">Status</label><br>
                                            <label><input type="radio" name="status" value="1" checked>Published</label>
                                            <label><input type="radio" name="status" value="0">Unpublished</label>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-8 mx-auto">
                                            <input type="submit" class="btn btn-primary" value="Add New" >
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

