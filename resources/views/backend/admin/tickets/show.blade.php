@extends('layouts.backapp')

@section('content')
    < <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xl-12 col-12">
                        <div class="box">
                            <div class="box-body pt-10">
                                <div class="mailbox-read-info">
                                    <a href="#" class="btn btn-success btn-sm pull-right"
                                        {{ $ticket->status == 'OPEN'
    ? 'onclick="event.preventDefault();
                                                                            document.getElementById("closed-form").submit();"'
    : '' }}>
                                        {{ $ticket->status == 'OPEN' ? 'Close Ticket' : 'Ticket Closed' }}
                                    </a>

                                    <form id="closed-form" action="{{ route('admin.ticket.close') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                        <input type="hidden" name="uuid" value="{{ $ticket->uuid }}">
                                    </form>
                                    <h4>{{ ucfirst($ticket->subject) }}</h4>
                                </div>
                                <div class="mailbox-read-info clearfix mb-20">
                                    <h5 class="no-margin"> {{ ucfirst($ticket->user->username) }}<br>
                                        <small>From: {{ $ticket->user->email }}</small>
                                        <span
                                            class="mailbox-read-time pull-right">{{ $ticket->created_at->isoFormat('MMMM Do YYYY, h:mm:ss a') }}</span>
                                    </h5>
                                </div>
                                <!-- /.mailbox-controls -->
                                <div class="mailbox-read-message read-mail-bx">
                                    <p class=" text-lowercase">{{ $ticket->message }}</p>

                                </div>
                                <!-- /.mailbox-read-message -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <h5><i class="fa fa-paperclip m-r-10 m-b-10"></i> Replies
                                    <span>({{ $ticket->replies->count() }})</span>
                                </h5>
                                @foreach ($ticket->replies as $reply)
                                    <div class="col-lg-12">
                                        <div class="box bg-light">
                                            <div class="box-body ribbon-box">
                                                <div class="ribbon ribbon-primary">{{ ucfirst($reply->user->username) }}
                                                    replied
                                                </div>
                                                <p class="mb-0 text-lowercase">{{ $reply->body }}</p>
                                                <p class="mb-0">{{ $reply->created_at->diffForHumans() }}</p>
                                            </div> <!-- end box-body-->
                                        </div>
                                    </div> <!-- end col-->
                                @endforeach


                            </div>
                            <!-- /.box-footer -->
                            <div class="box-footer">
                                <a class="pull-right btn btn-success" alt="default" data-bs-toggle="modal"
                                    data-bs-target=".bs-example-modal-lg"><i class="fa fa-reply"></i> Reply</a>
                            </div>
                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                                aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myLargeModalLabel">Reply to
                                                {{ ucfirst($ticket->user->username) }}</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('admin.reply.user') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="uuid" value="{{ $ticket->uuid }}">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <textarea id="compose-textarea" class="form-control"
                                                        placeholder="Your Message Here...." style="min-height: 150px"
                                                        name="comment"></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="float-right">
                                                    <button type="button" class="btn btn-danger text-start"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <input type="submit" class="btn btn-success text-start" value="Send">
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.box-footer -->
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

        <script src="{{ asset('assets/vendor_plugins/iCheck/icheck.js') }}"></script>

        <script src="{{ asset('assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>

        <script src="{{ asset('backend/js/pages/mailbox.js') }}"></script>

    @endsection

    @section('title')

        Tickets

    @endsection

    @section('style')


        <style>
            .slimScrollDiv {
                height: auto !important;
            }

            .mailbox-read-message {
                height: auto !important;
            }

        </style>

    @endsection
