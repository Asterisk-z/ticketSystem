@extends('layouts.backapp')

@section('content')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-body p-0">
                                <h4 class="media-heading mt-15 px-30"><a href="#">{{ $ticket->subject }}</a></h4>
                                <p class="mt-0 mb-5 px-30 py-10 bg-lightest">
                                    <i class="fa fa-calendar"></i>
                                    {{ $ticket->created_at->isoFormat('MMMM Do YYYY, h:mm:ss a') }}
                                    | <i class="fa fa-comment"></i> <a href="#">{{ count($ticket->replies) }}
                                        Comments</a>
                                    | {{ $ticket->status }}
                                </p>
                                <div class="media">

                                    <div class="media-body">
                                        <p>{{ $ticket->message }}</p>
                                        <a class="btn btn-sm btn-bold btn-primary mt-15 pull-right" href="#"
                                            data-bs-toggle="modal" data-bs-target="#modal-default">Add Comment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="box">
                            <div class="box-header no-border">
                                <h4 class="box-title">Comments</h4>
                            </div>
                        </div>
                    </div>

                    @if (count($ticket->replies) > 0)
                        @foreach ($ticket->replies as $reply)

                            <div class="col-md-12">
                                <div class="box">
                                    <div class="box-body p-0">
                                        <h5 class="media-heading mt-15 px-30"><a href="#">{{ $reply->user->username }}
                                                replied</a>
                                        </h5>
                                        <div class="media">

                                            <div class="media-body">
                                                <p class="fs-20">~{{ $reply->body }}</p>
                                            </div>
                                        </div>
                                        <p class="mt-0 mb-5 px-30 py-10 bg-lightest">
                                            <i class="fa fa-calendar"></i>
                                            {{ $reply->created_at->isoFormat('MMMM Do YYYY, h:mm:ss a') }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    @endif

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
                    <h4 class="modal-title">Send Comment</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- <div class="box"> --}}
                    <!-- /.box-header -->
                    <form class="form" action='{{ route('customer.store.comment') }}' method="POST">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{ $ticket->id }}">
                                        <label class="form-label">Comment</label>
                                        <textarea name="comment" id="" class="form-control" cols="30"
                                            rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Send Comment">

                        </div>
                    </form>

                    <!-- /.box -->
                    {{-- </div> --}}

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
