@extends('layouts.frontend')
@section('content')
<!-- slider starts-->
<div class="slider">
	<div class="container">
		<div class="wrapper">
			<div class="myslider swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="item">
							<div class="image object-cover">
								<img src="{{ url('assets/frontend/images/slider/slider0.jpg') }}">
							</div>
							<div class="text-content flexcol">
								<h4>Shoes Fashion</h4>
								<h2><span>Come and Get It!</span><br><span>Brand New Shoes</span></h2>
								<a href="{{ route('shop.index')}}" class="primary-button">Shop Now</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="item">
							<div class="image object-cover">
								<img src="{{ url('assets/frontend/images/slider/slider1.jpg') }}">
							</div>
							<div class="text-content flexcol">
								<h4>Shoes Fashion</h4>
								<h2><span>Come and Get It!</span><br><span>Brand New Shoes</span></h2>
								<a href="{{ route('shop.index')}}" class="primary-button">Shop Now</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="item">
							<div class="image object-cover">
								<img src="{{ url('assets/frontend/images/slider/slider2.jpg') }}">
							</div>
							<div class="text-content flexcol">
								<h4>Shoes Fashion</h4>
								<h2><span>Come and Get It!</span><br><span>Brand New Shoes</span></h2>
								<a href="{{ route('shop.index')}}" class="primary-button">Shop Now</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="item">
							<div class="image object-cover">
								<img src="{{ url('assets/frontend/images/slider/slider2.jpg') }}">
							</div>
							<div class="text-content flexcol">
								<h4>Shoes Fashion</h4>
								<h2><span>Come and Get It!</span><br><span>Brand New Shoes</span></h2>
								<a href="{{ route('shop.index')}}" class="primary-button">Shop Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</div>
</div>
<!-- slider end -->

<!-- brands start -->
<div class="brands">
	<div class="container">
		<div class="wrapper flexitem">
			<div class="item">
				<a>
					<img src="{{ url('assets/frontend/images/brands/asus.png') }}">
				</a>
			</div>
			<div class="item">
				<a>
					<img src="{{ url('assets/frontend/images/brands/dng.png') }}">
				</a>
			</div>
			<div class="item">
				<a>
					<img src="{{ url('assets/frontend/images/brands/hurley.png') }}">
				</a>
			</div>
			<div class="item">
				<a>
					<img src="{{ url('assets/frontend/images/brands/oppo.png') }}">
				</a>
			</div>
			<div class="item">
				<a>
					<img src="{{ url('assets/frontend/images/brands/samsung.png') }}">
				</a>
			</div>
			<div class="item">
				<a>
					<img src="{{ url('assets/frontend/images/brands/zara.png') }}">
				</a>
			</div>
		</div>
	</div>
</div>	
<!-- brands end  -->

<!-- trending start -->
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
<!-- trending end -->

<!-- features start -->
<div class="features">
	<div class="container">
		<div class="wrapper">
			<div class="column">
				<div class="sectop flexitem">
					<h2><span class="circle"></span><span>Latest Products</span></h2>
					<div class="second-links"><a href="{{ route('shop.index')}}" class="view-all">View All<i class="ri-arrow-right-line"></i></a></div>
				</div>
				<div class="products main flexwrap">
					@foreach($products->take(12) as $product)
					<div class="item">
						<div class="media">
							<div class="thumbnail object-cover">
								<a href="{{ route('shop.show', $product->slug) }}">
									<img src="{{ url('upload/images', $product->image1)}}" alt="{{ $product->slug }}">
								</a>
							</div>
							<div class="hoverable">
								<ul>
									<li class="active"><a href="#"><i class="ri-shopping-cart-line"></i></a></li>
								</ul>
							</div>
							@if(isset($product->off_price))
							<div class="discount circle flexcenter">
								<span>{{ $product->off_price }}%</span>
							</div>
							@else
							<div class="discount circle flexcenter">
								<span>0%</span>
							</div>
							@endif
						</div>
						<div class="content">
							<!-- <div class="rating">
								<div class="stars"></div>
								<span class="mini-text">(2,542)</span>
							</div> -->
							<h3 class="main-links"><a href="">{{ $product->title }}</a></h3>
							<div class="price">
								<span class="current">$ {{ number_format($product->current_price, 2, '.', ',') }}</span>
								<span class="normal mini-text">$ {{ number_format($product->normal_price, 2, '.', ',') }}</span>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
<!-- features end -->

@endsection