<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <?php if (isset($style)){
        '<link rel="stylesheet"'.' href="'.$style.'">';
    } ?>

    <title>
        
        <?php 
        //  si la variable title existe alors on affiche le contenue
         if (isset($title)){
            echo $title;
        } ?>
        Document</title>
</head>
<body>
<ul class="nav justify-content-center">
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.php">Acceuil</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="recherche.php">recherche</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="livraison.php">Livraison</a>
    </li>
    
    <?php 
    //si  la cle "user"  existe en session alors on affiche le vouton de deconnection
     if(isset($_SESSION['user'])){ ?>
    <li class="nav-item">
    <a class="nav-link" href="logout.php"> se deconnecter</a>
    </li>
    <?php 
    //sinon on affiche  le bouton de connection 
}else{ ?>
<li class="nav-item">
        <a class="nav-link" href="login.php"> Se Connecter</a>
    </li>
    <?php } ?>
</ul>