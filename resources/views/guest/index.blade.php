@extends('layouts.frontapp')

@section('content')

    <!---page Title --->
    <section class="bg-img pt-150 pb-20" data-overlay="7"
        style="background-image: url({{ asset('img/background.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2 class="page-title text-white">Guest</h2>
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
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="position-sticky t-100">
                        @include('guest.side')
                    </div>
                </div>

                <div class="col-lg-9 col-md-8 col-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="tab-content" id="pills-tabContent23">
                                <div class="tab-pane fade" id="pills-edit" role="tabpanel"
                                    aria-labelledby="pills-edit-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <form class="form" method="post"
                                                action="{{ route('guest.new.request') }}">
                                                @csrf
                                                <div>
                                                    <h4 class="box-title text-primary"><i class="ti-user me-15"></i> Send
                                                        Request</h4>
                                                    <hr class="my-15">
                                                    <div class="row">
                                                        <div class="col-md-12">

                                                            <div class="form-group">
                                                                <label class="form-label">Subject</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Subject" name="subject">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Message</label>
                                                                <textarea name="message" class="form-control" id=""
                                                                    cols="30" rows="10"></textarea>
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
                                <div class="tab-pane fade  show active" id="pills-courses" role="tabpanel"
                                    aria-labelledby="pills-courses-tab">
                                    <h4 class="box-title mb-0">
                                        My Tickets
                                    </h4>
                                    <hr>
                                    @include('guest.tickets', [$tickets = $guest->tickets])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('title')

    Guest Daashboard |

@endsection




@section('script')


@endsection





@section('style')

    <style>
        .cours-search {
            width: 50%;
        }

    </style>

@endsection
