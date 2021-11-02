@extends('layouts.backapp')

@section('content')
    < <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xl-12 col-12">
                        <div class="box">
                            <div class="box-body pt-10">
                                <div class="mailbox-read-info">
                                    <h4>Subject</h4>
                                </div>
                                <div class="mailbox-read-info clearfix mb-20">
                                    <h5 class="no-margin"> Pavan kumar<br>
                                        <small>From: jonathan@domain.com</small>
                                        <span class="mailbox-read-time pull-right">22 JUL. 2019 08:03 PM</span>
                                    </h5>
                                </div>
                                <!-- /.mailbox-controls -->
                                <div class="mailbox-read-message read-mail-bx">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                        nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                                        quis, sem.Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                        nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                        justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                                        Vivamus elementum semper nisi.</p>

                                </div>
                                <!-- /.mailbox-read-message -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <h5><i class="fa fa-paperclip m-r-10 m-b-10"></i> Reply <span>(3)</span></h5>

                            </div>
                            <!-- /.box-footer -->
                            <div class="box-footer">
                                <div class="pull-right">
                                    <button type="button" class="btn btn-success"><i class="fa fa-reply"></i>
                                        Reply</button>
                                </div>
                            </div>
                            <!-- /.box-footer -->
                        </div>
                        <!-- /. box -->
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        </div>
    @endsection

    @section('script')
        <script src="{{ asset('assets/vendor_components/datatable/datatables.min.js') }}"></script>

        <script src={{ asset('js/template.js') }}"></script>

        <script src="{{ asset('js/pages/data-table.js') }}"></script>

        <script src="{{ asset('js/pages/mailbox.js') }}"></script>

    @endsection

    @section('title')

        Tickets

    @endsection
