@extends('admin.layouts.app')
@section('title', 'Users')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Member Manage</h1>
                    </div><!-- /.col -->

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">User</a></li>
                            <li class="breadcrumb-item active">Member Manage</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->

            </div><!-- /.container-fluid -->
      <!-- /.content-header -->

      <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            List Members
                            <div class="btn-toolbar mb-2 mb-md-0 float-sm-right">
                                <div class="btn-group me-2">
                                <a class="btn btn-sm btn-outline-secondary" href="{{ route('admin.users.edit') }}">Create new a user</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Name</th>

                                        <th>Email</th>
                                        <th>Account Type</th>
                                        <th>Created At</th>
                                    </tr>


                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->firstname }} {{ $user->lastname }}</td>
                                            <td> {{$user->email}} </td>
                                            <td>{{ $user->quyen  }}</td>
                                            <td>{{ $user->created_at  }}</td>
                                        </tr>
                                    @endforeach
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
        </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('script')
    @if (session()->has('status'))
        <script>
            toastr.success('{{ session('status') }}')
        </script>
    @endif

    <script>
        function setFormDelete(id) {
            $('#textWarningDelete').text('Are you sure you want to delete this writing?');
            $('#delete_id').val(id);
        }
    </script>

@endsection
