@extends('layouts.frontend')
@section('content')

<div class="features">
	<div class="container">
		<div class="wrapper">
			<div class="column">
				<div class="sectop flexitem">
					<h2><span class="circle"></span><span>{{ $subCategory->name }}</span></h2>
				</div>

				@if($subCategory->products->count() > 0)
				<div class="products main flexwrap">
					@foreach($subCategory->products as $product)
					<div class="item">
						<div class="media">
							<div class="thumbnail object-cover">
								<a href="{{ route('products.subcategory.show', ['categoryslug' => $category->slug, 'subcategoryslug' => $subCategory->slug, 'productslug' => $product->slug]) }}">
									<img src="{{ url('upload/images', $product->image1)}}">
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
							<h3 class="main-links"><a href="{{ route('products.subcategory.show', ['categoryslug' => $category->slug, 'subcategoryslug' => $subCategory->slug, 'productslug' => $product->slug]) }}">{{ $product->title }}</a></h3>
							<div class="price">
								<span class="current">$ {{ number_format($product->current_price, 2, '.', ',') }}</span>
								<span class="normal mini-text">$ $ {{ number_format($product->normal_price, 2, '.', ',') }}</span>
							</div>
						</div>
					</div>
					@endforeach
				</div>
				@else
				<div style="align-items: center; text-align: center; margin-bottom: 30px;">
					<p style="font-size: 50px; color: red; text-align: center;">🤔No Data Found!</p>
					<a href="{{ route('home') }}" class="primary-button">Go Home</a>
				</div>
				@endif
				@if($subCategory->products->count() > 8)
				<div class="load-more flexcenter">
					<a href="" class="primary-button">Load more</a>
				</div>
				@endif
			</div>
		</div>
	</div>
</div>

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