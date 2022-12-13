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
                            <h4 class="card-title float-start">Course Category</h4>
                            <a href="{{route('course-categories.create')}}" class="btn btn-info float-end">Add New</a>
                        </div>


                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Category Slug</th>
                                    <th>Category Status</th>
                                    <th>Category Action</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
