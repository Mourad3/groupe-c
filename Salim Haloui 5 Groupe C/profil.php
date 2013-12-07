<?php
include 'includes/header.inc';
?>
<div class="container">

			<!-- Login Section -->
			<section class="login">

				<div class="row standard">
					<header class="span12 prime">
						<h3>Profil</h3>
					</header>
				</div>

				<div class="wrap">

					<div class="row-fluid" style="margin-left: 200px">
						
						<div class="span6">
				
							
							<form class="form-horizontal">
									
									<div class="control-group">
									<label class="control-label" for="inputEmail"> Email</label>
									<div class="controls">
									  <input type="email" id="inputEmail" placeholder="Email" value="test@gmail.com">
									</div>
									</div>
									<div class="control-group">
									<label class="control-label" for="inputPassword">Mot de passe</label>
									<div class="controls">
									  <input type="password" id="inputPassword" placeholder="Password" value="password">
									</div>
									</div>
									<div class="control-group">
									<label class="control-label" for="inputPassword">Retapez Mot de passe</label>
									<div class="controls">
									  <input type="password" id="inputPassword" placeholder="Password" value="password">
									</div>
									</div>
									
									<hr>
									
									<div class="control-group">
									<label class="control-label" for="inputNom"> Nom</label>
									<div class="controls">
									  <input type="text" id="inputNom" placeholder="Nom" value="client1">
									</div>
									</div>
									
									<div class="control-group">
									<label class="control-label" for="inputPrenom"> Prenom</label>
									<div class="controls">
									  <input type="text" id="inputPrenom" placeholder="Prenom" value="client1">
									</div>
									</div>
									
									<div class="control-group">
									<label class="control-label" for="inputTel">Téléphone</label>
									<div class="controls">
									  <input type="tel" id="inputTel" placeholder="Téléphone" value="01215454">
									</div>
									</div>
									
									<div class="control-group">
									<label class="control-label" for="inputAdresse">Adresse</label>
									<div class="controls">
									  <input type="text" id="inputAdresse" placeholder="Adresse" value="Agdal Rabat">
									</div>
									</div>
									
									
									<div class="control-group">
									<label class="control-label" for="inputVille">Ville</label>
									<div class="controls">
									  <input type="text" id="inputVille" placeholder="Ville" value="Rabat">
									</div>
									</div>
									
									<div class="control-group">
									<label class="control-label" for="inputCivil">Civilité</label>
									<div class="controls">
									  <input type="text" id="inputCivil" placeholder="Civilité" value="Maroc">
									</div>
									</div>
									
									<div class="control-group">
									<label class="control-label" for="inputCode">Code Postal</label>
									<div class="controls">
									  <input type="text" id="inputCode" placeholder="Code Postal" value="14000">
									</div>
									</div>
									
									<div class="control-group">
									<div class="controls">
									</br>
									  <button type="submit" class="btn theme">Mise à Jour</button>
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