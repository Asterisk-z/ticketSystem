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
                    <h2 class="mb-10">Investment, Commercial & Rental Properties Services</h2>
                    <h4 class="fw-400"></h4>
                    <p class="fs-16">
                        One aspect of owning a rental property is keeping track of the expenses and income associated with
                        the business. Proper accounting and organization makes it easier to keep track of the financial
                        performance of each property.
                    </p>
                    <p class="fs-16">
                        Accounting will reveal if you are making or losing money on your properties. Thorough records also
                        help an investor maximize his tax deductions, said Robert D. Lattas, a Chicago-based real estate and
                        tax attorney.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('inc.quickaction')

@endsection

@section('title')

    Investment, Commercial & Rental Properties |

@endsection




@section('script')


@endsection





@section('style')


@endsection
