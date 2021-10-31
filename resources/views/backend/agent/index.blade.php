@extends('layouts.backapp')

@section('content')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box bg-gradient-primary overflow-hidden pull-up">
                            <div class="box-body pe-0 ps-lg-50 ps-15 py-0">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-8">
                                        <h1 class="fs-20 text-white">Welcome Agent!</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <a href="#" class="box pull-up">
                            <div class="box-body">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="icon  bg-default b-1 border-white rounded-circle w-60 h-60 text-center l-h-80">
                                        <span class="fs-30 icon-Bulb1"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span></span>
                                    </div>
                                    <div class="ms-15">
                                        <h5 class="mb-0">Total Tickets</h5>
                                        <p class="text-fade fs-12 mb-0">{{ count($tickets) }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-12">
                        <a href="#" class="box pull-up">
                            <div class="box-body">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="icon  bg-default b-1 border-white rounded-circle w-60 h-60 text-center l-h-80">
                                        <span class="fs-30 icon-Chat-check"><span class="path1"></span><span
                                                class="path2"></span></span>
                                    </div>
                                    <div class="ms-15">
                                        <h5 class="mb-0">Total Open Tickets</h5>
                                        <p class="text-fade fs-12 mb-0">{{ $open }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-12">
                        <a href="#" class="box pull-up">
                            <div class="box-body">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="icon  bg-default b-1 border-white rounded-circle w-60 h-60 text-center l-h-80">
                                        <span class="fs-30 icon-Pen-tool-vector"><span class="path1"></span><span
                                                class="path2"></span></span>
                                    </div>
                                    <div class="ms-15">
                                        <h5 class="mb-0">Total Closed Tickets</h5>
                                        <p class="text-fade fs-12 mb-0">{{ $closed }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
