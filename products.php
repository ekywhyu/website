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
						<input type="text" class="input-block-level search-query" Placeholder="">
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
							<li><a href="#">Pemesanan</a>
								<ul>
									<li><a href="https://api.whatsapp.com/send?phone=6287839020399">Lewat whatsapp</a></li>
									<li><a href="mailto:edisoebanto55@gmail.com">lewat email</a></li>
									<li><a href="https://www.instagram.com/viea_craftjogja/">lewat instagram</a></li>
								</ul>
							</li>
							<li><a href="./about.php">Tentang kami</a></li>
						</ul>
					</nav>
				</div>
			</section>	
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.jpeg" alt="New products" >
				<h4><span>produk</span></h4>
			</section>
			<section class="main-content">
				
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
			</section>
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
			</section>
		</div>
		<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+6287839020399", // WhatsApp number
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
		<script src="themes/js/common.js"></script>	
    </body>
</html>