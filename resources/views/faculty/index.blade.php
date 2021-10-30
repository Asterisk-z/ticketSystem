@extends('layouts.frontapp')

@section('content')

	<!---page Title --->
	<section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url({{ asset('img/bgg.jpg') }});">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">
						<h2 class="page-title text-white">Faculty Due</h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page">Faculty</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Page content -->

    <section class="py-50 bg-white" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">

            </div>
            <div class="row mt-30">
                <div class="col-md-6 col-md-offset-3  text-center">
                    <div class="card rounded-2">
                        <div class="card-header card-title">
                            <h4 class="p-5 text-uppercase">Faculty Dues</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <select class="form-control  bg-transparent border-5" name="" id="">
                                        <option>Select Your Faculty</option>
                                        <option>Engineering</option>
                                        <option>Medicine</option>
                                    </select>
                                </div>
								<div class="form-group">
									<div class="input-group mb-15">
										<input type="regNumber" class="form-control  bg-transparent  border-5" placeholder="Your Registeration Number">
									</div>
								</div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-info w-p100 mt-15">Payment</button>
                                    </div>
                                </div>
							</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('title')

Faculty |

@endsection




@section('script')


@endsection





@section('style')


@endsection
