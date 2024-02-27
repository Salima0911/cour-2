<?php 
$title = 'ACCEUIL';
require_once(__DIR__."/partials/head.php");
?>
    <h1>Ma premiere Page php</h1>
    <div class="container d-flex">
       
        <div class="row">
            <h2>Utilisateurs</h2> 
            <?php getUsers($users); ?>
        </div>
        <div class="row">
            <h2>Produits</h2>
            <?php getProducts($products); ?>
        </div>
    </div>

    
    <?php require_once(__DIR__."/partials/footer.php") ?>
