@extends('AdminDashboard.app')
@section('content')
    {{-- -------------------------sidebarstart------------------ --}}
    @include('AdminDashboard.Sidebar')
    {{-- --------------------------sidebar ends--------- --}}
    <div id="page-wrapper">
        <div class="main-content" style="margin-top: 50px">
            <div class="row">
                <div class="col-md-10">
                    <h3 class="Paragraph-txt ">Products</h3>

                </div>
                <div class="col-md-2">
                    <a href="{{ route('productform') }}">
                        <button class="btn btn-primary " type="submit">Add New Product</button>
                    </a>
                </div>

            </div>

            <div class="mb-5">
                <div class="table-responsive">
                    <table id="example" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Actions</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/Products/' . $product->image) }}"
                                            alt="{{ $product->name }}" style="width: 100px;">
                                    </td>
                                    <td>${{ $product->price }}</td>
                                    <td>{{ $product->category->title }}</td> <!-- Use category name for better display -->
                                    <td>
                                        <a href="{{ route('products.edit', ['id' => $product->id]) }}">
                                            <button class="btn btn-primary">Edit</button>
                                        </a>


                                    </td>
                                    <td>
                                        <form action="{{ route('product.destroy', ['id' => $product->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
