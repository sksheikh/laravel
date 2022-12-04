@extends('master')

@section('title')
    Add Category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add New Category</h4>
                        </div>
                        <div class="card-body">
                            <p class="text-success">{{Session::get('message')}}</p>
                            <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Category Description</label>
                                    <div class="col-md-8">
                                        <textarea name="description"  rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Category Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control" accept="image/*">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" value="Create New Category"  class="btn btn-outline-success">
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
