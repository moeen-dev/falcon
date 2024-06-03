@extends('layouts.frontend')
@section('content')
<div class="single-category">
	<div class="container">
		<div class="wrapper">
			<div class="column">
				<div class="holder">
					<div class="section">
						<div class="row">
							<div class="cat-head">
								<div class="cat-navigation flexitem">
									<div class="item-filter desktop-hide">
										<a href="" class="filter-trigger label">
											<i class="ri-menu-2-line ri-2x"></i>
											<span>Filter</span>
										</a>
									</div>
									<div class="item-sortir">
										<div class="label">
											<span class="mobile-hide">
												Sort by 
												@if($sortOrder === 'ASC')
												Price: Low to High
												@elseif($sortOrder === 'DESC')
												Price: High to Low
												@else
												Default
												@endif
											</span>
											<i class="ri-arrow-down-s-line"></i>
										</div>
										<ul>
											<li class="@if($sortOrder === 'ASC') selected @endif">
												<a href="{{ route('shop.index', ['sort' => 'ASC']) }}">Price Low to High</a>
											</li>
											<li class="@if($sortOrder === 'DESC') selected @endif">
												<a href="{{ route('shop.index', ['sort' => 'DESC']) }}">Price High to Low</a>
											</li>
										</ul>
									</div>

									<div class="item-options">
										<div class="label">
											<span class="mobile-hide">Show {{ $perPage }} per page</span>
											<div class="desktop-hide">{{ $perPage }}</div>
											<i class="ri-arrow-down-s-line"></i>
										</div>
										<ul>
											<li class="@if($perPage == 30) selected @endif">
												<a href="{{ route('shop.index', ['sort' => $sortOrder, 'per_page' => 30]) }}">30</a>
											</li>
											<li class="@if($perPage == 40) selected @endif">
												<a href="{{ route('shop.index', ['sort' => $sortOrder, 'per_page' => 40]) }}">40</a>
											</li>
											<li class="@if($perPage == 50) selected @endif">
												<a href="{{ route('shop.index', ['sort' => $sortOrder, 'per_page' => 50]) }}">50</a>
											</li>
											<li class="@if($perPage == 'ALL') selected @endif">
												<a href="{{ route('shop.index', ['sort' => $sortOrder, 'per_page' => 'ALL']) }}">ALL</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="products main flexwrap">
							@foreach($products as $product)
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
									<h3 class="main-links"><a href="{{ route('shop.show', $product->slug) }}">{{ $product->title }}</a></h3>
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
	</div>
</div>

<!-- features start -->
<div class="features">
	<div class="container">
		<div class="wrapper">
			<div class="column">
				<div class="sectop flexitem">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- features end -->
<!-- banners  -->
<div class="banners">
	<div class="container">
		<div class="wrapper">
			<div class="column">
				<div class="banner flexwrap">
					<div class="row">
						<div class="item">
							<div class="image">
								<img src="asset/images/banner/banner1.jpg" alt="">
							</div>
							<div class="text-content flexcol">
								<h4>Super Sale!</h4>
								<h3><span>Get the deal in here</span><br>Living Room Chair</h3>
								<a href="" class="primary-button">Shop Now</a>
							</div>
							<a href="" class="over-link"></a>
						</div>
					</div>
					<div class="row">
						<div class="item get-gray">
							<div class="image">
								<img src="asset/images/banner/banner2.jpg" alt="">
							</div>
							<div class="text-content flexcol">
								<h4>Super Sale!</h4>
								<h3><span>Get the deal in here</span><br>Living Room Chair</h3>
								<a href="" class="primary-button">Shop Now</a>
							</div>
							<a href="" class="over-link"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection