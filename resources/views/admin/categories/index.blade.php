@extends('admin.layouts.app')
@section('title', 'Categories')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2 red-color">Categories</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar"></span>
                    This week
                </button>
            </div>
        </div>

        <h2>Section title</h2>
        @include('admin/_alert/default')
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Parent ID</th>
                    <th scope="col">Photo</th>
                    <th scope="col">-</th>
                </tr>
                </thead>
                <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->parent_id }}</td>
                        <td>
                            @if ($category->photo)
                                <img class="img-thumbnail" width="120px" src="{{ asset($category->photo) }}" alt="{{ $category->name }}" />
                            @endif
                        </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a class="btn btn-primary" href="{{ route('admin.categories.edit', $category->id) }}">Edit</a>
                                <button type="button" class="btn btn-success">Pushlish</button>
                                <button type="button" class="delete btn btn-danger" data="{{ $category->id }}">Delete</button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5"><p>No categories</p></td>
                    <tr>
                @endforelse
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
{{--                {{ $categories->links('vendor.pagination.bootstrap-4') }}--}}
            </div>
            <button class="btn btn-primary" id="create-category">Create</button>
        </div>
    </main>
@stop
@section('css')
    <link href="/css/admin/dashboard.css" rel="stylesheet">
@stop

@section('modal')
    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('admin.categories.delete')}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="category_id" id="category_id" value="0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Delete Category!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you want to delete this category?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script type="text/javascript">
        $('.delete').click(function(){
            $('#category_id').val($(this).attr('data'))
            var myModal = new bootstrap.Modal($('#deleteModal'),
                {
                    keyboard: false
                });
            myModal.show();
        });


    </script>
@stop
