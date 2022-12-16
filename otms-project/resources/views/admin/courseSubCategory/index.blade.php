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
                            <span class="h3 card-title">Course Sub Category</span>
                            <a href="{{route('course-sub-categories.create')}}" class="btn btn-info float-end">Create New</a>
                        </div>


                        <div class="card-body">
                            <table id="basic-datatable" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>slug</th>
                                    <th>action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($courseSubCategories as $courseSubCategory)
                                <tr>
                                   <td>{{$loop->iteration}}</td>
                                    <td>{{$courseSubCategory->name}}</td>
                                    <td>{{$courseSubCategory->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td>{{$courseSubCategory->slug}}</td>
                                    <td>
                                        <a href="{{route('course-sub-categories.edit',$courseSubCategory->id)}}" class="btn btn-sm btn-info">Edit</a>
                                        <form action="{{route('course-sub-categories.destroy',$courseSubCategory->id)}}" method="post" class="d-inline-block" onsubmit="return confirm('Are you to delete this')">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger ">Delete</button>
                                        </form>

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
