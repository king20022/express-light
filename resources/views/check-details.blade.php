<x-guest-layout>

    <!-- Start of Coming Soon section
	============================================= -->
	<section id="coming-soon" class="coming-soon-section" data-background="/assets/img/bg/cs-bg.jpg">
		<div class="container">
			<div class="coming-soon-content headline pera-content">
@foreach ($details as $detail)


                <h2>Your Tracking ID {{$detail->tracking_id}}</h2>
                @endforeach
				<div class="coming-soon-newslatter-form">
					<h3>NEWSLETTER</h3>
                    <form action="{{ route('welcome') }}" method="get">
                    <div>
						<input type="text" class="text-white pl-2" value="{{$detail->tracking_id}}" id="myInput" >
						<button onclick="myFunction()">Copy</button>
                    </div>
                </form>
				</div>

			</div>
		</div>
	</section>
<!-- End of Coming Soon section
	============================================= -->

</x-guest-layout>
