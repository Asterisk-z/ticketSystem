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
                    <h2 class="mb-10">General Service</h2>
                    <h4 class="fw-400"></h4>
                    <p class="fs-16">
                        We, at Tax Hut offer a numerous accounting and payroll services for your diverse needs.
                    </p>
                    <p class="fs-16">
                        These services have been categorized under monthly services, annual services, payroll services,
                        startup services and financial statements. We offers accounting services for small business,
                        Business Accounting, Accounting and Payroll Services.
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
                            <h4 class="box-title">Monthly Services</h4>
                        </div>
                        <div class="box-body">
                            <ul class="list list-arrow">
                                <li> <a href="#">Monthly compilation of accounting data</a> </li>
                                <li> <a href="#">Monthly bank reconciliation</a> </li>
                                <li> <a href="#">On time remittance of GST, PST, WCB, Source deduction</a> </li>
                                <li> <a href="#">Monthly Financial Statements</a> </li>
                                <li> <a href="#">Payroll (weekly, bi-weekly, monthly, semi-monthly)</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <div class="box ">
                        <div class="box-header with-border bg-secondary">
                            <h4 class="box-title">Annual Service</h4>
                        </div>
                        <div class="box-body">
                            <ul class="list list-arrow">
                                <li>
                                    <a href="#">Compilation of accounting data for the fiscal Year</a>
                                </li>
                                <li>
                                    <a href="#">Calculation of all unpaid government remittances</a>
                                </li>
                                <li>
                                    <a href="#">Reconciliation of bank accounts</a>
                                </li>
                                <li>
                                    <a href="#">Full set of Financial Statement</a>
                                </li>
                                <li>
                                    <a href="#">Corporate or Business tax returns</a>
                                </li>
                                <li>
                                    <a href="#">Year-end entries</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <div class="box ">
                        <div class="box-header with-border bg-secondary">
                            <h4 class="box-title">Payroll Services</h4>
                        </div>
                        <div class="box-body">
                            <ul class="list list-arrow">
                                <li>
                                    <a href="#">Hire/Termination (ROE and all related payroll forms) </a>
                                </li>
                                <li>
                                    <a href="#">On time remittance of source of deductions</a>
                                </li>
                                <li>
                                    <a href="#">Year-end T4s and T4 summaries</a>
                                </li>
                                <li>
                                    <a href="#">Payroll (weekly, bi-weekly, monthly, semi-monthly)</a>
                                </li>
                                <li>
                                    <a href="#">Administration of employee benefits</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <div class="box ">
                        <div class="box-header with-border bg-secondary">
                            <h4 class="box-title">Startup Services</h4>
                        </div>
                        <div class="box-body">
                            <ul class="list list-arrow">
                                <li>
                                    <a href="#">Conversion from manual to computerized accounting systems</a>
                                </li>
                                <li>
                                    <a href="#">Startup and implementation of accounting systems for new business</a>
                                </li>
                                <li>
                                    <a href="#">Setup of point of Sales/Inventory systems</a>
                                </li>
                                <li>
                                    <a href="#">Setup of fraud prevention, internal control systems</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <div class="box ">
                        <div class="box-header with-border bg-secondary">
                            <h4 class="box-title">Financial Statements</h4>
                        </div>
                        <div class="box-body">
                            <ul class="list list-arrow">
                                <li>
                                    <a href="#">Comparative Statement of Profit & Loss</a>
                                </li>
                                <li>
                                    <a href="#"> Comparative Statement of Financial Position </a>
                                </li>
                                <li>
                                    <a href="#">Forecasts and Budgets </a>
                                </li>
                                <li>
                                    <a href="#"> Statement of cash flow </a>
                                </li>
                                <li>
                                    <a href="#"> Custom financial reports </a>
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
