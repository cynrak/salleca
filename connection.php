<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Salle ça - Se connecter</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
	<div class="jumbotron">
  		<h1 class="display-3" style="text-align: center; font-family: times; font-style: italic;">Salle Ça !</h1>
	</div>
	<div class="row">
		<div class="col" style="padding: 50px; border-right:1px solid">
			<form method="post" action="authentification.php">
				<h3 style ="margin : 1rem; text-align: center;">Déjà Un Compte ?</h3>
		  		<div class="form-group">
		    		<label for="exampleInputEmail1">Identifiant</label>
		    		<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrer votre identifiant" name="id" value="<?php
		    			if(isset($_POST["identifiant"])){
		    				print $_POST["identifiant"];
		    			}else{
		    				print"";
		    			}
		    		?>">
		  		</div>
		  		<div class="form-group">
		    		<label for="exampleInputPassword1">Mot de passe</label>
		    		<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrer votre mot de passe" name="mdp">
		  		</div>
		  		<div style="float: right;">
		  			<a href="#" id="password-reset" class="password-reset" title="Demander la r&eacute;initialisation de votre mot de passe">Mot de passe oubli&eacute; ?</a>
		  		</div>
		  		<div class="field-wrapper has-input">
		  			<input type="checkbox" class="input-checkbox" id="login-rememberme" name="login-rememberme" value="true">
		  			<label for="login-rememberme"><span>Se souvenir de moi</span></label>
		  		</div>
				<button type="submit" class="btn btn-primary" style="width: 100%;"  >Me connecter</a></button>
			</form>
		</div>
		<div class="col" style="padding: 50px; ">
  			<h3 style ="margin : 1rem; text-align: center;">Pas Encore De Compte ?</h3>
  			<div>
  				<div style ="margin : 2rem;">Créez un compte pour profiter de tous les avantages.</div>
  				<button type="submit" class="btn btn-primary" id="createcompte" data-toggle="modal" data-target="#exampleModalLong" style="width: 100%">
					<span>Cr&eacute;er un compte</span>
				</button>
				<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle">Créer mon compte</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" action="inscription.php">
									<div class="form-creation">
										<div class="form-group">
											<label for="exampleFormControlInput1">Adresse mail UGA</label>
											<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="prénom.nom@example.com" name="adressemail">
										</div>
										<div class="form-group">
											<label for="identifiant">Identifiant</label>
											<input type="text" class="form-control" id="exampleInputEmail1" name="id">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Mot de passe</label>
											<input type="password" class="form-control" id="exampleInputPassword1" name="mdp">
										</div>
										<div class="form-group">
											<label for="exampleFormControlSelect1">Filière</label>
											<select class="form-control" id="exampleFormControlSelect1" name="filiere">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
									<button type="submit" class="btn btn-primary">Créer mon compte</button>
								</div>
							</form>
						</div>
					</div>
				</div>
  			</div>
		</div>
	</div>
</body>
<script src="js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="jquery-3.4.1.js" type="text/javascript"></script>
<script src="js/core/popper.min.js" type="text/javascript"></script>
<script src="js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
</html>