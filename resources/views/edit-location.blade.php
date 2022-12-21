<x-app-layout>

    <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->

					<div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Current Location</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" action="{{ route('update', $detail) }}"> @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" value="{{$detail->email}}" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">location</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="location" class="form-control" value="{{$detail->location}}" placeholder="">
                                            </div>
                                        </div>

                                        <div class="btn-link">
                                            <button class="btn btn-outline-primary rounded">Save
                                            </button>
                                        </div>
                                    </form>
                                </div>
							</div>
						</div>
					</div>


        </div>
        <!--**********************************
            Content body end
        ***********************************-->

</x-app-layout>
