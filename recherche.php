<!-- exercice 1
créer un fichier recherche.php et un fichier rechercheResultat.php

le fichier recherche.php devra contenir un formulaire avec un input de recherche
une checkbox “recherche globale” et un select avec trois possibilités de tri “par catégorie”, ”par nom” , “par date” -->


    <?php
    session_start();
    require_once(__DIR__."/views/recherche.view.php");
    