<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Capatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Falcon E-commerce</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.css') }}">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
	@livewireStyles
</head>
<body>

	<div class="site" id="page">

		<aside class="site-off desktop-hide">
			<div class="off-canvas">
				<div class="canvas-head flexitem">
					<div class="logo"><a href=""><span class="circle"></span>.Falcon</a></div>
					<a class="t-close flexcenter"><i class="ri-close-line"></i></a>
				</div>
				<div class="departments"></div>
				<nav></nav>
				<div class="thetop-nav"></div>
			</div>
		</aside>

		<header>
			<!-- start header top -->
			<div class="header-top mobile-hide">
				<div class="container">
					<div class="wrapper flexitem">
						<div class="left">
							<ul class="flexitem main-links">
								<li><a href="#">Blog</a></li>
								<li><a href="{{ route('shop.index') }}">Shop</a></li>
								<li><a href="#">Cart</a></li>
							</ul>
						</div>
						<div class="right">
							<ul class="flexitem main-links">
								@if(Auth::user())
								<li><a href="#">{{ Auth::user()->name}}</a></li>
								<li><a href="{{ route('user.logout')}}">Sign Out</a></li>
								@else
								<li><a href="{{ route('user.login')}}">Sign In</a></li>
								<li><a href="">Order Tracking</a></li>
								@endif
								<!-- <li><a href="">English <span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
									<ul>
										<li class="current"><a href="">English</a></li>
										<li><a href="">Germany</a></li>
										<li><a href="">Spanish</a></li>
										<li><a href="">Arabic</a></li>
									</ul>
								</li> -->
							</ul>
						</div>
					</div>	
				</div>
			</div>
			<!-- end header top -->

			<!-- nav start -->
			<div class="header-nav">
				<div class="container">
					<div class="wrapper flexitem">
						<a href="" class="trigger desktop-hide"><span class="i ri-menu-2-line"></span></a>
						<div class="left flexitem">
							<div class="logo"><a href="{{ route('home') }}"><span class="circle"></span>.Falcon</a></div>
							<nav class="mobile-hide">
								<ul class="flexitem second-links">
									<li><a class="{{ Route::is('home') ? 'active' : ''}}" href="{{ route('home') }}">Home</a></li>
									<li><a class="{{ Route::is('shop.index') ? 'active' : ''}}" href="{{ route('shop.index') }}">Shop</a></li>
									<li class="has-child">
										<a>Category
											<div class="icon-small"><i class="ri-arrow-down-s-line"></i></div>
										</a>
										<div class="mega">
											<div class="container">
												<?php
												$categories = \App\Models\Category::all();
												$subCategories = \App\Models\SubCategory::all();
												?>
												<div class="wrapper">
													@foreach($categories->take(5) as $category)
													<div class="flexcol">
														<div class="row">
															<h4>{{ $category->name }}</h4>
															<ul>
																@php
																$CategoriesForCategory = $subCategories->where('category_id', $category->id);
																@endphp

																@if($CategoriesForCategory->count() > 0)
																@foreach($CategoriesForCategory->take(4) as $subCategory)
																<li><a href="{{ route('products.subcategory', ['categoryslug' => $category->slug, 'subcategoryslug' => $subCategory->slug]) }}">{{ $subCategory->name }}</a></li>
																@endforeach
																@else
																<li style="color:red">No Catory Found!</li>
																@endif
															</ul>
														</div>
													</div>
													@endforeach
												</div>
											</div>
										</div>
									</li>
									<li>
										<a class="{{ Route::is('offer.index') ? 'active' : ''}}" href="">Offers
											<div class="fly-item"><span>Hot!</span></div>
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="right">
							<ul class="flexitem second-links">
								@if(Auth::check())
								<?php
								$carts = \App\Models\Cart::where('user_id', Auth::id())->get();
								$totalPrice = 0;

								foreach ($carts as $cart) {
									$totalPrice += $cart->price;
								}
								?>
								<li class="mobile-hide"><a>
									<div class="icon-large"><i class="ri-user-line"></i></div>
								</a></li>
								<li class="iscart"><a>
									<div class="icon-large">
										<i class="ri-shopping-cart-line"></i>
										<div class="fly-item"><span class="item-number">{{ count($carts) }}</span></div>
									</div>
									@if($carts->count() > 0)
									<div class="icon-text">
										<div class="mini-text">Total</div>
										<div class="cart-total">${{ number_format($totalPrice, 2) }}</div>
									</div>
									@else
									<div></div>
									@endif
								</a>
								<div class="mini-cart">
									<div class="content">
										@if($carts->count() > 0)
										<div class="cart-head">
											{{ count($carts) }} items in cart
										</div>
										@else
										<div class="cart-head">
											No items in cart
										</div>
										@endif
										<div class="cartbody">
											<ul class="products mini">
												
												@foreach($carts as $cart)
												<li class="item">
													<div class="thumbnail object-cover">
														<a href=""><img src="{{ url('upload/images', $cart->image)}}" alt=""></a>
													</div>
													<div class="item-content">
														<p><a href="">{{ $cart->title }}</a></p>
														<span class="price">
															<span>{{ $cart->price }}</span>
															<span class="fly-item"><span>{{ $cart->quantity }}x</span></span>
														</span>
													</div>
													<a href="" class="item-remove"><i class="ri-close-line"></i></a>
												</li>
												@endforeach
											</ul>
										</div>
										@if($carts->count() > 0)
										<div class="cart-footer">
											<div class="subtotal">
												<p>Subtotal</p>
												<p><strong>${{ number_format($totalPrice, 2) }}</strong></p>
											</div>
											<div class="actions">
												<a href="{{ route('cart.index') }}" class="primary-button">Checkout</a>
												<a href="{{ route('cart.index') }}" class="primary-button">View All</a>
											</div>
										</div>
										@else
										<div></div>
										@endif
									</div>
								</div>
								@else
								<li class="mobile-hide"><a href="{{ route('user.login')}}">
									<div class="icon-large"><i class="ri-user-add-line"></i></i></div>
								</a></li>
								@endif
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="header-main mobile-hide">
				<div class="container">
					<div class="wrapper flexitem">

						<div class="left">
							<div class="dpt-cat">
								<div class="dpt-head">
									<div class="main-text">All Department</div>
									<div class="mini-text mobile-hide">Click to show all department</div>
									<a class="dpt-trigger mobile-hide">
										<i class="ri-menu-3-line ri-xl"></i>
										<i class="ri-close-line ri-xl"></i>
									</a>
								</div>
								<div class="dpt-menu">
									<?php 
									$categories = \App\Models\Category::orderBy('name', 'ASC')->get();
									$subCategory = \App\Models\SubCategory::orderBy('name', 'ASC')->get();
									?>
									<ul class="second-link">
										@foreach($categories as $category)
										<li class="has-child">
											<a>
												<div class="icon-large"><i class="{{ $category->icon }}"></i></div>
												{{ $category->name }}
												<div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
											</a>
											<ul>
												@foreach($subCategory->where('category_id', $category->id) as $sub_category)
												<li><a href="{{ route('products.subcategory', ['categoryslug' => $category->slug, 'subcategoryslug' => $sub_category->slug]) }}">
													{{ $sub_category->name }}</a>
												</li>
												@endforeach
											</ul>
										</li>
										@endforeach
									</ul>

								</div>
							</div>
						</div>

						<div class="right">
							<form action="" class="search">
								<!-- icon-large -->
								<span class="icon-large"><i class="ri-search-line"></i></span>
								<input type="search" placeholder="Search Products">
								<button type="submit">Search</button>
							</form>
						</div>
					</div>
				</div>	
			</div>
			<!-- nav end -->
		</header>


		<main>

			@yield('content')
			<!-- features start -->
			<div class="features">
				<div class="container">
					<div class="wrapper">
						<div class="column">
							<div class="sectop flexitem">
								<h2><span class="circle"></span><span>Top Category</span></h2>
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
							<!-- banners -->
							<div class="product-categories flexwrap">
								<?php
								$categories = \App\Models\Category::all();
								$subCategories = \App\Models\SubCategory::all();
								?>
								@foreach($categories->take(3) as $category)
								<div class="row">
									<div class="item">
										<div class="content mini-links">
											<h4>{{ $category->name }}</h4>
											<ul class="flexcol">
												@php
												$CategoriesForCategory = $subCategories->where('category_id', $category->id)->sortByDesc('name');
												@endphp

												@if($CategoriesForCategory->count() > 0)
												@foreach($CategoriesForCategory->take(4) as $subCategory)
												<li><a href="{{ route('products.subcategory', ['categoryslug' => $category->slug, 'subcategoryslug' => $subCategory->slug]) }}">{{ $subCategory->name }}</a></li>
												@endforeach
												@else
												<li style="color:red">No Category Found!</li>
												@endif
											</ul>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>

		</main>

		<footer>
			<!-- newsletter -->
			<div class="newsletter">
				<div class="container">
					<div class="wrapper">
						<div class="box">
							<div class="content">
								<h3>Join Our Newsletter</h3>
								<p>Get E-mail updates about our latest Collection & <strong>Special Offers!</strong></p>
							</div>
							<form action="" class="search">
								<span class="icon-large"><i class="ri-mail-line"></i></span>
								<input type="mail" name="mail" placeholder="Input Your Email" required>
								<button type="submit">Sign Up</button>
							</form>
						</div>
					</div>
				</div>
			</div>

			<!-- widgets -->
			<div class="widgets">
				<div class="container">
					<div class="wrapper">
						<div class="flexwrap">
							<div class="row">
								<div class="item mini-links">
									<h4>Quick Link</h4>
									<ul class="flexcol">
										<li><a href="">Account & Setting</a></li>
										<li><a href="">Gift & Offers</a></li>
										<li><a href="">Your Your Order</a></li>
										<li><a href="">Track Your Order</a></li>
									</ul>
								</div>
							</div>
							<div class="row">
								<div class="item mini-links">
									<h4>Payment Info</h4>
									<ul class="flexcol">
										<li><a href="">Accepting Visa/Master Card</a></li>
										<li><a href="">Accepting Prepaid Card</a></li>
										<li><a href="">Accepting Paypall</a></li>
										<li><a href="">Accepting StriPay</a></li>
									</ul>
								</div>
							</div>
							<div class="row">
								<div class="item mini-links">
									<h4>About Us</h4>
									<ul class="flexcol">
										<li><a href="">Company Info</a></li>
										<li><a href="">News About Us</a></li>
										<li><a href="">Careers & Jobs</a></li>
										<li><a href="">Privacy & Policies</a></li>
									</ul>
								</div>
							</div>
							<div class="row">
								<div class="item mini-links">
									<h4>Help and Contact</h4>
									<ul class="flexcol">
										<li><a href="">Manage Your Orders</a></li>
										<li><a href="">Shipping Policy</a></li>
										<li><a href="">Return Policy</a></li>
										<li><a href="">Assistance Support</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- info -->
			<div class="footer-info">
				<div class="container">
					<div class="wrapper">
						<div class="flexcol">
							<div class="logo">
								<a href=""><span class="circle"></span>.Falcon</a>
							</div>
							<div class="socials">
								<ul class="flexitem">
									<li><a href=""><i class="ri-facebook-line"></i></a></li>
									<li><a href=""><i class="ri-instagram-line"></i></a></li>
									<li><a href=""><i class="ri-linkedin-line"></i></a></li>
									<li><a href=""><i class="ri-twitter-line"></i></a></li>
									<li><a href=""><i class="ri-youtube-line"></i></a></li>
								</ul>
							</div>
						</div>
						<p class="mini-text">Copyright 2024 &copy; .Falcon. All rights reserved.</p>
					</div>
				</div>
			</div>
			<!-- footer end -->
		</footer>
		<div class="menu-bottom desktop-hide">
			<div class="container">
				<div class="wrapper">
					<nav>
						<ul class="flexitem">
							<li>
								<a href="#">
									<i class="ri-bar-chart-line"></i>
									<span>Trending</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="ri-user-6-line"></i>
									<span>Account</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="ri-heart-line"></i>
									<span>Wishlist</span>
								</a>
							</li>
							<li>
								<a href="#0" class="t-search">
									<i class="ri-search-line"></i>
									<span>Search</span>
								</a>
							</li>
							<li>
								<a style="cursor: pointer;" class="cart-trigger">
									<i class="ri-shopping-cart-line"></i>
									<span>Cart</span>
									<div class="fly-item">
										<span class="item-number">0</span>
									</div>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<!-- menu bottom -->

		<div class="search-bottom desktop-hide">
			<div class="container">
				<div class="wrapper">
					<form action="" class="search">
						<a class="t-close search-close flexcenter"><i class="ri-close-line"></i></a>
						<span class="icon-large"><i class="ri-search-line"></i></span>
						<input type="search" name="search" placeholder="Search Products" required>
						<button type="submit" class="">Search</button>
					</form>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div id="modal" class="modal">
			<div class="content flexcol">
				<div class="image object-cover">
					<img src="{{ url('assets/frontend/images/products/apparel4.jpg') }}" alt="">
				</div>
				<h2>Get the latets deals and coupons.</h2>
				<p class="mobile-hide">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate impedit tenetur qui error repellat consequatur.</p>
				<form action="" class="search">
					<span class="icon-large"><i class="ri-mail-line"></i></span>
					<input type="mail" placeholder="Your Mail Here">
					<button>Subscribe</button>
				</form>
				<a class="mini-text">Do not show me this again.</a>
				<a class="t-close modalclose flexcenter" style="cursor: pointer;"><i class="ri-close-line"></i></a>
			</div>
		</div>

		<!-- back to top -->
		<button class="scroll-top flexcol" onclick="scrollToTop()" title="Scroll to Top">
			<i class='ri-arrow-up-line'></i>
		</button>
	</div>

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
	<script>
		(function (window, document) {
			var loader = function () {
				var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
				script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
				tag.parentNode.insertBefore(script, tag);
			};

			window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
		})(window, document);
	</script>

	<!-- sripts section -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<script src="{{ asset('assets/frontend/js/fslightbox.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/style.js') }}"></script>
	@livewireScripts
	
</body>
</html>