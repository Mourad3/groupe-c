<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Ochoco Shop</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Metatag -->
		<meta property="og:title" content="Ochoco Shop" />
		<meta property="og:type" content="website" />
		<meta property="og:description" content="Minimalist  Responsive eCommerce Template" />
	
		
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/font.css" />
		<link rel="stylesheet" href="css/style.css" />
		
		<!-- Favicon -->
		<link rel="icon" href="img/hsfavicon.png">
		
		<!-- =========== -->
		<!-- Google Font -->
		<!-- =========== -->
				
		<script type="text/javascript">
		
			// Add Google Font name here
			
			WebFontConfig = { google: { families: [ 'Bangers', 'Lato' ] } };
			(function() {
			var wf = document.createElement('script');
			wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
			'://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
			wf.type = 'text/javascript';
			wf.async = 'true';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(wf, s);
			})();
			
		</script>
		
		<style type="text/css">
		
			/* Add Google Font name here */

			.wf-active {font-family: 'Lato',serif; font-size: 14px;}
			.wf-active .logo {font-family: 'Bangers', serif;}
			
		</style>
		
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/ie7.css" />
		<![endif]-->
		
	</head>

	<body class="wf-active">	
		
		<!-- =========== -->
		<!-- Top section -->
		<!-- =========== -->
		
		<div class="header-container">
		<div class="top-header clearfix">
		<div class="container welcome">
			<div class="row-fluid">
				<div class="pull-left greet">
					<div class="counterpro">
					<a href="profil.php"><i class="icon-user-add"></i> Votre Profil </a> 
					</div>
				</div>
				<div class="pull-right cart tright">
					
					<!-- Cart Updates -->
					<div class="counter">
					   <a href="javascript:void(0);"><i class="icon-basket"></i> Votre Panier </a> : <span class="theme" style="color: #fff">100</span>
					</div>
					
					<!-- Bubble Cart Item -->
					<div class="cartbubble">
				
						<div class="arrow-box">
							
							<!-- Item 1 -->
							<div class="clearfix">
								<a href="#">Nom Produit 1</a> <span class="theme pull-right">55</span>
							</div>
							
							<!-- Item 2 -->
							<div class="clearfix">
								<a href="#">Nom Produit 2</a> <span class="theme pull-right">73</span>
							</div>
							
							<!-- Item 3 -->
							<div class="clearfix">
								<a href="#">Nom Produit 3</a> <span class="theme pull-right">11</span>
							</div>
							<hr />
							<!-- Total -->
							<div class="clearfix">
								TOTAL <span class="theme pull-right">139</span>
							</div>
							<hr />
							<div class="clearfix">
								<a href="javascript:void(0)" id="closeit">Fermer</a>
								<a href="caisse.php" class="btn theme btn-mini pull-right">Caisse</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>	
		</div>
		</div>

		<!-- ================ -->
		<!-- Branding section -->
		<!-- ================ -->
		
		<div class="container head">
			<div class="row">
				<div class="span12 clearfix">
					<div class="top row">
						
						<div class="span8 logo text" style="display:none"><a href="index.html">Ochoco Shop</a></div>
						<div class="span8 logo image"><a href="index.php"><img src="img/highreslogo.png" alt="" /></a></div>
						
						<div class="cart span4">
							<form action="#" class="topsearch">
								<input type="search" class="top-search" placeholder="Search"/>
								<button type="submit"><i class="icon-search"></i></button>
							</form>
						</div>
						
					</div>	
				</div>
			</div>
		</div>
		
		<!-- ================ -->
		<!-- Main Nav section -->
		<!-- ================ -->
		
		<div class="container-menu">
		<div class="container">
			<div class="row">		
				<div class="span12">
					<nav class="horizontal-nav full-width">
						<ul class="nav" id="nav">
							<li>
								<a href="index.php">Acceuill</a>
								
							</li>
							<li>
								<a href="listproduit.php">Produits</a>
								
							</li>
							
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		</div>
		</div>