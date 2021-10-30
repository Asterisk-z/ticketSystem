@extends('layouts.frontapp')

@section('content')

    <section class="bg-img pt-130 pb-50" data-overlay-light="3"
        style="background-image: url({{ asset('img/background.png') }}); background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center mt-80">
                        <h1 class="box-title text-dark mb-30 text-capitalize">How Can we Help you?</h1>
                    </div>
                    <form class="cours-search bg-black-40 mb-30">
                        <div class="input-group">
                            <input type="text" class="form-control"
                                placeholder="Ask Questions. Browse Articles. Find Answers">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center">
                        <a href="#" class="btn btn-dark">Ask Questions</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-50 bg-white" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-12 text-center">
                    <h1 class="mb-15">Top Categories.</h1>
                    <hr class="w-100 bg-yellow">
                </div>
            </div>
            <div class="row justify-content-center">

            </div>
            <div class="row mt-30 category">
                <div class="col-md-3 text-center">
                    <div class="card rounded-2">
                        <div class="card-body">
                            <h4 class="p-5 text-uppercase">Getting Started</h4>
                            <a href="#" class="btn btn-primary btn-rounded text-uppercase">Open Articles</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card rounded-2">
                        <div class="card-body">
                            <h4 class="p-5 text-uppercase">Financials</h4>
                            <a href="#" class="btn btn-primary btn-rounded text-uppercase">Open Articles</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card rounded-2">
                        <div class="card-body">
                            <h4 class="p-5 text-uppercase">Business</h4>
                            <a href="#" class="btn btn-primary btn-rounded text-uppercase">Open Articles</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card rounded-2">
                        <div class="card-body">
                            <h4 class="p-5 text-uppercase">Accounting</h4>
                            <a href="#" class="btn btn-primary btn-rounded text-uppercase">Open Articles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('title')

    Home |

@endsection




@section('script')


@endsection





@section('style')


@endsection
