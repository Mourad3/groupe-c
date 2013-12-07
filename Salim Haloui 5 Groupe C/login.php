<?php
include 'includes/headerlog.inc';

?>

<div class="container">

			<!-- Login Section -->
			<section class="login">

				<div class="row standard">
					<header class="span12 prime">
						<h3>COMPTE</h3>
					</header>
				</div>

				<div class="wrap">

					<div class="row-fluid">
						<div class="span6">

							<ul class="nav nav-tabs" id="myTab">
							  <li class="active"><a href="#login"><i class="icon-lock"></i> Authentification</a></li>
							  <li><a href="#forgot"><i class="icon-help"></i> Mot de passe Oublié</a></li>
							</ul>

							<div class="tab-content">

							<!-- Login -->
							  <div class="tab-pane active" id="login">
								<form class="form-horizontal">
									<div class="control-group">
									<label class="control-label" for="inputEmail"> Email</label>
									<div class="controls">
									  <input type="email" id="inputEmail" placeholder="Email">
									</div>
									</div>
									<div class="control-group">
									<label class="control-label" for="inputPassword">Mot de passe</label>
									<div class="controls">
									  <input type="password" id="inputPassword" placeholder="Password">
									</div>
									</div>
									<div class="control-group">
									<div class="controls">
									  <button type="submit" class="btn theme">Login</button>
									</div>
									</div>
								</form>
							  </div>

							<!-- Register -->
							  <div class="tab-pane" id="forgot">
							  	<form class="form-horizontal">
									<div class="control-group">
									<label class="control-label" for="inputEmail"> Email</label>
									<div class="controls">
									  <input type="email" id="inputEmail" placeholder="Email">
									</div>
									</div>

									<div class="control-group">
									<div class="controls">
									  <button type="submit" class="btn theme">Valider</button>
									</div>
									</div>
								</form>
							  </div>

							</div>

						</div>

						<div class="span6">
							<p>Nouveau Client</p>
							
							<form class="form-horizontal">
								<div class="control-group">
									<label class="control-label" for="inputEmail"> Nom</label>
									<div class="controls">
									  <input type="email" id="inputEmail" placeholder="Email">
									</div>
									</div>
									<div class="control-group">
									<label class="control-label" for="inputEmail"> Email</label>
									<div class="controls">
									  <input type="email" id="inputEmail" placeholder="Email">
									</div>
									</div>
									<div class="control-group">
									<label class="control-label" for="inputPassword">Mot de passe</label>
									<div class="controls">
									  <input type="password" id="inputPassword" placeholder="Password">
									</div>
									</div>
									<div class="control-group">
									<label class="control-label" for="inputPassword">Retapez Mot de passe</label>
									<div class="controls">
									  <input type="password" id="inputPassword" placeholder="Password">
									</div>
									</div>
									
									<hr>
									
									<div class="control-group">
									<label class="control-label" for="inputNom"> Nom</label>
									<div class="controls">
									  <input type="text" id="inputNom" placeholder="Nom">
									</div>
									</div>
									
									<div class="control-group">
									<label class="control-label" for="inputPrenom"> Prenom</label>
									<div class="controls">
									  <input type="text" id="inputPrenom" placeholder="Prenom">
									</div>
									</div>
									
									<div class="control-group">
									<label class="control-label" for="inputTel">Téléphone</label>
									<div class="controls">
									  <input type="tel" id="inputTel" placeholder="Téléphone">
									</div>
									</div>
									
									<div class="control-group">
									<label class="control-label" for="inputAdresse">Adresse</label>
									<div class="controls">
									  <input type="text" id="inputAdresse" placeholder="Adresse">
									</div>
									</div>
									
									
									<div class="control-group">
									<label class="control-label" for="inputVille">Ville</label>
									<div class="controls">
									  <input type="text" id="inputVille" placeholder="Ville">
									</div>
									</div>
									
									<div class="control-group">
									<label class="control-label" for="inputCivil">Civilité</label>
									<div class="controls">
									  <input type="text" id="inputCivil" placeholder="Civilité">
									</div>
									</div>
									
									<div class="control-group">
									<label class="control-label" for="inputCode">Code Postal</label>
									<div class="controls">
									  <input type="text" id="inputCode" placeholder="Code Postal">
									</div>
									</div>
									
									<div class="control-group">
									<div class="controls">
									  <button type="submit" class="btn theme">S'inscrire</button>
									</div>
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