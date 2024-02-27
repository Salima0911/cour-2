<?php 
//appel la session
session_start();
//  ferme la session 
session_destroy();
//rederige vers l'acceuil
header('location: home.php');


?>