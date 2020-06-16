<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<?php wp_head();?>	
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	
	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> 
									<?php
										if(get_theme_mod('eshop_contact')){
											echo get_theme_mod('eshop_contact');
										}
									?>
								</li>
								<li><i class="ti-email"></i> support@shophub.com</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<li><i class="ti-location-pin"></i> Store location</li>
								<li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li>
								<li><i class="ti-power-off"></i> 
									<?php  wp_loginout(); ?>
								</li>								
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.html">
								<?php
									if(get_theme_mod('custom_logo')){
										if(has_custom_logo()){
											the_custom_logo();
										}
									}
								?>							
							</a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								<?php get_template_part('/templates/searchbar_category_list');?>								
								<?php get_product_search_form(); ?>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar">
								<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar shopping" id="minicart">
								<?php get_template_part('/templates/minicart');?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
                        <?php if( is_front_page() ){ ?>                        
						<div class="col-lg-3">
							<div class="all-category">
								<h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
								<!-- <ul class="main-category">									
										<li class="main-mega"><a href="#">best selling <i class="fa fa-angle-right" aria-hidden="true"></i></a>
											<ul class="mega-menu">
												<li class="single-menu">
													<a href="#" class="title-link">Shop Kid's</a>
													<div class="image">
														<img src="https://via.placeholder.com/225x155" alt="#">
													</div>
													<div class="inner-link">
														<a href="#">Kids Toys</a>
														<a href="#">Kids Travel Car</a>
														<a href="#">Kids Color Shape</a>
														<a href="#">Kids Tent</a>
													</div>
												</li>
												<li class="single-menu">
													<a href="#" class="title-link">Shop Men's</a>
													<div class="image">
														<img src="https://via.placeholder.com/225x155" alt="#">
													</div>
													<div class="inner-link">
														<a href="#">Watch</a>
														<a href="#">T-shirt</a>
														<a href="#">Hoodies</a>
														<a href="#">Formal Pant</a>
													</div>
												</li>
												<li class="single-menu">
													<a href="#" class="title-link">Shop Women's</a>
													<div class="image">
														<img src="https://via.placeholder.com/225x155" alt="#">
													</div>
													<div class="inner-link">
														<a href="#">Ladies Shirt</a>
														<a href="#">Ladies Frog</a>
														<a href="#">Ladies Sun Glass</a>
														<a href="#">Ladies Watch</a>
													</div>
												</li>
											</ul>
										</li>																	
									</ul> -->
								<?php
									wp_nav_menu( [
										'theme_location'=> 'front_category',
										'container' => '',
										'menu_class' => 'main-category',
										'walker' => new front_categories_menu()
									] );
								?>
							</div>
                        </div>
                        <?php } ?>
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">																	

												<?php 												

												if(has_nav_menu( 'primary' )){
													$args = [
														'theme_location' => 'primary',
														'menu_class'=> 'nav main-menu menu navbar-nav',
														'container_class'=> 'nav-inner',
														'depth' => 2,
														'walker' => new eshop_primary_nav_walker()
													];

													wp_nav_menu($args);
												}

												?>
										
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->
