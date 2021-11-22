@extends('layouts.frontapp')

@section('content')

    <!---page Title --->
    <section class="bg-img pt-150 pb-20" data-overlay="4"
        style="background-image: url({{ asset('img/background.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2 class="page-title text-white">About TaxHut</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-50 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <p class="fs-16">
                        If you have been cornered by the deadly monster of financial mismanagement,
                        then Tax Hut can be an appropriate answer to your worries. Tax Hut is a reliable independent
                        provider of services that can effectively help you to deal with financial turmoil. Some of these
                        services can be enlisted as below.
                    </p>
                    <p class="fs-16">
                        All of these services are structured in view of the diverse financial requirements that you may be
                        surrounded with. In compliance to your specific requirements, you can opt for any of the services
                        offered at Tax Hut without any hassle.
                    </p>
                    <p class="fs-16">
                        In order to avail our services, you can either call or e-mail us, the details of which have been
                        provided on our website. Soon after you contact us, our representative would offer you with quote
                        for services that is required by you, so that you can make your choice.
                    </p>
                </div>
                <div class="col-lg-6 col-12 position-relative">
                    <div class="popup-vdo mt-30 mt-md-0">
                        <img src="{{ asset('img/top.png') }}" class="img-fluid rounded" alt="">

                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('inc.quickaction')


@endsection

@section('title')

    About |

@endsection




@section('script')


@endsection





@section('style')



@endsection
