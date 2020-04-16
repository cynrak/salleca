<?php 
    include_once ('connexion.php');
    $requete = "SELECT id,mdp FROM users_salleca";
    if ($reponse = $bdd -> query($requete)) {
        /* l’exécution a réussie */
        /* traitement de la réponse */
            /* traitement de l’enregistrement $enr */
            if (isset($_POST["id"]) and isset($_POST["mdp"])) {
                $trouve = False;
                while($enr = $reponse -> fetch() and !$trouve){
                    $i = 1;
                    if($_POST["id"]== $enr["id"] and $_POST["mdp"]== $enr["mdp"]) {
                        $trouve = True;
                        header('Location: http://i3l.univ-grenoble-alpes.fr/~zhangn/salleca/reservation.html');
                        exit();
                    }elseif($_POST["id"]== $enr["id"] and $_POST["mdp"]!= $enr["mdp"]){
                        $i = 2;
                        $trouve = True;
                    }else{
                        $i = 3;
                    }
                }
                if ($trouve and $i == 1) {
                    print "authentification succes";
                }elseif($trouve and $i == 2){
                    print "Mot de passe incorrect";
                }else{
                    print "identifiant <strong>".$_POST["id"]."</strong> inexistant";
                }
            }else{
                print "identifiant inexistant";
            }
    }else{
        /* l’exécution a échouée */
        print "Erreur";
    }
?>