@extends('layouts.backapp')

@section('content')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            {{-- <div class="btn-group">
                                <a href="#" class="waves-effect waves-light btn btn-primary">Completely Registered
                                    Student</a>
                                <a href="#" class="waves-effect waves-light btn btn-success">Student Offered Admission
                                    Only</a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title"> Article List</h3>
                                <h6 class="box-subtitle"></h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example"
                                        class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($articles as $article)
                                                <tr>
                                                    <td>{{ $article->lastName }}
                                                    </td>
                                                    <td>
                                                        <a href="#" class=" btn btn-sm btn-info mb-5"><i
                                                                class="fa fa-eye"></i>
                                                            View</a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
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
@endsection

@section('script')
    <script src="{{ asset('assets/vendor_components/datatable/datatables.min.js') }}"></script>


    <script src={{ asset('js/template.js') }}"></script>

    <script src="{{ asset('js/pages/data-table.js') }}"></script>

@endsection

@section('title')
    Articles

@endsection
