<?php
session_start();
$title = 'ACCEUIL';
require_once(__DIR__."/head.php");
require_once(__DIR__."/varriable.php");
require_once(__DIR__."/fonction.php");
//getUsers($users);
?>
    <h1>Ma premiere Page php</h1>
    <div class="container">
        <div class="row">
            <h2>Produits</h2>
            <?php getProducts($products); ?>
        </div>
        <div class="row">
            <h2>Utilisateurs</h2> 
            <?php getUsers($users); ?>
        </div>
    </div>
    
<?php  require_once(__DIR__ . "/footer.php") ?>
