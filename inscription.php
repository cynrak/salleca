<?php 
    include_once ('connexion.php');
    $profil=$_POST['profil'];
    $adressemail=$_POST["adressemail"];
    $name=$_POST["name"];
    $mdp=$_POST["mdp"];
    $filiere=$_POST["filiere"];
    $requete = "INSERT INTO users_salleca(adressemail,name,mdp,filiere,profil) VALUES ('$adressemail','$name','$mdp','$filiere','$profil')";
    if ($reponse = $bdd-> query($requete)) {
        echo"Votre compte est créé avec succès ! Retour à la page de connexion dans 3 secondes.";
        echo "<meta http-equiv='refresh' content='3;URL=connection.php' />";
    }else{
        echo"fail".$bdd->error;
    }
?>