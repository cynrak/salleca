<?php 
header('Content_type:text/html;charset=utf-8');
$link=@mysqli_connect('localhost','zhangn','107Zhangning','zhangn');
if(mysqli_connect_errno()){
    exit(mysqli_connect_error());
}
mysqli_set_charset($link,'utf8');
$query="select * from consultation";
$result=mysqli_query($link,$query);
if ($result) {
    //pour récupérer toutes les informations
    while($data=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        //print_r($data);
    }
}else{
    var_dump(mysqli_error($link));
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Salle ça - Consultation</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="https://cdn.bootcss.com/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  		<a class="navbar-brand" href="#">Salle ça ! </a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>

  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav mr-auto">
      			<li class="nav-item">
        			<a class="nav-link" href="reservation.html">Réservation</a>
      			</li>
      			<li class="nav-item active">
        			<a class="nav-link" href="consultation.html">Consultation<span class="sr-only">(current)</span></a>
      			</li>
      			<li class="nav-item dropdown">
        			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Marie_R</a>
        			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          				<a class="dropdown-item" href="compte.html">Mon profil</a>
          				<a class="dropdown-item" href="#">Mes réservations</a>
          				<div class="dropdown-divider"></div>
          				<a class="dropdown-item" href="acc.html">Se déconnecter</a>
        			</div>
      			</li>	
    		</ul>

  		</div>
	</nav>
	<div class="jumbotron">
		<h1 style = "text-align : center;">Consultation</h1>
		<p class="lead" style = "text-align : center;">Vous trouverez ici les informations utiles selon la citère que vous choisissez.</p>
	</div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="form-group">
    				<label for="exampleFormControlSelect1" style="font-size:30px;">Flitrer par : </label>
    				<select class="form-control" id="exampleFormControlSelect1">
	      				<option>Professeur</option>
	      				<option>Salle</option>
	    			</select>
  				</div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="form-group" id="professeur">
                    <label for="exampleFormControlSelect1" style="font-size:15px;">Nom de professeur : </label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <?php 
                            $query2="select distinct salle_name from consultation";
                            $result2=mysqli_query($link,$query2);
                            if ($result2) {
                                //pour récupérer tous les noms de professeur
                                while($salle=mysqli_fetch_row($result2)){
                                    echo "<option>".$salle['0']."</option>";
                                }
                            }else{
                                var_dump(mysqli_error($link));
                            }
                        ?>
                    </select>
                </div>
                 <div class="form-group" id="salle" hidden>
                    <label for="exampleFormControlSelect1" style="font-size:15px;">Nom de salle : </label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <?php
                            $query1="select distinct user from consultation where profil='Professeur'";
                            $result1=mysqli_query($link,$query1);
                            if ($result1) {
                                //pour récupérer tous les noms de professeur
                                while($nom=mysqli_fetch_row($result1)){
                                    echo "<option>".$nom['0']."</option>";
                                }
                            }else{
                                var_dump(mysqli_error($link));
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col">
				<div class="form-group">
					<label>Date : </label>
					<div class='input-group date' id='datetimepicker1'>
						<input type='text' class="form-control" />
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>
				</div>
			</div>
    	</div>
	</div>

	<div style="margin-left:45%;margin-bottom:30px;">
		<button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Valide</button>
	</div >
	<div style="margin-bottom:30px;margin-left:30px;margin-right:30px;" class="collapse multi-collapse" id="multiCollapseExample1">
		<div class="card card-body">
			<div class="card-group">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Claude Ponton</h5>
						<p class="card-text">Salle occupée : I104<br>
							Horaire : 10:30 - 12:30<br>
							Objectif : Cours PHP</p>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Claude Ponton</h5>
						<p class="card-text">Salle occupée : I108<br>
							Horaire : 15:30 - 17:30<br>
							Objectif : Cours Java</p>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Claude Ponton</h5>
						<p class="card-text">Salle occupée : I106<br>
							Horaire : 8:30 - 10:30<br>
							Objectif : Cours HTML</p>
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

<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript" src="js/moment/min/moment-with-locales.js"></script>
<script src="https://cdn.bootcss.com/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script>
	$(function () {
	$('#datetimepicker1').datetimepicker({
	format: 'DD-MM-YYYY',
	locale: moment.locale('fr')
	});
	$('#datetimepicker2').datetimepicker({
	format: 'YYYY-MM-DD hh:mm',
	locale: moment.locale('zh-cn')
	});
	});
</script>
</html>