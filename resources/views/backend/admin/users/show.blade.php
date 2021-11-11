@extends('layouts.backapp')

@section('content')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box box-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-img bbsr-0 bber-0"
                                style="background: url('../images/gallery/full/10.jpg') center center;" data-overlay="5">
                                <h3 class="widget-user-username text-white text-uppercase">
                                    {{ $user->username }}</h3>
                                <h6 class="widget-user-desc text-white">{{ $user->email }}</h6>
                                <h6 class="widget-user-desc text-white">Joined On :
                                    {{ $user->created_at->isoFormat('MMMM Do YYYY, h:mm:ss a') }}
                                </h6>

                            </div>
                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive-sm">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" colspan="3">#</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row"></th>
                                                        <td>Email</td>
                                                        <td>{{ $user->email }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"></th>
                                                        <td>Total Tickets</td>
                                                        <td>
                                                            {{ $user->tickets->count() }} ticket(s)
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"></th>
                                                        <td>Replies</td>
                                                        <td>{{ $user->reply->count() }} replies</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                </div>
                                <!-- /.row -->
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->

            <section class="content">
                <div class="row">
                    @if ($user->tickets->count() > 0)
                        @foreach ($user->tickets as $ticket)
                            <div class="col-lg-12">
                                <div class="box">
                                    <div class="box-body ribbon-box">
                                        <div
                                            class="ribbon-two {{ $ticket->status == 'OPEN' ? 'ribbon-two-info' : 'ribbon-two-success' }} ">
                                            <span>{{ $ticket->status }}</span>
                                        </div>
                                        <h4 class="pt-20 text-capitalize"><a
                                                href="{{ route('admin.ticket.show', $ticket->uuid) }}">{{ $ticket->subject }}</a>
                                        </h4>
                                        <p class="mb-0 pt-5">{{ ucfirst($ticket->message) }}</p>
                                        <p class="mb-0 pt-10">
                                            <span class="badge badge-info-light">{{ $ticket->replies->count() }}
                                                Replies</span>
                                        </p>
                                    </div> <!-- end box-body-->
                                </div> <!-- end box -->
                            </div> <!-- end col-->
                        @endforeach

                    @endif

                </div>
            </section>

        </div>
    </div>


@endsection

@section('script')
    <script src="{{ asset('assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js') }}">
    </script>

    <script src="{{ asset('js/template.js') }}"></script>

    <script src="{{ asset('js/pages/data-table.js') }}"></script>

@endsection

@section('title')

    {{ ucfirst($user->username) }}

@endsection

@section('style')

@endsection
