@extends('AdminDashboard.app')
@section('content')
    @include('AdminDashboard.Sidebar')
    <div id="page-wrapper">
        <div class="vertical-center">
            <div class="container" style="margin-top: 50px">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="form-container">
                            <h2 class="text-center">Edit Category</h2>
                            <form id="CategoryForm" action="{{ route('category.update', ['category' => $category->id]) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    @if ($category->image)
                                        <img src="{{ asset($category->image) }}" alt="Category Image"
                                            style="max-width: 200px; margin-bottom: 10px;">
                                    @endif
                                    <label for="imageInput" class="form-label form-control-label">Change Image</label>
                                    <input type="file" class="form-control" id="imageInput" name="image">
                                    <small class="form-text text-muted">Leave this blank if you don't want to change the
                                        image.</small>
                                </div>

                                <div class="mb-3">
                                    <label for="titleInput" class="form-label form-control-label">Title</label>
                                    <input type="text" class="form-control" id="titleInput"
                                        value ="{{ $category->title }}" name="title">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-submit">Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
