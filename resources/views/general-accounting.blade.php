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
                    <h2 class="mb-10">General Accounting & Bookkeeping Services</h2>
                    <h4 class="fw-400"></h4>
                    <p class="fs-16">
                        Tackling with the accounts is a mundane job that requires enough time to manage bookkeeping, tax
                        processing, accounts payable and receivables on daily basis. While carrying out the accounting task,
                        if your focus is taken away from business activities then you can seek the assistance from Tax Hut.
                        We deal in various accounting services and it is carried out by trained accountants who follow
                        specialized software.
                    </p>
                    <p class="fs-16">
                        With professional accountants at Tax Hut, you need not to get worried as they will provide you
                        accurate information so that you can make important business decisions according to your accounts.
                        General accounting and bookkeeping services help to accumulate accounting data and information on a
                        everyday basis. This information is important as it is used to make several financial statements.
                    </p>
                    <p class="fs-16">
                        Presently, we are dealing with clientele from various professions like doctor, lawyer, agents,
                        brokers, operators, truck drivers and so on. From our various accounting services, you will only
                        have to pay for services that you select. Moreover, depending upon your business need, you can opt
                        for full time or part time bookkeeper.
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
