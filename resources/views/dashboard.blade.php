<x-app-layout>


         <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
                        <!-- row -->
			<div class="container-fluid">
                <div class="form-head page-titles d-flex  align-items-center">
					<div class="mr-auto  d-lg-block">
						<ol class="breadcrumb">
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Customer</a></li>
							<li class="breadcrumb-item"><a href="javascript:void(0)">Customer List</a></li>
						</ol>
					</div>
					</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body p-0">
                                @foreach ($details as $detail)


								<div class="row border-bottom mx-0 pt-4 px-2 align-items-center ">
									<div class="col-xl-3 col-xxl-4 col-lg-6 col-sm-12 mb-sm-4 mb-3 align-items-center  media">
										<div class="media-body">
											<h3 class="fs-20 text-black font-w600 mb-1">{{ $detail->name }}</h3>
										</div>
									</div>
									<div class="col-xl-2 col-xxl-2 col-lg-3 col-sm-4 mb-sm-4 col-6 mb-3">
										<small class="mb-2 d-block">Current Location</small>
										<span class="text-black font-w600">{{ $detail->location }}</span>
									</div>
									<div class="col-xl-2 col-xxl-3 col-lg-3 col-sm-4 mb-sm-4 col-6 mb-3 text-lg-center">
										<small class="mb-2 d-block">Delivery City</small>
										<span class="text-black font-w600">{{ $detail->delivery_city }}</span>
									</div>
									<div class="col-xl-2 col-xxl-3 col-lg-6 col-sm-4 mb-sm-4 mb-3">
										<small class="mb-2 d-block">Email Address</small>
										<span class="text-black font-w600">{{ $detail->email }}</span>
									</div>
									<div class="col-xl-3 col-xxl-4 col-lg-6 col-sm-6 mb-sm-4 mb-4 d-flex ">
										<div class="dropdown media-dropdown mt-auto mb-auto mr-auto">
											<div class="btn-link">
												<a href="{{ route('edit', $detail) }}" class="btn btn-outline-primary rounded">Edit Details
												</a>
											</div>
										</div>
									</div>
								</div>

                                @endforeach
							</div>
						</div>
					</div>
				</div>
            </div>

        </div>
        <!--**********************************
            Content body end
        ***********************************-->

</x-app-layout>
