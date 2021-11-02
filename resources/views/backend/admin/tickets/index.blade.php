@extends('layouts.backapp')

@section('content')
    < <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-12">

                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Sections</h4>
                                <ul class="box-controls pull-right">
                                    <li><a class="box-btn-slide" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="box-body no-padding mailbox-nav">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item"><a class="nav-link active"
                                            href="{{ route('admin.tickets') }}">
                                            <i class="ion ion-ios-email-outline"></i> All Tickets
                                            <span class="label label-success pull-right">0</span></a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('admin.tickets.open') }}"><i
                                                class="ion ion-paper-airplane"></i>
                                            Open Tickets</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('admin.tickets.closed') }}"><i
                                                class="ion ion-email-unread"></i>
                                            Closed Tickets</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('admin.tickets.assigned') }}"><i class="ion ion-star"></i>
                                            Assigned
                                            Tickets
                                            <span class="label label-warning pull-right">14</span></a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('admin.tickets.mine') }}"><i class="ion ion-star"></i> My
                                            Tickets</a></li>
                                </ul>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /. box -->

                    </div>
                    <!-- /.col -->
                    <div class="col-xl-9 col-lg-8 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Tickets</h4>
                                <div class="box-controls pull-right">
                                    <div class="box-header-actions">
                                        <div class="lookup lookup-sm lookup-right d-none d-lg-block">
                                            <input type="text" name="s" placeholder="Search">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="mailbox-messages inbox-bx">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Customer</th>
                                                    <th>Subject/Messages</th>
                                                    <th>Assigned To</th>
                                                    <th>Last Updated</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tickets as $ticket)
                                                    <tr>
                                                        <td><input type="checkbox"></td>
                                                        <td class="mailbox-star">{{ $ticket->user->username }}</td>
                                                        <td>
                                                            <p class="mailbox-name mb-0 fs-16 fw-600">
                                                                {{ $ticket->subject }}
                                                            </p>
                                                            <a class="mailbox-subject"
                                                                href="{{ route('admin.ticket.show', $ticket->uuid) }}">
                                                                {{ $ticket->message }}
                                                            </a>
                                                        </td>
                                                        <td class="mailbox-date">
                                                            {{ $ticket->assigned_to }}</td>
                                                        <td class="mailbox-date">
                                                            {{ $ticket->created_at->diffForHumans() }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table -->
                                </div>
                                <!-- /.mail-box-messages -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">

                            </div>
                        </div>
                        <!-- /. box -->
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

        <script src="{{ asset('js/pages/mailbox.js') }}"></script>

    @endsection

    @section('title')

        Tickets

    @endsection
