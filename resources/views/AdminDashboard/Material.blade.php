@extends('AdminDashboard.app')

@section('content')
    {{-- -------------------------sidebar start------------------ --}}
    @include('AdminDashboard.Sidebar')
    {{-- --------------------------sidebar ends------------------ --}}
    <div id="page-wrapper">
        <div class="main-content" style="margin-top: 50px">
            <div class="row">
                <div class="col-md-10">
                    <h3 class="Paragraph-txt">Prints</h3>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('materialform') }}">
                        <button class="btn btn-primary" type="submit">Add New Material</button>
                    </a>
                </div>
            </div>
            <div class="mb-5">
                <div class="table-responsive">
                    <table id="printstable" class="table mt-sm-0 mt-3"> 
                        <thead class="for-bg">
                            <tr>
                                <th class="med text-left">ID</th>
                                <th class="med text-center">Title</th>
                                <th class="med text-center">Actions</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(App\Models\Material::all()  as $material)
                                <tr>
                                    <td>{{ $material->id }}</td>
                                    <td>{{ $material->Title }}</td>
                                    <td>
                                        <a href="{{route('editmaterialform', $material->id)}}" class="btn btn-info btn-sm">Edit</a> <!-- Edit button -->
                                        <form action="{{ route('delete', $material->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button> <!-- Delete button -->
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
@endsection
