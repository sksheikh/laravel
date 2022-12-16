@extends('admin.master')

@section('title')
    Edit Sub Category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="card">

                        <div class="card-header">
                            <span class="h3 card-title float-start">Edit Course Sub Category</span>
                            <a href="{{route('course-sub-categories.index')}}" class="btn btn-info float-end">Manage</a>
                        </div>

                        <div class="card-body">
                            <form action="{{route('course-sub-categories.update',$courseSubCategory->id)}}" method="post">
                                @csrf
                                @method('put')

                                <div class="row mt-3">
                                    <div class="col-md-8 mx-auto">
                                        <label for="" class="">Category</label>
                                        <select name="category_id" id="" class="form-control">
                                            <option value="" disabled >--Select Category--</option>
                                            @foreach($courseCategories as $courseCategory)
                                            <option value="{{$courseCategory->id}}" {{$courseSubCategory->Category->id == $courseCategory->id ? 'selected' : ''}}>{{$courseCategory->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-8 mx-auto">
                                        <label for="">Sub Category Name</label>
                                        <input type="text" name="name" value="{{$courseSubCategory->name}}" class="form-control">
                                    </div>
                                </div>


                                <div class="row mt-3">

                                    <div class="col-md-8 mx-auto">
                                        <label for="" class="">Status</label><br>
                                        <label><input type="radio" name="status" value="1" {{$courseSubCategory->status == 1 ? 'checked' :''}}>Published</label>
                                        <label><input type="radio" name="status" value="0" {{$courseSubCategory->status == 0 ? 'checked' :''}}>Unpublished</label>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-8 mx-auto">
                                        <input type="submit" class="btn btn-primary" value="Update Sub Category" >
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

