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
                    <h2 class="mb-10">Canada Business Set up</h2>
                    <h4 class="fw-400"></h4>
                    <p class="fs-16">
                        Are you planning to set up a business in Canada? Do you have an appropriate knowledge as to how to
                        go about doing so? We, at Tax Hut with our experience gained over the years give us an advantage and
                        skill to make an effort that you are presented in the most effective approach. Preparing proper
                        documentation and right team is the key mantra to our success of business set up in Canada.
                    </p>
                    <p class="fs-16">
                        Our dedicated team of counsellors can guide you at every important stage prior to you set up a
                        business in Canada. The expertise of these professionals can let you gain information pertaining to
                        taxation policies, business environment, insurance, as well as banking information. This guidance
                        can let you avoid mistakes that you would otherwise committed while setting up a business in Canada.
                    </p>
                    <p class="fs-16">
                        Business set up services in Canada can be availed at Tax Hut by means calling the numbers given on
                        our website or by sending us an e-mail about your specific query. After receiving your specific
                        query, our representative would get back to you with a suitable quote of the services for you.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('inc.quickaction')

@endsection

@section('title')

    Business Set up Canada |

@endsection




@section('script')


@endsection





@section('style')


@endsection
