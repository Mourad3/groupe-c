<?php
include 'includes/header.inc';
?>
<div class="container">

			<!-- ============ -->
			<!-- Contact page -->
			<!-- ============ -->

			<section class="page contacts" >

				<div class="row">
					<div class="span12">

						<!-- Replace data-center with your address -->
						<div class="gmap" id="map" data-center="Hightech" data-zoom="15">
							
						</div>
					</div>
				</div>

				<div class="row address">

					<div class="span4">
						<div class="wrap contactform">
							<address class="row-fluid">
								<div class="pull-left clabel"><i class="icon-location"></i></div>
								<div class="pull-left cdata">1234 Agdal,Rabat Maroc</div>
							</address>
							<address class="row-fluid">
								<div class="pull-left clabel"><i class="icon-phone"></i></div>
								<div class="pull-left cdata">+2120673416058</div>
							</address>
							<address class="row-fluid">
								<div class="pull-left clabel"><i class="icon-mail"></i></div>
								<div class="pull-left cdata"><a href="#">Contact@Ochoco.com</a></div>
							</address>
						</div>
					</div>

					<div class="span8">
						<div class="row-fluid">
							<form action="#" class="wrap contactform">
								<div class="span4">
									<label for="inputEmail">Nom</label>
									<input type="text" id="inputEmail" placeholder="Email" class="input-medium">
								</div>
								<div class="span4">
									<label for="inputEmail">Email</label>
									<input type="text" id="inputEmail" placeholder="Email" class="input-medium">
								</div>
								<div class="span4">
									<label for="inputEmail">Téléphone</label>
									<input type="text" id="inputEmail" placeholder="+4492663399" class="input-medium">
								</div>
								<div class="row-fluid">
									<div class="span12">
										<label for="inputPassword">Message</label>
										<textarea name="" id="" rows="5"></textarea>
									</div>
									<p><input type="submit" class="btn" value="Envoyer"/></p>
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