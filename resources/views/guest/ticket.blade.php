@extends('layouts.frontapp')

@section('content')

    <!---page Title --->
    <section class="bg-img pt-150 pb-20" data-overlay="7"
        style="background-image: url({{ asset('img/background.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2 class="page-title text-white">Guest Ticket</h2>
                        <ol class="breadcrumb bg-transparent justify-content-center">
                            <li class="breadcrumb-item"><a href="#" class="text-white-50"><i
                                        class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Page content -->


    <section class="py-50">
        <div class="container">

            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info rounded">
                            <span class="icon-Search"><span class="path1"></span><span
                                    class="path2"></span></span>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-number">{{ $ticket->subject }}</span>
                            <span class="info-box-text">{{ $ticket->message }}.</span>
                        </div>

                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="info-box">
                        <h3>Replies</h3>
                        @foreach ($ticket->replies as $reply)
                            <div class="item">
                                <div class="testimonial-bx bg-info-light mb-10">

                                    <div class="testimonial-info">
                                        <h4 class="name">{{ $reply->user->username }}</h4>
                                        <p>{{ $reply->user->role }}</p>
                                    </div>
                                    <div class="testimonial-content">
                                        <p class="fs-16">{{ $reply->body }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="info-box">
                        <div class="item">
                            <form class="form" method="post" action="{{ route('guest.comment') }}">
                                @csrf
                                <div>
                                    <h4 class="box-title text-primary"><i class="ti-user me-15"></i> Send
                                        Comment</h4>
                                    <hr class="my-15">
                                    <input type="hidden" name="ticket_id" value="{{ $ticket->uuid }}">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">Comment</label>
                                                <textarea name="comment" class="form-control" id="" cols="30"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex justify-content-end gap-items-2">
                                    <button type="submit" class="btn btn-success">
                                        <i class="ti-save-alt"></i> Send
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('title')

    Guest Ticket |

@endsection




@section('script')


@endsection





@section('style')

    <style>
        .cours-search {
            width: 50%;
        }

        .testimonial-bx .testimonial-info:after {
            content: "";
            position: absolute;
            font-family: fontawesome;
            font-size: 3.571rem;
            color: #e4e6ef;
            right: 30 px;
            top: 10 px;
            z-index: 9;
        }

    </style>

@endsection
