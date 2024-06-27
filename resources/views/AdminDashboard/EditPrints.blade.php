
@extends('AdminDashboard.app')
@section('content')
    @include('AdminDashboard.Sidebar')
    <div id="page-wrapper">
        <div class="vertical-center">
            <div class="container" style="margin-top: 50px">
                <div class="row justify-content-center">
    
                    <div class="col-md-10">
                        <div class="form-container">
                            <h2 class="text-center">Edit Prints</h2>
                            <form id="CategoryForm" action="{{ route('updated', ['id' => $print->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="titleInput" class="form-label form-control-label">Title</label>
                                    <input type="text" class="form-control" id="titleInput" name="Title" value="{{$print->Title}}">
                                </div>
                                <a href="">
                                    <button type="submit" class="btn btn-primary btn-submit">Update</button>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



