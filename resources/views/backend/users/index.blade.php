@extends('layouts.backapp')

@section('content')
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">All Faculties</h4>
                                    <div class="box-controls pull-right">
                                        <div class="lookup lookup-circle lookup-right">
                                            <input type="text" name="s">
                                        </div>
                                        <button href="#" class="btn btn-success btn-sm"  data-bs-toggle="modal" data-bs-target="#modal-default">Add Faculty</button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tr>
                                                <th>S/N</th>
                                                <th>Name</th>
                                            </tr>
                                            @if (count($faculties) > 0)
                                                @foreach ($faculties as $faculty)
                                                    <tr>
                                                        <td></td>
                                                        <td>{{ $faculty->name }}</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="2">No Faculty Available</td>
                                                </tr>
                                            @endif


                                        </table>
                                            {{ $faculties->links() }}
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                        <!-- /.box -->
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
        </div>

          <!-- modal Area -->
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Faculty</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="box">
						<!-- /.box-header -->
						<form class="form" action='{{ route('addFaculty') }}' method="POST">
                            @csrf
							<div class="box-body">
								<h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Personal Info</h4>
								<hr class="my-15">
								<div class="row">
								  <div class="col-md-12">
									<div class="form-group">
									  <label class="form-label">Faculty Name</label>
									  <input type="text" class="form-control" placeholder="Name Of Faculty" name="faculty">
									</div>
								  </div>
								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								<button type="submit" class="btn btn-primary">
								  <i class="ti-save-alt"></i> Save
								</button>
							</div>
						</form>
					</div>
					  <!-- /.box -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger float-end btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    <!-- /.modal -->
@endsection
