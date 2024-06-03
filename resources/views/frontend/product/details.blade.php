@extends('layouts.frontend')
@section('content')
<div class="single-product">
	<div class="container">
		<div class="wrapper">
			<div class="breadcrumb">
				<ul class="flexitem">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li><a href="{{ route('products.subcategory', ['categoryslug' => $category->slug, 'subcategoryslug' => $subCategory->slug])}}">{{ $subCategory->name}}</a></li>
					<li>{{ $product->title }}</li>
				</ul>
			</div>
			<!-- end breadcrumb -->
			<div class="column">
				<div class="products one">
					<div class="flexwrap">
						<div class="row">
							<div class="item is_sticky">
								<div class="price">
									@if($product->off_price !== null)
									<span class="discount">{{ $product->off_price }}%<br>OFF</span>
									@else
									<span></span>
									@endif
								</div>
								<div class="big-image">
									<div class="big-image-wrapper swiper-wrapper">
										@if($product->image1)
										<div class="image-show swiper-slide">
											<a data-fslightbox href="{{ url('upload/images', $product->image1)}}"><img src="{{ url('upload/images', $product->image1)}}" alt=""></a>
										</div>
										@endif
										@if($product->image2)
										<div class="image-show swiper-slide">
											<a data-fslightbox href="{{ url('upload/images', $product->image2)}}"><img src="{{ url('upload/images', $product->image2)}}" alt=""></a>
										</div>
										@endif
										@if($product->image3)
										<div class="image-show swiper-slide">
											<a data-fslightbox href="{{ url('upload/images', $product->image3)}}"><img src="{{ url('upload/images', $product->image3)}}" alt=""></a>
										</div>
										@endif
										@if($product->image4)
										<div class="image-show swiper-slide">
											<a data-fslightbox href="{{ url('upload/images', $product->image4)}}"><img src="{{ url('upload/images', $product->image4)}}" alt=""></a>
										</div>
										@endif
									</div>
									<div class="swiper-button-next"></div>
									<div class="swiper-button-prev"></div>
								</div>

								<div thumbSlider="" class="small-image">
									<ul class="small-image-wrapper flexitem swiper-wrapper">
										@if($product->image1)
										<li class="thumbnail-show swiper-slide">
											<img src="{{ url('upload/images', $product->image1)}}" alt="">
										</li>
										@endif
										@if($product->image2)
										<li class="thumbnail-show swiper-slide">
											<img src="{{ url('upload/images', $product->image2)}}" alt="">
										</li>
										@endif
										@if($product->image3)
										<li class="thumbnail-show swiper-slide">
											<img src="{{ url('upload/images', $product->image3)}}" alt="">
										</li>
										@endif
										@if($product->image4)
										<li class="thumbnail-show swiper-slide">
											<img src="{{ url('upload/images', $product->image4)}}" alt="">
										</li>
										@endif
									</ul>
								</div>
							</div>
						</div>
						<div class="row">
							
							<div class="item">

								<h1>{{ $product->title }}</h1>
								<div class="content">
									<div class="rating">
										<div class="stars"></div>
										<a href="#" class="mini-text">2,251 reviews</a>
										<a href="#" class="add-review mini-text">Add Your Review</a>
									</div>
									<div class="stock-sku">
										@if($product->is_stock > 0)
										<span class="available">In Stock</span>
										@else
										<span class="available">Out of Stock</span>
										@endif
									</div>
									<div class="price">
										<span class="current">$ {{ number_format($product->current_price, 2, '.', ',') }}</span>
										<span class="normal">$ {{ number_format($product->normal_price, 2, '.', ',') }}</span>
									</div>

									<form action="{{ route('add.cart', $product->id)}}" method="POST">
										@csrf
										<div class="actions">
											<div class="qty-control flexitem">
												<button class="minus circle" onclick="decrementQuantity(event)">-</button>
												<input type="text" value="1" min="1" id="quantity" name="quantity">
												<button class="plus circle" onclick="incrementQuantity(event)">+</button>
											</div>
											<div class="button-cart"><button class="primary-button">Add Cart</button></div>
										</div>
									</form>
									<div>
										@if(Session::has('success'))
										<p style="color: red" class="text-center">{{ Session::get('success')}}</p>
										@endif
										@if(Session::has('error'))
										<p style="color: red" class="text-center">{{ Session::get('error')}}</p>
										@endif
									</div>
									<div class="description collapse">
										<ul>
											<li class="has-child expand">
												<a href="#" class="icon-small">About</a>
												<ul class="content">
													<!-- <li><span>Brands</span> <span>Nike</span></li>
													<li><span>Activity</span> <span>Running</span></li>
													<li><span>Material</span> <span>Fleece</span></li>
													<li><span>Gender</span> <span>Men</span></li> -->
													{!! $product->information !!}
												</ul>
											</li>
											<li class="has-child">
												<a href="#0" class="icon-small">Details</a>
												<div class="content">
													{!! $product->details !!}
												</div>
											</li>
											<li class="has-child">
												<a href="" class="icon-small">Reviews<span class="mini-text">2.2k</span></a>
												<div class="content">
													<div class="reviews">
														<h4>Customers Reviews</h4>
														<div class="review-block">
															<div class="review-block-head">
																<div class="felxitem">
																	<span class="rate-sum">4.9</span>
																	<span>5,251 Reviews</span>
																</div>
																<a href="#review-form" class="primary-button">Write a review</a>
															</div>
															<div class="review-block-body">
																<ul>
																	<li class="item">
																		<div class="review-form">
																			<p class="person">Review By Mariam</p>
																			<p class="mini-text">On 5/5/24</p>
																		</div>
																		<div class="review-rating rating">
																			<div class="stars"></div>
																		</div>
																		<div class="review-title">
																			<p>Awesome Product!</p>
																		</div>
																		<div class="review-text">
																			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores sequi soluta molestiae eius enim, corrupti?</p>
																		</div>
																	</li>
																	<li class="item">
																		<div class="review-form">
																			<p class="person">Review By Mariam</p>
																			<p class="mini-text">On 5/5/24</p>
																		</div>
																		<div class="review-rating rating">
																			<div class="stars"></div>
																		</div>
																		<div class="review-title">
																			<p>Awesome Product!</p>
																		</div>
																		<div class="review-text">
																			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores sequi soluta molestiae eius enim, corrupti?</p>
																		</div>
																	</li>
																</ul>
																<div class="second">
																	<a href="#" class="view-all">View all reviews <i class="ri-arrow-right-line"></i></a>
																</div>
															</div>
															<div id="review-form" class="review-form">
																<h4>Write a review</h4>
																<div class="rating">
																	<p>Are you satisfied enough?</p>
																	<div class="rate-this">
																		<input type="radio" name="reting" id="star5">
																		<label for="star5"><i class="ri-star-fill"></i></label>
																		<!-- single -->
																		<input type="radio" name="reting" id="star4">
																		<label for="star4"><i class="ri-star-fill"></i></label>
																		<!-- single -->
																		<input type="radio" name="reting" id="star3">
																		<label for="star3"><i class="ri-star-fill"></i></label>
																		<!-- single -->
																		<input type="radio" name="reting" id="star2">
																		<label for="star2"><i class="ri-star-fill"></i></label>
																		<!-- single -->
																		<input type="radio" name="reting" id="star1">
																		<label for="star1"><i class="ri-star-fill"></i></label>
																		<!-- single -->
																	</div>
																</div>
																<form action="">
																	<p>
																		<label>Name</label>
																		<input type="text">
																	</p>
																	<p>
																		<label>Summary</label>
																		<input type="text">
																	</p>
																	<p>
																		<label>Review</label>
																		<textarea cols="30" rows="10"></textarea>
																	</p>
																	<p><a href="" class="primary-button">Submit Review</a></p>
																</form>
															</div>
														</div>
													</div>
												</div>
											</li>
										</ul>
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
	function incrementQuantity(event) {
		event.preventDefault();
		var quantityInput = document.getElementById('quantity');
		var currentValue = parseInt(quantityInput.value);
		if (!isNaN(currentValue)) {
			quantityInput.value = currentValue + 1;
		}
		validateQuantity();
	}

	function decrementQuantity(event) {
		event.preventDefault();
		var quantityInput = document.getElementById('quantity');
		var currentValue = parseInt(quantityInput.value);
		if (!isNaN(currentValue) && currentValue > 1) {
			quantityInput.value = currentValue - 1;
		}
		validateQuantity();
	}

	function validateQuantity() {
		var quantityInput = document.getElementById('quantity');
		var currentValue = parseInt(quantityInput.value);
		if (isNaN(currentValue) || currentValue < 1) {
			quantityInput.value = 1;
		}
	}
</script>
@endsection