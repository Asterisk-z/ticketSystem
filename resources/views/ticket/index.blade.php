@extends('layouts.frontapp')

@section('content')

    <!---page Title --->
    <section class="bg-img pt-150 pb-20" data-overlay="7"
        style="background-image: url({{ asset('img/background.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2 class="page-title text-white">Send Ticket</h2>
                        <ol class="breadcrumb bg-transparent justify-content-center">
                            <li class="breadcrumb-item"><a href="#" class="text-white-50"><i
                                        class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Ticket</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Page content -->


    <section class="py-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 col-12">
                    <form class="contact-form" action="{{ route('send.guest.ticket') }}" method="post">
                        @csrf
                        <div class="text-start mb-30">
                            <h2>Are You Ready</h2>
                            <p>You are sending as a guest, Do you want to send as our user? <a
                                    href="{{ route('register') }}" target="_blank"> Click here</a></p>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Username" name="username">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" name="subject">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" rows="5" class="form-control" required=""
                                        placeholder="Write your Complaint" name="message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button name="submit" type="submit" value="Submit" class="btn btn-primary"> Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 col-12 mt-30 mt-md-0">
                    <div class="box box-body p-40 bg-dark mb-0">
                        <h2 class="box-title text-white">Important!!!</h2>
                        <p>Please provide accurate infomation about the issue</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-30" data-jarallax='{"speed": 0.4}'
        style="background-image: url(../images/front-end-img/background/bg-3.jpg);" data-overlay="5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <div class="text-center text-white">
                        <h2 class="mb-15 fw-600 fs-40">Track your Ticket</h2>
                        <h4>If you sent us a ticket as a guest, provide your email below</h4>
                        <form class="cours-search bg-black-10 mb-30" action="{{ route('track') }}" method="post">
                            @csrf
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter your Email" name="track_email">

                                <input type="text" class="form-control" placeholder="Enter Ticket ID" name="ticket_id">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Track</button>
                                </div>
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

    Ticket |

@endsection




@section('script')


@endsection





@section('style')

    <style>
        .cours-search {
            width: 75%;
        }

    </style>

@endsection
