<x-guest-layout>

    <!-- Start of Coming Soon section
	============================================= -->
	<section id="coming-soon" class="coming-soon-section" data-background="/assets/img/bg/cs-bg.jpg">
		<div class="container">
			<div class="coming-soon-content headline pera-content">
				<h2>Your Tracking ID {{$tracking_id}}</h2>

				<div class="coming-soon-newslatter-form">
					<h3>TRACKING ID</h3>
					<form method="get" action="{{ route('welcome') }}">
						<input id="myInput" type="text" class="text-white pl-2" value="{{$tracking_id}}" placeholder="Type Your Email">
						<button onclick="myFunction()" >Copy</button>
					</form>
				</div>

			</div>
		</div>
	</section>
<!-- End of Coming Soon section
	============================================= -->

</x-guest-layout>
