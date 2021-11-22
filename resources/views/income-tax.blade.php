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
                    <h2 class="mb-10">Income Tax Service</h2>
                    <h4 class="fw-400"></h4>
                    <p class="fs-16">
                        Income tax is an important part of the state’s revenue. Unfortunately not everyone can deal
                        management the administration of income. Tax Hut., we offer wide variety of income tax services to
                        deal with assist in making management of income tax. The services offered at Tax Hut are categorized
                        under corporate taxes, personal taxes, and financial planning services.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 col-md-6">
                    <div class="box ">
                        <div class="box-header with-border bg-secondary">
                            <h4 class="box-title">Corporate Taxes</h4>
                        </div>
                        <div class="box-body">
                            <ul class="list list-arrow">
                                <li> <a href="#">Corporate tax returns</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <div class="box ">
                        <div class="box-header with-border bg-secondary">
                            <h4 class="box-title">Personal Taxes</h4>
                        </div>
                        <div class="box-body">
                            <ul class="list list-arrow">
                                <li>
                                    <a href="#">Proprietorships</a>
                                </li>
                                <li>
                                    <a href="#">Individual Personal Tax Returns</a>
                                </li>
                                <li>
                                    <a href="#">Home Business/Rental Income</a>
                                </li>
                                <li>
                                    <a href="#">E-File Services</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <div class="box ">
                        <div class="box-header with-border bg-secondary">
                            <h4 class="box-title">Financial Planning Services</h4>
                        </div>
                        <div class="box-body">
                            <ul class="list list-arrow">
                                <li>
                                    <a href="#">Income Tax Planning </a>
                                </li>
                                <li>
                                    <a href="#">Retirement Planning</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('inc.quickaction')

@endsection

@section('title')

    General Services |

@endsection




@section('script')


@endsection





@section('style')


@endsection
