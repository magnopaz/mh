<!--
Author 1st version: W3layouts
Author URL: http://w3layouts.com
Update autor: Louise
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>MARIA HELENA VEDOVATTO - TERAPEUTA CEASE-HDT</title>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/chocolat.css" rel="stylesheet">
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="MARIA HELENA VEDOVATTO - TERAPEUTA CEASE-HDT, Tratamento Homeopático para o Autismo" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->	
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- js -->
<script src="js/modernizr.custom.97074.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
	});
});
</script>
<!-- start-smoth-scrolling -->
</head>
<body>
<div class="header">
	<div class="header-left">
	<div class="logo2"> 
		<a href="index.html"><img src="images/logo2.png" alt=""/></a>
	</div>
	</div>
	<div class="header-right">
		<span class="menu"><img src="images/menu.png" alt=""/></span>
			<nav class="cl-effect-11" id="cl-effect-11">	
				<ul class="nav1">	
					<li><a href="index.php">INICIO</a></li>	
					<li><a href="sobre.php">TERAPEUTA</a></li>
					<li><a href="homeo.php" title="">HOMEOPATIA</a></li>
                    <li><a href="cease.php" title="">TERAPIA CEASE-HDT</a></li>
					<li><a href="duvidas.php" title="">DÚVIDAS</a></li>                    
                    <li><a href="contato.php" title="">ATENDIMENTO</a></li>
                    <li><a href="login.php" title="">Área do Cliente</a></li>						
								</ul>
			</nav>
				<!-- script for menu -->
					<script> 
						$( "span.menu" ).click(function() {
						$( "ul.nav1" ).slideToggle( 300, function() {
						 // Animation complete.
						});
						});
					</script>
				<!-- //script for menu -->
	</div>
	<div class="clearfix"></div>
</div>
<!-- banner-slider -->
<div id="home" class="banner-slider">
		<!-- responsiveslides -->
							<script src="js/responsiveslides.min.js"></script>
								<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: false,
										nav: false,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
								</script>
		<!-- responsiveslides -->
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li>
					<div class="banner one">
							
							<div class="container">
								<div class="banner-info">
									<h3> SEJA <span></span> BEM <span></span> VINDO!!!</h3>>
									<h4><span>TERAPIA </span> CEASE-HDT</h4>
									<p>Maria Helena Vedovatto</p>
								</div>
							</div>
					</div>
				</li>
				<li>
					<div class="banner two">
							<div class="container">
								<div class="banner-info">
									<h3> SEJA <span></span> BEM <span></span> VINDO!!!</h3>>
									<h4><span>TERAPIA </span> CEASE-HDT</h4>
									<p>Maria Helena Vedovatto</p>
								</div>
							</div>
					</div>
				</li>
				
			</ul>
		</div>
</div>
<div class="clearfix"></div>
<div class="copy-right">
	<div class="container">
		<p> &copy; 2019 Vedovatto Terapia CEASE-HDT. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts + Louise                         </a></p>
	</div>
</div>
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
</body>
</html>