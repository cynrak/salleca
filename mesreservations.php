<DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<title>Salle ça - Profil</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
		.btn-primary{
			background-color: #fc7b03;
			border-color: #1f1d1b;
		}
	</style>
</head>

<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Salle Ça !</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="reservation.html">Réservation<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="consultation.php">Consultation</a>
      </li>
      <li class="nav-item dropdown active" >
        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Marie_R</a>
        <div class="dropdown-menu" aria-labelledby="dropdown03">
          <a class="dropdown-item" href="#">Mon profil</a>
          <a class="dropdown-item" href="#">Mes réservations</a>
			<div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.html">Se déconnecter</a>
        </div>
      </li>
    </ul>
  
  <button type="button" class="btn btn-outline-secondary">
  Notifications <span class="badge badge-light">2</span>
</button>
</nav>

  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Mes réservations</h1>
      <p>Vous trouverez ici toutes vos réservations.</p>
    </div>
  </div>


<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Date</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Salle : <br/>Heure :</p>
    <a href="#" class="card-link">Modifier</a>
    <a href="#" class="badge badge-danger">Annuler la réservation</a>
  </div>
</div>




<footer class="container">
  <p>&copy; Balizz 2020-</p>
</footer>
</body>
<script src="js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="js/core/popper.min.js" type="text/javascript"></script>
<script src="js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>


