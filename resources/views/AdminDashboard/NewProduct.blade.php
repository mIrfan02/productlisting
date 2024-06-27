@extends('AdminDashboard.app')

@section('content')
    @include('AdminDashboard.Sidebar')

    <div id="page-wrapper">
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <!-- Heading -->
                    <h2 class="text-center mb-4 " style="font-family: ui-monospace; font-weight: bold;margin-top:5rem;">
                        Add New Product
                    </h2>

                    <!-- Form card -->
                    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.product') }}" enctype="multipart/form-data">
                                @csrf

                                <!-- Product Name -->
                                <div class="mb-3">
                                    <label for="productName" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="productName" name="name"
                                        placeholder="Enter product name" required>
                                </div>

                                <!-- Product Category -->
                                <div class="mb-3">
                                    <label for="productCategory" class="form-label">Product Category</label>
                                    <select class="form-control" id="productCategory" name="category_id" required>
                                        <option value="">Select a category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Product Description -->
                                <div class="mb-3">
                                    <label for="productDescription" class="form-label">Product Description</label>
                                    <textarea class="form-control" id="productDescription" name="description" placeholder="Enter product description"
                                        rows="3" required></textarea>
                                </div>

                                <!-- Image Upload -->
                                <div class="mb-3">
                                    <label for="customImage" class="form-label">Image Upload</label>
                                    <div class="input-group">

                                        <input type="file" class="form-control" id="inputGroupFile" name="image"
                                            accept="image/*"style="     width: 75rem;
                                                                                                                                        height: auto;
                                                                                                                                        border-radius: 7px;
                                                                                                                                        border: 1px solid #ccc;
                                                                                                                                        padding: 6px; ">

                                    </div>
                                </div>

                                <!-- Product Price -->
                                <div class="mb-5">
                                    <label for="productPrice" class="form-label "style="margin-top:20px;">Product
                                        Price</label>
                                    <input type="number" class="form-control" id="productPrice" name="price"
                                        placeholder="Enter product price" required>
                                </div>

                                {{-- <div class="mb-5 form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                        name="checkbox">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        PrintBy
                                    </label>
                                </div> --}}
                                <div class="mb-5 form-group">
                                    <label for="printByDropdown">PrintBy</label>
                                    <select class="form-control" id="printByDropdown" name="printByDropdown">
                                        <option value="">Select an option</option>
                                        <option value="Boxes By  industry">Normal Product</option>
                                        <option value="Boxes By Style">Recent Product</option>
                                    </select>
                                </div>



                                <!-- Submit Button -->
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary d-block mx-auto"
                                        style="font-weight: bold;">Submit Product</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
