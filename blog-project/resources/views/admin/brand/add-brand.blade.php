@extends('admin.master')

@section('title')
    Add Brand
@endsection

@section('body')
    <div class="row mt-5">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span class="h3 lh-base">Add Brand</span>
                    <span class="float-end"><a href="{{route('manage-brand')}}" class="btn btn-primary">Manage brand</a></span>

                </div>
                <div class="card-body">
                    <p class="text-success">{{Session::has('success') ? Session::get('success') : ''}}</p>
                    <form action="{{route('new-brand')}}" method="post">

                        @csrf
                        <div class="row mt-2">
                            <label for="" class="col-md-4">Brand Name</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control" />
                            </div>
                        </div>

                        <div class="row mt-2">
                            <label for="" class="col-md-4">Status</label>
                            <div class="col-md-8">
                                <label for=""><input type="radio" name="status" value="1" checked> Published</label>
                                <label for=""><input type="radio" name="status" value="0"> Unpublished</label>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit"  class="btn btn-success" value="Add Brand" />
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

