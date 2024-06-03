@extends('layouts.frontend')
@section('content')
<div class="single-product">
	<div class="container">
		<div class="wrapper">
			<div class="breadcrumb">
				<ul class="flexitem">
					<li><a href="">Home</a></li>
					<li><a href="">Shoes</a></li>
					<li>Men Slip on shoes casual with arch support Insoles</li>
				</ul>
			</div>
			<!-- end breadcrumb -->
			<div class="column">
				<div class="products one">
					<div class="flexwrap">
						<div class="row">
							<div class="item is_sticky">
								<div class="price">
									<span class="discount">30%<br>OFF</span>
								</div>
								<div class="big-image">
									<div class="big-image-wrapper swiper-wrapper">
										<div class="image-show swiper-slide">
											<a data-fslightbox href="asset/images/products/apparel4.jpg"><img src="asset/images/products/apparel4.jpg" alt=""></a>
										</div>
										<div class="image-show swiper-slide">
											<a data-fslightbox href="asset/images/products/apparel5.jpg"><img src="asset/images/products/apparel5.jpg" alt=""></a>
										</div>
										<div class="image-show swiper-slide">
											<a data-fslightbox href="asset/images/products/apparel6.jpg"><img src="asset/images/products/apparel6.jpg" alt=""></a>
										</div>
									</div>
									<div class="swiper-button-next"></div>
									<div class="swiper-button-prev"></div>
								</div>

								<div thumbSlider="" class="small-image">
									<ul class="small-image-wrapper flexitem swiper-wrapper">
										<li class="thumbnail-show swiper-slide">
											<img src="asset/images/products/apparel4.jpg" alt="">
										</li>
										<li class="thumbnail-show swiper-slide">
											<img src="asset/images/products/apparel5.jpg" alt="">
										</li>
										<li class="thumbnail-show swiper-slide">
											<img src="asset/images/products/apparel6.jpg" alt="">
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="item">
								<h1>Happy Sailed Womens Summer Boho Floral</h1>
								<div class="content">
									<div class="rating">
										<div class="stars"></div>
										<a href="#" class="mini-text">2,251 reviews</a>
										<a href="#" class="add-review mini-text">Add Your Review</a>
									</div>
									<div class="stock-sku">
										<span class="available">In Stock</span>
										<span class="sku mini-text">SKU-881</span>
									</div>
									<div class="price">
										<span class="current">$70.90</span>
										<span class="normal">$90.90</span>
									</div>
												<!-- <div class="colors">
													<p>Color</p>
													<div class="variant">
														<form>
															<p>
																<input type="radio" name="color" id="cogrey">
																<label for="cogrey" class="circle"></label>
															</p>
															<p>
																<input type="radio" name="color" id="coblue">
																<label for="coblue" class="circle"></label>
															</p>
															<p>
																<input type="radio" name="color" id="cogreen">
																<label for="cogreen" class="circle"></label>
															</p>
														</form>
													</div>
												</div> -->
												<div class="stock mini-text" data-stock="4000">
													<div class="qty">
														<span>Sold: <strong class="qty-sold">3596</strong></span>
														<span>Stock: <strong class="qty-available">157</strong></span>
													</div>
													<div class="bar">
														<div class="available"></div>
													</div>
												</div>
												<div class="offer">
													<p>Offer ends at</p>
													<ul class="flexcenter">
														<li>1</li>
														<li>15</li>
														<li>27</li>
														<li>60</li>
													</ul>
												</div>
												<div class="sizes">
													<p>Size</p>
													<div class="variant">
														<form>
															<p>
																<input type="radio" name="size" id="size-40">
																<label for="size-40" class="circle"><span>40</span></label>
															</p>
															<p>
																<input type="radio" name="size" id="size-41">
																<label for="size-41" class="circle"><span>41</span></label>
															</p>
															<p>
																<input type="radio" name="size" id="size-42">
																<label for="size-42" class="circle"><span>42</span></label>
															</p>
															<p>
																<input type="radio" name="size" id="size-43">
																<label for="size-43" class="circle"><span>43</span></label>
															</p>
														</form>
													</div>
												</div>
												<div class="actions">
													<div class="qty-control flexitem">
														<button class="minus circle">-</button>
														<input type="text" name="" value="1">
														<button class="plus circle">+</button>
													</div>
													<div class="button-cart"><button class="primary-button">Add to Cart</button></div>
													<div class="wish-share">
														<ul class="flexitem second-links">
															<li><a href="#">
																<span class="icon-large"><i class="ri-heart-line"></i></span>
																<span>Wishlist</span>
															</a></li>
															<li><a href="#">
																<span class="icon-large"><i class="ri-share-line"></i></span>
																<span>Share</span>
															</a></li>
														</ul>
													</div>
												</div>
												<div class="description collapse">
													<ul>
														<li class="has-child expand">
															<a href="#" class="icon-small">Information</a>
															<ul class="content">
																<li><span>Brands</span> <span>Nike</span></li>
																<li><span>Activity</span> <span>Running</span></li>
																<li><span>Material</span> <span>Fleece</span></li>
																<li><span>Gender</span> <span>Men</span></li>
															</ul>
														</li>
														<li class="has-child">
															<a href="#0" class="icon-small">Details</a>
															<div class="content">
																<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam, a.</p>
																<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor magni delectus quam dolorem ea, accusantium neque voluptates animi distinctio aliquam id libero fugit quia vitae.</p>
															</div>
														</li>
														<li class="has-child">
															<a href="#0" class="icon-small">Custom</a>
															<div class="content">
																<table>
																	<thead>
																		<tr>
																			<th>Size</th>
																			<th>Bust<span class="mini-text">(cm)</span></th>
																			<th>Waist<span class="mini-text">(cm)</span></th>
																			<th>Hip<span class="mini-text">(cm)</span></th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td>XS</td>
																			<td>15</td>
																			<td>15</td>
																			<td>15</td>
																		</tr>
																		<tr>
																			<td>XS</td>
																			<td>15</td>
																			<td>15</td>
																			<td>15</td>
																		</tr>
																		<tr>
																			<td>XS</td>
																			<td>15</td>
																			<td>15</td>
																			<td>15</td>
																		</tr>
																		<tr>
																			<td>XS</td>
																			<td>15</td>
																			<td>15</td>
																			<td>15</td>
																		</tr>
																		<tr>
																			<td>XS</td>
																			<td>15</td>
																			<td>15</td>
																			<td>15</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</li>
														<li class="has-child ">
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
			<!-- related start -->
			<div class="related-products">
				<div class="container">
					<div class="wrapper">
						<div class="column">
							<div class="sectop flexitem">
								<h2><span class="circle"></span><span>Related Products</span></h2>
								<div class="second-links"><a href="" class="view-all">View All<i class="ri-arrow-right-line"></i></a></div>
							</div>
							<div class="products main flexwrap">
								<div class="item">
									<div class="media">
										<div class="thumbnail object-cover">
											<a href="">
												<img src="asset/images/products/apparel1.jpg">
											</a>
										</div>
										<div class="hoverable">
											<ul>
												<li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
												<li><a href=""><i class="ri-eye-line"></i></a></li>
												<li><a href=""><i class="ri-shuffle-line"></i></a></li>
											</ul>
										</div>
										<div class="discount circle flexcenter"><span>25%</span></div>
									</div>
									<div class="content">
										<div class="offer flexitem">
											<p class="mini-text">Offer ends at</p>
											<ul class="flexcenter">
												<li>1</li>
												<li>15</li>
												<li>27</li>
												<li>60</li>
											</ul>
										</div>
										<div class="rating">
											<div class="stars"></div>
											<span class="mini-text">(2,542)</span>
										</div>
										<h3 class="main-links"><a href="">Happy Sailed Women's Summer Boho Floral</a></h3>
										<div class="price">
											<span class="current">$ 125.99</span>
											<span class="normal mini-text">$ 225.99</span>
										</div>
										<div class="stock mini-text" data-stock="4000">
											<div class="qty">
												<span>Sold: <strong class="qty-sold">3596</strong></span>
												<span>Stock: <strong class="qty-available">157</strong></span>
											</div>
											<div class="bar">
												<div class="available"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="media">
										<div class="thumbnail object-cover">
											<a href="">
												<img src="asset/images/products/apparel6.jpg">
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
										<div class="offer flexitem">
											<p class="mini-text">Offer ends at</p>
											<ul class="flexcenter">
												<li>1</li>
												<li>15</li>
												<li>27</li>
												<li>60</li>
											</ul>
										</div>
										<div class="rating">
											<div class="stars"></div>
											<span class="mini-text">(2,542)</span>
										</div>
										<h3 class="main-links"><a href="">Black Women's Coat Dress</a></h3>
										<div class="price">
											<span class="current">$ 125.99</span>
											<span class="normal mini-text">$ 225.99</span>
										</div>
										<div class="stock mini-text" data-stock="4000">
											<div class="qty">
												<span>Sold: <strong class="qty-sold">1500</strong></span>
												<span>Stock: <strong class="qty-available">157</strong></span>
											</div>
											<div class="bar">
												<div class="available"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="media">
										<div class="thumbnail object-cover">
											<a href="">
												<img src="asset/images/products/apparel3.jpg">
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
										<div class="offer flexitem">
											<p class="mini-text">Offer ends at</p>
											<ul class="flexcenter">
												<li>1</li>
												<li>15</li>
												<li>27</li>
												<li>60</li>
											</ul>
										</div>
										<div class="rating">
											<div class="stars"></div>
											<span class="mini-text">(2,542)</span>
										</div>
										<h3 class="main-links"><a href="">Black Women's Coat Dress</a></h3>
										<div class="price">
											<span class="current">$ 125.99</span>
											<span class="normal mini-text">$ 225.99</span>
										</div>
										<div class="stock mini-text" data-stock="4000">
											<div class="qty">
												<span>Sold: <strong class="qty-sold">3000</strong></span>
												<span>Stock: <strong class="qty-available">157</strong></span>
											</div>
											<div class="bar">
												<div class="available"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="media">
										<div class="thumbnail object-cover">
											<a href="">
												<img src="asset/images/products/apparel3.jpg">
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
										<div class="offer flexitem">
											<p class="mini-text">Offer ends at</p>
											<ul class="flexcenter">
												<li>1</li>
												<li>15</li>
												<li>27</li>
												<li>60</li>
											</ul>
										</div>
										<div class="rating">
											<div class="stars"></div>
											<span class="mini-text">(2,542)</span>
										</div>
										<h3 class="main-links"><a href="">Black Women's Coat Dress</a></h3>
										<div class="price">
											<span class="current">$ 125.99</span>
											<span class="normal mini-text">$ 225.99</span>
										</div>
										<div class="stock mini-text" data-stock="4000">
											<div class="qty">
												<span>Sold: <strong class="qty-sold">3000</strong></span>
												<span>Stock: <strong class="qty-available">157</strong></span>
											</div>
											<div class="bar">
												<div class="available"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="media">
										<div class="thumbnail object-cover">
											<a href="">
												<img src="asset/images/products/apparel3.jpg">
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
										<div class="offer flexitem">
											<p class="mini-text">Offer ends at</p>
											<ul class="flexcenter">
												<li>1</li>
												<li>15</li>
												<li>27</li>
												<li>60</li>
											</ul>
										</div>
										<div class="rating">
											<div class="stars"></div>
											<span class="mini-text">(2,542)</span>
										</div>
										<h3 class="main-links"><a href="">Black Women's Coat Dress</a></h3>
										<div class="price">
											<span class="current">$ 125.99</span>
											<span class="normal mini-text">$ 225.99</span>
										</div>
										<div class="stock mini-text" data-stock="4000">
											<div class="qty">
												<span>Sold: <strong class="qty-sold">3000</strong></span>
												<span>Stock: <strong class="qty-available">157</strong></span>
											</div>
											<div class="bar">
												<div class="available"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="media">
										<div class="thumbnail object-cover">
											<a href="">
												<img src="asset/images/products/apparel3.jpg">
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
										<div class="offer flexitem">
											<p class="mini-text">Offer ends at</p>
											<ul class="flexcenter">
												<li>1</li>
												<li>15</li>
												<li>27</li>
												<li>60</li>
											</ul>
										</div>
										<div class="rating">
											<div class="stars"></div>
											<span class="mini-text">(2,542)</span>
										</div>
										<h3 class="main-links"><a href="">Black Women's Coat Dress</a></h3>
										<div class="price">
											<span class="current">$ 125.99</span>
											<span class="normal mini-text">$ 225.99</span>
										</div>
										<div class="stock mini-text" data-stock="4000">
											<div class="qty">
												<span>Sold: <strong class="qty-sold">3000</strong></span>
												<span>Stock: <strong class="qty-available">157</strong></span>
											</div>
											<div class="bar">
												<div class="available"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="media">
										<div class="thumbnail object-cover">
											<a href="">
												<img src="asset/images/products/apparel3.jpg">
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
										<div class="offer flexitem">
											<p class="mini-text">Offer ends at</p>
											<ul class="flexcenter">
												<li>1</li>
												<li>15</li>
												<li>27</li>
												<li>60</li>
											</ul>
										</div>
										<div class="rating">
											<div class="stars"></div>
											<span class="mini-text">(2,542)</span>
										</div>
										<h3 class="main-links"><a href="">Black Women's Coat Dress</a></h3>
										<div class="price">
											<span class="current">$ 125.99</span>
											<span class="normal mini-text">$ 225.99</span>
										</div>
										<div class="stock mini-text" data-stock="4000">
											<div class="qty">
												<span>Sold: <strong class="qty-sold">3000</strong></span>
												<span>Stock: <strong class="qty-available">157</strong></span>
											</div>
											<div class="bar">
												<div class="available"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="media">
										<div class="thumbnail object-cover">
											<a href="">
												<img src="asset/images/products/apparel3.jpg">
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
										<div class="offer flexitem">
											<p class="mini-text">Offer ends at</p>
											<ul class="flexcenter">
												<li>1</li>
												<li>15</li>
												<li>27</li>
												<li>60</li>
											</ul>
										</div>
										<div class="rating">
											<div class="stars"></div>
											<span class="mini-text">(2,542)</span>
										</div>
										<h3 class="main-links"><a href="">Black Women's Coat Dress</a></h3>
										<div class="price">
											<span class="current">$ 125.99</span>
											<span class="normal mini-text">$ 225.99</span>
										</div>
										<div class="stock mini-text" data-stock="4000">
											<div class="qty">
												<span>Sold: <strong class="qty-sold">3000</strong></span>
												<span>Stock: <strong class="qty-available">157</strong></span>
											</div>
											<div class="bar">
												<div class="available"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="media">
										<div class="thumbnail object-cover">
											<a href="">
												<img src="asset/images/products/apparel3.jpg">
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
										<div class="offer flexitem">
											<p class="mini-text">Offer ends at</p>
											<ul class="flexcenter">
												<li>1</li>
												<li>15</li>
												<li>27</li>
												<li>60</li>
											</ul>
										</div>
										<div class="rating">
											<div class="stars"></div>
											<span class="mini-text">(2,542)</span>
										</div>
										<h3 class="main-links"><a href="">Black Women's Coat Dress</a></h3>
										<div class="price">
											<span class="current">$ 125.99</span>
											<span class="normal mini-text">$ 225.99</span>
										</div>
										<div class="stock mini-text" data-stock="4000">
											<div class="qty">
												<span>Sold: <strong class="qty-sold">3000</strong></span>
												<span>Stock: <strong class="qty-available">157</strong></span>
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

			@endsection