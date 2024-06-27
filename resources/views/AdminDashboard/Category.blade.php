@extends('AdminDashboard.app')
@section('content')
    {{-- -------------------------sidebarstart------------------ --}}
    @include('AdminDashboard.Sidebar')
    {{-- --------------------------sidebar ends--------- --}}
    <div id="page-wrapper">
        <div class="main-content" style="margin-top: 50px">
            <div class="row">
                <div class="col-md-10">
                    <h3 class="Paragraph-txt ">Category</h3>

                </div>
                <div class="col-md-2">
                    <a href="{{ route('formcategory') }}">
                        <button class="btn btn-primary " type="submit">Add New Category</button>
                    </a>
                </div>

            </div>

            <div class="mb-5">
                <div class="table-responsive">
                    <table id="salestable" class="table mt-sm-0 mt-3">
                        <thead class="for-bg">
                            <tr>
                                <th class="med text-left">ID</th>
                                <th class="med  text-center">Image</th>
                                <th class="med text-center">Title</th>
                                <th class="med  text-center">Status</th>
                                <th class="med  text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (App\Models\Category::all() as $category)
                                <tr class="for-bg">
                                    <td class="text-left">{{ $category->id }}</td>
                                    <td>
                                        @if ($category->image)
                                            <img src="{{ asset($category->image) }}" alt="{{ $category->title }}">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    <td>{{ $category->title }}</td>
                                    <td>
                                        <button
                                            class="toggle-btn-{{ $category->id }} btn {{ $category->status ? 'btn-success' : 'btn-danger' }}"
                                            onclick="toggleStatus({{ $category->id }}, {{ $category->status }})">
                                            {{ $category->status ? 'Enabled' : 'Disabled' }}
                                        </button>

                                    </td>
                                    <td>
                                        <a href="{{ route('category.edit', $category->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        <form action="{{ route('category.destroy', $category->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
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
