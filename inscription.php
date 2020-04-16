<?php 
    include_once ('connexion.php');
    $adressemail=$_POST["adressemail"];
    $id=$_POST["id"];
    $mdp=$_POST["mdp"];
    $filiere=$_POST["filiere"];
    $requete = "INSERT INTO users_salleca(adressemail,id,mdp,filiere) VALUES ('$adressemail','$id','$mdp','$filiere')";
    if ($reponse = $bdd-> query($requete)) {
        echo"succes";
    }else{
        echo"fail".$bdd->error;
    }
?>