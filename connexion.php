<?php
    try { /* tentative de connexion à la BD*/
        $bdd = new PDO('mysql:host=localhost;dbname=zhangn','zhangn','107Zhangning');
        /* print "La base est ouverte !<br/>\n"; */
    } catch (Exception $e) {
        die('Erreur : '.$e -> getMessage());
        print "Accès impossible à la base ! <br/>\n";
    }
?>