@extends('admin.master')

@section('title')
    Add Category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto">
                    <div class="card">

                            <div class="card-header">
                                <h4 class="card-title float-start">Create New Category</h4>
                                <a href="{{route('course-categories.index')}}" class="btn btn-info float-end">Manage</a>
                            </div>


                            <div class="card-body">
                                <form action="" method="post">
                                    @csrf

                                    <div class="row mt-3">
                                        <div class="col-md-8 mx-auto">
                                            <label for="" class="">Category Name</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-8 mx-auto">
                                            <label for="" class="">Category Slug</label>
                                            <input type="text" name="slug" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mt-3">

                                        <div class="col-md-8 mx-auto">
                                            <label for="" class="">Status</label>
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

