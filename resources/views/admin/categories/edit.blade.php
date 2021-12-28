@extends('admin/layouts/app')
@section('title', 'Edit category: ' . $category->title)
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2 red-color">Edit category: {{ $category->title }}</h1>
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
        <form method="post" enctype="multipart/form-data" action="{{ route('admin.categories.edit.update', $category->id) }}">
            @csrf
            @method('PUT')

            <div class="row mb-3">
                <label for="parent" class="col-sm-2 col-form-label">Icon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('icon') is-invalid @enderror"
                           id="parent" name="icon" value="{{old('icon', $category->icon)}}">
                    @error('icon')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="parent" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                           id="parent" name="title" value="{{old('title', $category->title)}}">
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="parent" class="col-sm-2 col-form-label">Type</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('type') is-invalid @enderror"
                           id="parent" name="type" value="{{old('type', $category->type)}}">
                    @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="parent" class="col-sm-2 col-form-label">Color</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('color') is-invalid @enderror"
                           id="parent" name="color" value="{{old('color', $category->color)}}">
                    @error('color')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </main>
@stop

