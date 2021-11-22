@extends('layouts.frontapp')

@section('content')
    <!---page Title --->
    <section class="bg-img pt-150 pb-20" data-overlay="4"
        style="background-image: url({{ asset('img/background.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2 class="page-title text-white">TaxHut Services</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-50 bg-white">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-lg-12 col-12">
                    <h2 class="mb-10">Financial Service</h2>
                    <h4 class="fw-400"></h4>
                    <p class="fs-16">
                        Tax Hut, we offer a range of financial services that are categorized under business services and
                        personal services. In accordance to your specific requirements you can choose any of the financial
                        services without hassle.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('inc.quickaction')

@endsection

@section('title')

    Financial Services |

@endsection




@section('script')


@endsection





@section('style')


@endsection
