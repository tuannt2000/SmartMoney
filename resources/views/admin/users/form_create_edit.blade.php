@extends('admin.layouts.app')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ $title }}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                <a  class="btn btn-sm btn-outline-secondary" href="">Save</a>
                </div>
            </div>
        </div>

        <form method="post" action="{{ $route }}" enctype="multipart/form-data">
            {{ @csrf_field() }}
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">User Name</label>
                <div class="col-sm-10">
                    <select class="form-control" name="name">
                        @foreach($users as $user)
                            <option>
{{--                                @if(!empty($user))--}}
{{--                                    selected--}}
{{--                                @endif--}}
{{--                                {{ $user->name }}--}}
                            </option>
                        @endforeach
                    </select>
                     @if ($errors->any())
                        <p class="text-danger">{{ $errors->first('name') ?? 'none' }}</p>
                    @endif
                </div>
            </div>

            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" value="{{ $user->name ?? '' }}">
                    {{-- @if ($errors->any())
                        <p class="text-danger">{{ $errors->first('name') ?? 'none' }}</p>
                    @endif --}}
                </div>
            </div>

            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" value="{{ $user->email ?? '' }}">
                    {{-- @if ($errors->any())
                        <p class="text-danger">{{ $errors->first('name') ?? 'none' }}</p>
                    @endif --}}
                </div>
            </div>


            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Account Type</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="account_type" value="{{ $user->account_type ?? '' }}">
                    {{-- @if ($errors->any())
                        <p class="text-danger">{{ $errors->first('discount') ?? 'none' }}</p>
                    @endif --}}
                </div>
            </div>

            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="phone_number" value="{{ $user->phone_number ?? '' }}">
                    {{-- @if ($errors->any())
                        <p class="text-danger">{{ $errors->first('price') ?? 'none' }}</p>
                    @endif --}}
                </div>
            </div>

            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="address" value="{{ $user->address ?? '' }}">
                    {{-- @if ($errors->any())
                        <p class="text-danger">{{ $errors->first('barcode') ?? 'none' }}</p>
                    @endif --}}
                </div>
            </div>





            <button type="submit" class="btn btn-primary">{{ $button }}</button>
        </form>
    </main>
@endsection
