<?php
if (session_start())
{
include 'includes/header.inc';
}
else 
{
include 'includes/headerlog.inc';
}
?>
		
		<!-- =========== -->
		<!-- Main Slider -->
		<!-- =========== -->

		<div class="homepagecontainer">
		<div class="slides home-span12">
		<div class="container">
			
			<div id="flexslider" class="flexslider row">
			  <ul class="slides span12">

			    <!-- Sample slider with text caption -->
			    <li>
			     <img src="img/banner/banner-width1.jpg" alt="" />
			      <p class="flex-caption">
				      <strong>Produit</strong><br />
				      description de produit,description de produit,description de produit <br /><br />
				      <a href="#" class="btn theme">10 | Acheter</a>
			      </p>
			    </li>

			    <!-- Sample slider wrapped with link -->
			    <li><a href="#"><img src="img/banner/banner-width2.jpg" alt="" /></a>
			    <p class="flex-caption">
				      <strong>Produit</strong><br />
				      description de produit,description de produit,description de produit <br /><br />
				      <a href="#" class="btn theme">10 | Acheter</a>
			      </p>
</li>
			    <!-- Sample normal slider -->
			    <li><img src="img/banner/banner-width4.jpg" alt="" />
<p class="flex-caption">
				      <strong>Produit</strong><br />
				      description de produit,description de produit,description de produit <br /><br />
				      <a href="caisse.php" class="btn theme">10 | Acheter</a>
			      </p>
			      </li>
			  </ul>
			</div>
			
		</div>
		</div>
		
		
		<div class="container home">

			<!-- ================ -->
			<!-- Featured section -->
			<!-- ================ -->

			<section class="feat">

				<div class="row">
					<div class="span12">

						

						<div class="tab-content row">

						  <!-- Feat tab -->
						  <div class="tab-pane active" id="feat">
						 	  	  	<article class="span4">
								<div class="view view-thumb">
									<img src="img/products/3.jpg" alt="" />
									<div class="mask">
										
				                        <p> description de produit,description de produit,description de produit </p>
				                        <a href="produit.php" class="info">Voir</a> <a href="caisse.php" class="info">Acheter</a>
									</div>
								</div>
								<h2>10</h2>
								<p><a href="#">Nom Produit</a></p>
							</article>
							<article class="span4">
								<div class="view view-thumb">
									<img src="img/products/2.jpg" alt="" />
									<div class="mask">
										
				                        <p> description de produit,description de produit,description de produit </p>
				                        <a href="produit.php" class="info">Voir</a> <a href="caisse.php" class="info">Acheter</a>
									</div>
								</div>
								<h2>10</h2>
								<p><a href="#">Nom Produit</a></p>
							</article>
							<article class="span4">
								<div class="view view-thumb">
									<img src="img/products/1.jpg" alt="" />
									<div class="mask">
										
				                        <p> description de produit,description de produit,description de produit </p>
				                        <a href="produit.php" class="info">Voir</a> <a href="caisse.php" class="info">Acheter</a>
									</div>
								</div>
								<h2>10</h2>
								<p><a href="#">Nom Produit</a></p>
							</article>
							<article class="span4">
								<div class="view view-thumb">
									<img src="img/products/4.jpg" alt="" />
									<div class="mask">
										
				                        <p> description de produit,description de produit,description de produit </p>
				                        <a href="produit.php" class="info">Voir</a> <a href="caisse.php" class="info">Acheter</a>
									</div>
								</div>
								<h2>10</h2>
								<p><a href="#">Nom Produit</a></p>
							</article>
							<article class="span4">
								<div class="view view-thumb">
									<img src="img/products/5.jpg" alt="" />
									<div class="mask">
										
				                        <p> description de produit,description de produit,description de produit </p>
				                        <a href="produit.php" class="info">Voir</a> <a href="caisse.php" class="info">Acheter</a>
									</div>
								</div>
								<h2>10</h2>
								<p><a href="#">Nom Produit</a></p>
							</article>
							<article class="span4">
								<div class="view view-thumb">
									<img src="img/products/6.jpg" alt="" />
									<div class="mask">
										
				                        <p> description de produit,description de produit,description de produit </p>
				                        <a href="produit.php" class="info">Voir</a> <a href="caisse.php" class="info">Acheter</a>
									</div>
								</div>
								<h2>10</h2>
								<p><a href="#">Nom Produit</a></p>
							</article>
						  </div>
						</div> <!-- End tab-content -->

					</div>
				</div>


				

			</section>

		</div>
		</div>
		

	<?php
include 'includes/footer.inc';
?>