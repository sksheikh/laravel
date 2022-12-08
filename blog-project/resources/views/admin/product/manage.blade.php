@extends('admin.master')

@section('title')
    Manage Products
@endsection

@section('body')
    <div class="row pt-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span class="h3 lh-base">Manage Products</span>
                    <span class="float-end"><a href="{{route('add-product')}}" class="btn btn-primary">Add new</a></span>

                </div>
                <div class="card-body">
                    <p class="text-success">{{Session::has('success') ? Session::get('success') : ''}}</p>
                    <table class="table table-striped table-responsive" id="basic-datatable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>

                                <td>{{$loop->iteration}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->brand->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{!! \Illuminate\Support\Str::words($product->description, 4, '....') !!}</td>
                                <td>
                                    <img src="{{asset($product->image)}}" alt="" height="50">
                                </td>
                                <td>{{$product->status ==1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('edit-product',['id'=>$product->id])}}" class="btn btn-primary btn-sm">edit</a>
                                    <a href="{{route('delete-product',['id'=>$product->id])}}" onclick="return confirm('Are you sure to delete this product')" class="btn btn-danger btn-sm">delete</a>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
@endsection
