@extends('layouts.backapp')

@section('content')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="btn-group">
                                <a href="{{ route('admin.users.agent') }}"
                                    class="waves-effect waves-light btn btn-primary">Agents Only</a>
                                <a href="{{ route('admin.users.customer') }}"
                                    class="waves-effect waves-light btn btn-success">Registered User only</a>
                                <a href="{{ route('admin.users.guest') }}"
                                    class="waves-effect waves-light btn btn-info">Guest Only</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <a href="" class="btn btn-sm btn-success pull-right" data-bs-toggle="modal"
                                    data-bs-target="#modal-default">Create User</a>
                                <h3 class="box-title"> Ticket List</h3>
                                <h6 class="box-subtitle"></h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive-md">
                                    <table id="example"
                                        class="table table-responsiv table-bordered table-hover display nowrap margin-top-10 w-p100">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (count($users) > 0)
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td></td>
                                                        <td>{{ $user->username }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td><span class="badge badge-info">{{ $user->role }}</span></td>
                                                        <td>
                                                            <a href="{{ route('admin.show.user', $user->id) }}"
                                                                class=" btn btn-sm btn-info mb-5"><i
                                                                    class="fa fa-eye"></i>
                                                                View</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="5">No User Yet
                                                    </td>
                                                </tr>
                                            @endif


                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th></th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>


    <!-- modal Area -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Create User</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- <div class="box"> --}}
                    <!-- /.box-header -->
                    <form class="form" action='{{ route('admin.user.store') }}' method="POST">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control" placeholder="Username" name="username">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Role</label>

                                        <select class="form-control" name="role" id="">
                                            <option value="agent">Agent</option>
                                            <option value="customer">Customer</option>
                                            <option value="guest">Guest</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" value="Create User" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">

                        </div>
                    </form>
                    {{-- </div> --}}
                    <!-- /.box -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger float-end btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/vendor_components/datatable/datatables.min.js') }}"></script>

    <script src={{ asset('js/template.js') }}"></script>

    <script src="{{ asset('js/pages/data-table.js') }}"></script>

@endsection

@section('title')

    Users

@endsection
