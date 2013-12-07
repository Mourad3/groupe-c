<?php
include 'includes/header.inc';
?>
<div class="container">

			<!-- ====================== -->			
			<!-- Single Product Section -->
			<!-- ====================== -->

			<section class="single">

				<div class="row">
					<header class="span12 prime">
						<h3>Nom Produit</h3>
					</header>
				</div>

				<div class="row">

					<div class="span5">

						<!-- Product Images -->
						<div class="wrap">

							
							  <ul>
							    <li><img src="img/products/1.jpg" /></a></li>
							    
							  </ul>				  
							

							
						</div>

					</div>

					<div class="span7">

						<!-- Product Info -->
						<div class="details wrapper">

							<p class="price"><i class="icon-tag"></i>100</p>

							<form action="#">
								<p>
									<select name="#" id="#">
										<option value="#">Catégorie</option>
										<option value="small">Catégorie 1</option>
										<option value="medium">Catégorie 2</option>
										<option value="large">Catégorie 3</option>
									</select>
								</p>
	<p>
									<select name="#" id="#">
										<option value="#">Type</option>
										<option value="small">Type 1</option>
										<option value="medium">Type 2</option>
										<option value="large">Type 3</option>
									</select>
								</p>
								<div class="clearfix">
									<div class="pull-left qty">
										<input type="number" class="qty"  value="1" />
									</div>
									<div class="pull-left"><a href="caisse.php" class="btn theme">Ajouter Au Panier</a></div>
								</div>
							</form>

							<hr>
							

							<!-- Product details -->

							<div class="accordion" id="accordion2">
							  <div class="accordion-group">
							    <div class="accordion-heading">
							      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#description">
							        <i class="icon-layout theme"></i>Description Produit
							      </a>
							    </div>
							    <div id="description" class="accordion-body collapse">
							      <div class="accordion-inner">
							        Description de produit, Description de produit, Description de produit, Description de produit, Description de produit, Description de produit 
							      </div>
							    </div>
							  </div>
							 
							</div>

						</div>

					</div>
				</div>

				<!-- ================== -->
				<!-- Cross-sell section -->
				<!-- ================== -->

				<div class="row">
					<div class="span12">
						<div class="cross-wrapper">
							<hr />
							<header>Portez-le avec</header>

							<section class="row-fluid cross-product">

									<article class="span3">
										<div class="view view-thumb">
											<img src="img/products/1.jpg" alt="" />
											<div class="mask">
												<h2>10</h2>
						                        <p>Description Produit,Description Produit,Description Produit</p>
						                        <a href="product.html" class="info">Voir</a> <a href="checkout.html" class="info">Acheter</a>
											</div>
										</div>
										<p>Nom Produit</p>
									</article>

									<article class="span3">
										<div class="view view-thumb">
											<img src="img/products/3.jpg" alt="" />									
										<div class="mask">
												<h2>10</h2>
						                        <p>Description Produit,Description Produit,Description Produit</p>
						                        <a href="product.html" class="info">Voir</a> <a href="checkout.html" class="info">Acheter</a>
											</div>
										</div>
										<p>Nom Produit</p>
									</article>

									<article class="span3">
										<div class="view view-thumb">
											<img src="img/products/4.jpg" alt="" />
											<div class="mask">
												<h2>10</h2>
						                        <p>Description Produit,Description Produit,Description Produit</p>
						                        <a href="product.html" class="info">Voir</a> <a href="checkout.html" class="info">Acheter</a>
											</div>
										</div>
										<p>Nom Produit</p>
									</article>

									<article class="span3">
										<div class="view view-thumb">
											<img src="img/products/5.jpg" alt="" />
											<div class="mask">
												<h2>10</h2>
						                        <p>Description Produit,Description Produit,Description Produit</p>
						                        <a href="product.html" class="info">Voir</a> <a href="checkout.html" class="info">Acheter</a>
											</div>
										</div>
										<p>Nom Produit</p>
									</article>
							</div>

						</div>
					</div>
				</div>

			</section>

		</div>

<?php
include 'includes/footer.inc';
?>