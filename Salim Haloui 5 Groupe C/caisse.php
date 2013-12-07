<?php
include 'includes/header.inc';
?>
<div class="container">

			<!-- Checkout Page -->
			<section class="order">

				<div class="row standard">
					<header class="span12 prime">
						<h3>Votre Panier</h3>
					</header>
				</div>

				<div class="row cart">
					<div class="span12">
						<div class="wrap-table">
							<form action="#">
								<table class="table">
									<thead>
										<tr>
											<td width="70%">Nom</td>
											<td width="10%">Prix</td>
											<td width="10%">Quantité</td>
											<td width="10%">Total</td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="cart-img pull-left hidden-phone"><img src="img/products/2.jpg" alt="" /></div>
												<div class="item pull-left">
													<span><a href="#"><i class="icon-cancel-circled"></i></a> <a href="#">Nom Produit</a> <a href="#"><i class="icon-remove-sign"></i></a></span>
												</div>
											</td>
											<td><i>10</i></td>
											<td><input type="text" class="span1" value="1"/></td>
											<td><strong>10</strong></td>
										</tr>
										<tr>
											<td>
												<div class="cart-img pull-left hidden-phone"><img src="img/products/2.jpg" alt="" /></div>
												<div class="item pull-left">
													<span><a href="#"><i class="icon-cancel-circled"></i></a> <a href="#">Nom Produit</a> <a href="#"><i class="icon-remove-sign"></i></a></span>
												</div>
											</td>
											<td><i>10</i></td>
											<td><input type="text" class="span1" value="3"/></td>
											<td><strong>10</strong></td>
										</tr>
										<tr>
											<td colspan="3"><div class="item">Total</div></td>
											<td>1000</td>
										</tr>
									</tbody>
								</table>
								<div class="row-fluid cart-pay">
									
									<div class="span6 cart-checkout"><button class="btn"><i class="icon-arrows-ccw"></i> Mise à jour Panier</button> <button class="btn theme"><i class="icon-check"></i> Caisse </button></div>
								</div>
							</form>
						</div>
					</div>
				</div>

			</section>
		</div>

<?php 
include 'includes/footer.inc';
?>