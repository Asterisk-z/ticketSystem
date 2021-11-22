@extends('layouts.frontapp')

@section('content')

    <!---page Title --->
    <section class="bg-img pt-150 pb-20" data-overlay="4"
        style="background-image: url({{ asset('img/background.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2 class="page-title text-white">Contact TaxHut</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="#" class="pull-up">
                        <div class="p-10">
                            <h3 class="my-15">Address</h3>
                            <div class="text-fade fs-16 mb-10">
                                7033 Telford Way
                                Unit 1
                                Mississauga, Ontario L5S 1V4
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="#" class="pull-up">
                        <div class="p-10">
                            <h3 class="my-15">Phone</h3>
                            <div class="text-fade fs-16 mb-10">416-841-5623, 416-455-6030</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="#" class="pull-up">
                        <div class="p-10">
                            <h3 class="my-15">Fax</h3>
                            <div class="text-fade fs-16 mb-10">905-671-0303</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="#" class="pull-up">
                        <div class="p-10">
                            <h3 class="my-15">Mail</h3>
                            <div class="text-fade fs-16 mb-10">ajit@taxhut.ca</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <form class="contact-form w-75 text-center" action="">
                        <div class="text-start mb-30">
                            <h2>Send Us a Message</h2>
                            <p>Contact Us for free consultation</p>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" rows="5" class="form-control" required=""
                                        placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button name="submit" type="submit" value="Submit" class="btn btn-primary"> Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('inc.quickaction')


@endsection

@section('title')

    Contact Us |

@endsection




@section('script')


@endsection





@section('style')

    <style>
        .theme-primary .form-control:focus {
            border-color: #ffc700;
        }

    </style>


@endsection
