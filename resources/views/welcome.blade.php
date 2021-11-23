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

    <section class="py-50 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-12">
                    <h2 class="mb-10">Welcome to Tax-Hut</h2>
                    <h4 class="fw-400"></h4>
                    <p class="fs-16">
                        Management of finances is more than merely harmonizing the bank accounting.
                        The objective of any small business owner is to achieve success in both the marketplace as well at a
                        financial level. However easy it may sound, it isn’t a task each one of you may be competent to
                        accomplish. In situations, like these professional assistance is an ideal resort.
                    </p>
                    <p class="fs-16">
                        If you are caught up with the complexities of financing and are looking for some professional help,
                        then Tax Hut is here to help you out. At Tax Hut, we get the everyday book-keeping responsibilities
                        out of your hands to allocate you more time to center on building the infrastructure of your
                        business rather than being caught up with finances. Given that, we specialize in the business of
                        accounting, we could assist you in a faster and more resourceful. Amongst the numerous tasks that we
                        could help you out is to receive timely financial statements, future planning inclusive of the idea
                        of hiring additional staff, or even the purchase of a prime asset. In addition to this, we can also
                        assist in determining the income tax that you owe from your successful year.
                    </p>
                    <p class="fs-16">
                        We, at Tax Hut can offer you with a cost effective range services especially in the preliminary
                        growth phases of the business as our team of professional are well-equipped with skills as that of
                        an accounting department. To add to this, the services that are offered at Tax Hut are much less
                        than the amount you would have had to pay to a full time managerial staff.
                    </p>
                    <p class="fs-16">
                        Quick books, Simply Accounting, Business Accounting amid others package can be availed at Tax Hut
                        for your benefit. Call us today to meet up with one of our professionals in regard to a quote on our
                        varied our services. We do not charge for any initial consultation. Don’t be casual about
                        accounting. It may cost you a fortune.We offers Bookkeeping for sole proprietorships, Small
                        Business, Large Business, Retail and Part time bookkeeper in Ontario Toronto.Avail the services
                        offered Tax Hut.
                    </p>
                    <a href="{{ route('about') }}" class="btn btn-primary pull-right">More About Us</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-50 bg-white" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-12 text-center">
                    <h1 class="mb-15">Our Services.</h1>
                    <hr class="w-100 bg-yellow">
                </div>
            </div>
            <div class="row justify-content-center">

            </div>
            <div class="row mt-30 category">
                <div class="col-md-3 text-center">
                    <div class="card rounded-2">
                        <a href="{{ route('financial') }}" class="service-link">
                            <div class="card-body">
                                <h4 class="p-5 text-uppercase text-black">Financials</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card rounded-2">
                        <a href="{{ route('business-set-up') }}" class="service-link">
                            <div class="card-body">
                                <h4 class="p-5 text-uppercase">Business Set-up</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card rounded-2">
                        <a href="{{ route('payroll') }}" class="service-link">
                            <div class="card-body">
                                <h4 class="p-5 text-uppercase">Payroll </h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card rounded-2">
                        <a href="{{ route('income-tax') }}" class="service-link">
                            <div class="card-body">
                                <h4 class="p-5 text-uppercase">Income Tax</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card rounded-2">
                        <a href="{{ route('canada-income-tax') }}" class="service-link">
                            <div class="card-body">
                                <h4 class="p-5 text-uppercase">Canada Income Tax</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card rounded-2">
                        <a href="{{ route('bookkeeping') }}" class="service-link">
                            <div class="card-body">
                                <h4 class="p-5 text-uppercase">Bookkeeping</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card rounded-2">
                        <a href="{{ route('financial') }}" class="service-link">
                            <div class="card-body">
                                <h4 class="p-5 text-uppercase">Canada Income Tax</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card rounded-2">
                        <a href="{{ route('general-accounting') }}" class="service-link">
                            <div class="card-body">
                                <h4 class="p-5 text-uppercase">General Accounting</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card rounded-2">
                        <a href="{{ route('canada-business') }}" class="service-link">
                            <div class="card-body">
                                <h4 class="p-5 text-uppercase">Canada Business Set Up </h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card rounded-2">
                        <a href="{{ route('franchise-accounting') }}" class="service-link">
                            <div class="card-body">
                                <h4 class="p-5 text-uppercase">Accounting for Franchise Business</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card rounded-2">
                        <a href="{{ route('accounting-professionals') }}" class="service-link">
                            <div class="card-body">
                                <h4 class="p-5 text-uppercase">Accounting for Professionals</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card rounded-2">
                        <a href="{{ route('accounting-investment') }}" class="service-link">
                            <div class="card-body">
                                <h4 class="p-5 text-uppercase">Accounting For Investment</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('inc.quickaction')

@endsection

@section('title')

    Home |

@endsection




@section('script')


@endsection





@section('style')

    <style>
        .theme-primary .service-link:hover,
        .theme-primary .service-link:active,
        .theme-primary .service-link:focus {
            color: #141414 !important;
        }

    </style>

@endsection
