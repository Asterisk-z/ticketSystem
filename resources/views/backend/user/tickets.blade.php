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
                                <a href="{{ route('customer.tickets.open') }}"
                                    class="waves-effect waves-light btn btn-primary">Display Only Open Tickets</a>
                                <a href="#" class="waves-effect waves-light btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#modal-default">Create A Ticket</a>
                                <a href="{{ route('customer.tickets.closed') }}"
                                    class="waves-effect waves-light btn btn-info">Display Only Closed Tickets</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title"> Ticket List</h3>
                                <h6 class="box-subtitle"></h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example"
                                        class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                        <thead>
                                            <tr>
                                                <th>Ticket Id</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (count($tickets) > 0)
                                                @foreach ($tickets as $ticket)
                                                    <tr>
                                                        <td>{{ $ticket->uuid }}
                                                        </td>
                                                        <td>{{ $ticket->subject }}</td>
                                                        <td>{{ $ticket->message }}</td>
                                                        <td><button
                                                                class="btn btn-sm {{ $ticket->status == 'OPEN' ? 'btn-success' : 'btn-default' }}">{{ $ticket->status }}</button>
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('customer.show.ticket', $ticket->uuid) }}"
                                                                class=" btn btn-sm btn-info mb-5"><i
                                                                    class="fa fa-eye"></i>
                                                                View</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="5">No Ticket Yet
                                                    </td>
                                                </tr>
                                            @endif


                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Ticket Id</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Status</th>
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
                    <h4 class="modal-title">Send Ticket</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- <div class="box"> --}}
                    <!-- /.box-header -->
                    <form class="form" action='{{ route('customer.store.ticket') }}' method="POST">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Subject</label>
                                        <input type="text" class="form-control" placeholder="Subject" name="subject">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Message</label>
                                        <textarea name="message" id="" class="form-control" cols="30"
                                            rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <input type="submit" value="Send Message" class="btn btn-primary">
                            {{-- <button type="submit">
                                    <i class="ti-save-alt"></i> Send Message
                                </button> --}}
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

    Tickets

@endsection
