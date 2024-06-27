
 @extends('AdminDashboard.app')
@section('content')
    @include('AdminDashboard.Sidebar')
    <div id="page-wrapper">
        <div class="vertical-center">
            <div class="container" style="margin-top: 50px">
                <div class="row justify-content-center">
    
                    <div class="col-md-10">
                        <div class="form-container">
                            <h2 class="text-center">Add Category</h2>
                            <form id="CategoryForm" action="{{ route('categories_store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="imageInput" class="form-label form-control-label">Upload Image</label>
                                    <input type="file" class="form-control" id="imageInput" name="image">
                                </div>
    
                                <div class="mb-3">
                                    <label for="titleInput" class="form-label form-control-label">Title</label>
                                    <input type="text" class="form-control" id="titleInput" name="title">
                                </div>
                                <a href="">
                                    <button type="submit" class="btn btn-primary btn-submit">Submit</button>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


