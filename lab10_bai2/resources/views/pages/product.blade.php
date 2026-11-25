@extends('layout')
@section('title', 'Sản phẩm | E-Shopper')
@section('content')
<div class="features_items">
	<h2 class="title text-center">Đây là trang sản phẩm</h2>
	<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products">
				<div class="productinfo text-center">
					<img src="{{ asset('frontend/images/shop/product12.jpg') }}" alt="" />
					<h2>$56</h2>
					<p>Easy Polo Black Edition</p>
					<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				</div>
				<div class="product-overlay">
					<div class="overlay-content">
						<h2>$56</h2>
						<p>Easy Polo Black Edition</p>
						<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
					</div>
				</div>
			</div>
			<div class="choose">
				<ul class="nav nav-pills nav-justified">
					<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
					<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products">
				<div class="productinfo text-center">
					<img src="{{ asset('frontend/images/shop/product11.jpg') }}" alt="" />
					<h2>$56</h2>
					<p>Easy Polo Black Edition</p>
					<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				</div>
				<div class="product-overlay">
					<div class="overlay-content">
						<h2>$56</h2>
						<p>Easy Polo Black Edition</p>
						<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
					</div>
				</div>
			</div>
			<div class="choose">
				<ul class="nav nav-pills nav-justified">
					<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
					<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products">
				<div class="productinfo text-center">
					<img src="{{ asset('frontend/images/shop/product10.jpg') }}" alt="" />
					<h2>$56</h2>
					<p>Easy Polo Black Edition</p>
					<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				</div>
				<div class="product-overlay">
					<div class="overlay-content">
						<h2>$56</h2>
						<p>Easy Polo Black Edition</p>
						<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
					</div>
				</div>
			</div>
			<div class="choose">
				<ul class="nav nav-pills nav-justified">
					<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
					<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection
