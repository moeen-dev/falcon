@extends('layouts.frontend')
@section('content')
<div class="trending">
	<div class="container">
		<div class="wrapper">
			<div class="sectop flexitem">
				<h2><span class="circle"></span><span>Trending Products</span></h2>
			</div>
			<div class="column">
				<div class="flexwrap">
					<div class="row products big">
						<div class="item">
							<div class="offer">
								<p>Offer ends at</p>
								<ul class="flexcenter" id="offer-timer">
									<!-- Java Script showing this -->
								</ul>
							</div>
							<div class="media">
								<div class="image">
									<a href="">
										<img src="{{ url('assets/frontend/images/products/apparel2.jpg') }}">
									</a>
								</div>
								<div class="hoverable">
									<ul>
										<li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
										<li><a href=""><i class="ri-eye-line"></i></a></li>
										<li><a href=""><i class="ri-shuffle-line"></i></a></li>
									</ul>
								</div>
								<div class="discount circle flexcenter"><span>31%</span></div>
							</div>
							<div class="content">
								<div class="rating">
									<div class="stars"></div>
									<span class="mini-text">(2,542)</span>
								</div>
								<h3 class="main-links"><a href="">Happy Sailed Women's Summer Boho Floral</a></h3>
								<div class="price">
									<span class="current">$ 125.99</span>
									<span class="normal mini-text">$ 225.99</span>
								</div>
								<div class="stock mini-text">
									<div class="qty">
										<span>Stock: <strong class="qty-available">107</strong></span>
										<span>Sold: <strong class="qty-available">1076</strong></span>
									</div>
									<div class="bar">
										<div class="available"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row products big">
						<div class="item">
							<div class="offer">
								<p>Offer ends at</p>
								<ul class="flexcenter">
									<li>1</li>
									<li>15</li>
									<li>27</li>
									<li>60</li>
								</ul>
							</div>
							<div class="media">
								<div class="image">
									<a href="">
										<img src="{{ url('assets/frontend/images/products/apparel2.jpg') }}">
									</a>
								</div>
								<div class="hoverable">
									<ul>
										<li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
										<li><a href=""><i class="ri-eye-line"></i></a></li>
										<li><a href=""><i class="ri-shuffle-line"></i></a></li>
									</ul>
								</div>
								<div class="discount circle flexcenter"><span>31%</span></div>
							</div>
							<div class="content">
								<div class="rating">
									<div class="stars"></div>
									<span class="mini-text">(2,542)</span>
								</div>
								<h3 class="main-links"><a href="">Happy Sailed Women's Summer Boho Floral</a></h3>
								<div class="price">
									<span class="current">$ 125.99</span>
									<span class="normal mini-text">$ 225.99</span>
								</div>
								<div class="stock mini-text">
									<div class="qty">
										<span>Stock: <strong class="qty-available">107</strong></span>
										<span>Sold: <strong class="qty-available">1076</strong></span>
									</div>
									<div class="bar">
										<div class="available"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row products big">
						<div class="item">
							<div class="offer">
								<p>Offer ends at</p>
								<ul class="flexcenter">
									<li>1</li>
									<li>15</li>
									<li>27</li>
									<li>60</li>
								</ul>
							</div>
							<div class="media">
								<div class="image">
									<a href="">
										<img src="{{ url('assets/frontend/images/products/apparel2.jpg') }}">
									</a>
								</div>
								<div class="hoverable">
									<ul>
										<li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
										<li><a href=""><i class="ri-eye-line"></i></a></li>
										<li><a href=""><i class="ri-shuffle-line"></i></a></li>
									</ul>
								</div>
								<div class="discount circle flexcenter"><span>31%</span></div>
							</div>
							<div class="content">
								<div class="rating">
									<div class="stars"></div>
									<span class="mini-text">(2,542)</span>
								</div>
								<h3 class="main-links"><a href="">Happy Sailed Women's Summer Boho Floral</a></h3>
								<div class="price">
									<span class="current">$ 125.99</span>
									<span class="normal mini-text">$ 225.99</span>
								</div>
								<div class="stock mini-text">
									<div class="qty">
										<span>Stock: <strong class="qty-available">107</strong></span>
										<span>Sold: <strong class="qty-available">1076</strong></span>
									</div>
									<div class="bar">
										<div class="available"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script>
	document.addEventListener('DOMContentLoaded', function() {
		const timeRemaining = @json($timeRemaining);

		if (timeRemaining > 0) {
			const offerTimer = document.getElementById('offer-timer');
			const endTime = new Date().getTime() + (timeRemaining * 1000);

			function updateTimer() {
				const now = new Date().getTime();
				const distance = endTime - now;

				const days = Math.floor(distance / (1000 * 60 * 60 * 24));
				const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
				const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
				const seconds = Math.floor((distance % (1000 * 60)) / 1000);

				offerTimer.innerHTML = `
				<li>${days}</li>
				<li>${hours}</li>
				<li>${minutes}</li>
				<li>${seconds}</li>
				`;

				if (distance < 0) {
					clearInterval(x);
					offerTimer.innerHTML = "EXPIRED";
				}
			}

			const x = setInterval(updateTimer, 1000);
            updateTimer();  // Initial call to populate the timer immediately
        } else {
        	document.getElementById('offer-timer').innerHTML = "<li>EXPIRED</li>";
        }
    });
</script>
@endsection