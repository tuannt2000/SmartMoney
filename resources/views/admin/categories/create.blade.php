@extends('admin.layouts.app')
@section('title', 'Create a new category')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2 red-color">Create a new category</h1>
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
        @php
            $langs = config('app.locales_support')
        @endphp
        <form id="f-create" method="post" enctype="multipart/form-data" action="{{ route('admin.categories.store') }}">
            @csrf
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                @foreach($langs as $lang)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link @if (0 == $loop->index) active @endif" id="pills-{{$lang}}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{$lang}}" type="button" role="tab" aria-controls="pills-{{$lang}}" aria-selected="true">{{__($lang)}}</button>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content" id="pills-tabContent">
                @foreach($langs as $lang)
                    <div class="tab-pane fade @if (0 === $loop->index) show active @endif" id="pills-{{$lang}}" role="tabpanel" aria-labelledby="pills-{{$lang}}-tab">
                        @include('admin/categories/_form', compact('lang'))
                    </div>
                @endforeach
            </div>
            <div class="row mb-3">
                <label for="parent" class="col-sm-2 col-form-label">Parent</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('parent_id') is-invalid @enderror"
                           id="parent" name="parent_id" value="{{old('parent_id', $category->parent_id)}}">
                    @error('parent_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                <div class="col-sm-10">
                    <input class="form-control @error('photo') is-invalid @enderror" type="file" id="photo" name="photo">
                    @error('photo')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary" id="create-category">Save</button>
        </form>
    </main>
@stop
@section('css')
    <link href="/css/admin/dashboard.css" rel="stylesheet">
@stop

@section('js')
    <script type="text/javascript">
        $( document ).ready(function() {

            /*$('#create-category').click(function(){
                // Using the core $.ajax() method
                $.ajax({

                    // The URL for the request
                    url: "{{route('admin.categories.store')}}",

            // The data to send (will be converted to a query string)
            data:  $('#f-create').serialize(),

            // Whether this is a POST or GET request
            type: "POST",

            // The type of data we expect back
            dataType : "json",
        })
          // Code to run if the request succeeds (is done);
          // The response is passed to the function
          .done(function( json ) {
              console.log(json);
              $('#f-create').hide();
          })
          // Code to run if the request fails; the raw request and
          // status codes are passed to the function
          .fail(function( xhr, status, errorThrown ) {
            console.log( "Error: " + errorThrown );
            console.log( "Status: " + status );
          })
          // Code to run regardless of success or failure;
          .always(function( xhr, status ) {
              if (422 == xhr.status){
                  $.each( xhr.responseJSON.error, function( key, value )
                  {
                      var input = $("input[name=" + key + "]");
                      input.addClass('is-invalid');
                      input.parent().append('<div class="invalid-feedback">'+value+'</div>');
                  });
              }
          });
    });

    return false;*/

        });
    </script>
@stop
