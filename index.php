<?php

$konek = mysqli_connect('localhost','root','', 'KerjaPraktek');

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>VIEA CRAFT JOGJA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="cari barang">

					</form>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.php" class="logo pull-left"><img src="themes/images/logoo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="./index.php">Homepage</a></li>  
							<li><a href="./products.php">Produk</a></li>
							<li><a href="./contact.php">kontak</a></li>
							<li><a href="./about.php">Tentang kami</a></li>	
						</ul>
					</nav>
				</div>
			</section>
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="themes/images/carousel/banner-1.jpeg" alt="" />
						</li>
						<li>
							<img src="themes/images/carousel/banner-2.jpeg" alt="" />
							<div class="intro">
								<h1>VIEA CRAFT JOGJA</h1>
								
							</div>
						</li>
					</ul>
				</div>			
			</section>
			
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Foto <strong>Produk</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
													<span class="sale_tag"></span>												
													<img alt="" src="themes/images/ladies/detail/07.jpg">
													<br/>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">												
													<img alt="" src="themes/images/ladies/detail/08.jpg">
													<br/>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
													<span class="sale_tag"></span>												
													<img alt="" src="themes/images/ladies/detail/1.jpg">
													<br/>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">												
													<span class="sale_tag"></span>
													<img alt="" src="themes/images/ladies/detail/2.jpg">
													<br/>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
													<span class="sale_tag"></span>												
													<img alt="" src="themes/images/ladies/detail/24.jpg">
													</div>
												</li>
												<li class="span3">
													<div class="product-box">												
													<img alt="" src="themes/images/ladies/detail/25.jpg">
													
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
													<span class="sale_tag"></span>												
													<img alt="" src="themes/images/ladies/detail/29.jpg">
									
													</div>
												</li>
												<li class="span3">
													<div class="product-box">												
													<span class="sale_tag"></span>
													<img alt="" src="themes/images/ladies/detail/30.jpg">
									
													</div>
												</li>																																	
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Jenis <strong>Produk</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div class="row">						
					<div class="span9">								
						<ul class="thumbnails listing-products">
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>												
									<a href="galeri1.php"><img alt="" src="themes/images/ladies/1.jpg"></a><br/>
									<a href="galeri1.php" class="title">Aneka kerajinan banana & enceng gondok,seagress,mendong</a><br/>
									<p class="price">Harga mulai dari Rp 10.000an</p>
								</div>
							</li>       
							<li class="span3">
								<div class="product-box">												
									<a href="galeri2.php"><img alt="" src="themes/images/ladies/2.jpg"></a><br/>
									<a href="galeri2.php" class="title">Walldecor banana sun 1set 4</a><br/>
									<a href="galeri2.php" class="category">Detail</a>
									<p class="price">harga Rp 375.000</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>												
									<a href="galeri3.php"><img alt="" src="themes/images/ladies/3.jpg"></a><br/>
									<a href="galeri3.php" class="title">Wall decor banana kombinasi benang katun 1set 3</a><br/>
									<a href="galeri3.php" class="category">Detail</a>
									<p class="price">harga Rp 275.000</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">                                        												
									<a href="galeri5.php"><img alt="" src="themes/images/ladies/5.jpg"></a><br/>
									<a href="galeri5.php" class="title">Aneka kerajinan banana & enceng gondok,seagress,mendong</a><br/>
									<a href="galeri5.php" class="category">ukuran dan model bisa custom.</a>
									<p class="price">Harga mulai dari Rp 10.000an</p>
								</div>
							</li>       
							</ul>								
						<hr>
						</div>
							</div>						
						</div>
						<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="themes/images/feature_img_2.png" alt="" />
										<h4>MODERN <strong>DESIGN</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="themes/images/feature_img_1.png" alt="" />
										<h4>FREE <strong>SHIPPING</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="themes/images/feature_img_3.png" alt="" />
										<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>	
						</div>		
					</div>				
				</div>
			</section>
		<!--	<section class="our_client">
				<h4 class="title"><span class="text">Manufactures</span></h4>
				<div class="row">					
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/14.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/35.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/1.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/2.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/3.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/4.png"></a>
					</div>
				</div>
			</section> -->
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.php">Homepage</a></li>  
							<li><a href="./products.php">Produk</a></li>
							<li><a href="./contact.php">kontak</a></li>
							<li><a href="./about.php">Tentang kami</a></li>								
						</ul>					
					</div>
					<div class="span4">
						
						<ul class="nav">
							
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logoo.png" class="site_logo" alt=""></p>
						<br/>
						
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+6281215958940", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
<br><br>
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>

    </body>
</html>