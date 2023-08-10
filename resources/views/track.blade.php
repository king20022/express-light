<x-guest-layout>

    <!-- Start of Breadcrumb section
	============================================= -->
	<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="/assets/img/bg/bread-bg.jpg">
		<span class="background_overlay"></span>
		<span class="design-shape position-absolute"><img src="/assets/img/shape/tmd-sh.png" alt=""></span>
		<div class="container">
			<div class="ft-breadcrumb-content headline text-center position-relative">
				<h2>Ocean Freight</h2>
				<div class="ft-breadcrumb-list ul-li">
					<ul>
						<li><a href="{{ route('welcome') }}">Home</a></li>
						<li>Project  Details </li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!-- End of Breadcrumb section
	============================================= -->

<!-- Start of Project details  section
	============================================= -->
	<section id="ft-project-details" class="ft-project-details-section page-padding">
		<div class="container">
			<div class="ft-project-overview">
				<div class="row">
					<div class="col-lg-8">
						<div class="ft-project-details-img">
							<img src="/assets/img/project/prd.jpg" alt="">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="ft-portfolio-overview-text headline">
							<div class="project-title-overview text-center">
								<h3>Product details</h3>
							</div>
							<div class="ft-portfolio-overview-list-value">
								<div class="ft-portfolio-overview-list  ul-li-block">
									<ul>
                                        @foreach ($details as $detail)

										<li>Name: <span>{{$detail->name}}</span></li>
										<li>Email: <span>{{$detail->email}}</span></li>
										<li>Phone: <span>{{$detail->phone}}</span></li>
										<li>Departure City: <span>{{$detail->departure_city}}</span></li>
										<li>Delivery City: <span>{{$detail->delivery_city}}</span></li>
										<li>Packages: <span>{{$detail->boxes}}</span></li>


                                        @endforeach
									</ul>
								</div>
								<div class="ft-project-value ul-li">
									<span style="text-transform: capitalize">Current Location: {{$detail->location}}</span>
									<ul>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of Project details section
	============================================= -->

<!-- Start of Similar work  section
	============================================= -->
	<section id="ft-similar-work" class="ft-similar-work-section">
		<div class="container">
			<div class="ft-similar-work-content headline">
				<h2>Means Of Delivery</h2>
				<div class="ft-similar-work-items">
					<div class="row">
						<div class="col-lg-4 col-sm-6">
							<div class="ft-portfolio-slider-innerbox position-relative">
								<div class="ft-portfolio-img">
									<img src="/assets/img/project/port1.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="ft-portfolio-slider-innerbox position-relative">
								<div class="ft-portfolio-img">
									<img src="/assets/img/project/port2.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="ft-portfolio-slider-innerbox position-relative">
								<div class="ft-portfolio-img">
									<img src="/assets/img/project/port3.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of Similar work  section
	============================================= -->

</x-guest-layout>
