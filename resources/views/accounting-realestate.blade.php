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
                    <h2 class="mb-10">Real Estate Agents & Brokers Services</h2>
                    <h4 class="fw-400"></h4>
                    <p class="fs-16">
                        If you are agent or broker who hates the record keeping activity in business then contact the
                        professionals at Tax Hut. The clients who are new or have been into real estate businesses for
                        several years can avail accounting for real estate agents & brokers.
                    </p>
                    <p class="fs-16">
                        It will help the agent to manage his real estate business, home office and personal finances without
                        worrying about the accounts. The agent can avail more time to deal with buyers and sellers.
                    </p>
                    <p class="fs-16">
                        Our professionals will help the clients to reduce taxes by controlling the expenses. This will
                        improve the annual income of the agents. The accounts are prepared in a reader friendly format like
                        Excel, Quicken, or QuickBooks. After preparing, a depth instructions and tips are given to clients
                        so that they can make the best use of methods for setting up quick and easy accounting system.
                    </p>
                    <p class="fs-16">
                        A team at Tax Hut provides assistance on varied expenses which are normally incurred by real estate
                        agents. This helps to make more tax deductions and save more money.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('inc.quickaction')

@endsection

@section('title')

    Real Estate Agents & Brokers |

@endsection




@section('script')


@endsection





@section('style')


@endsection
