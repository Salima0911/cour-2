
<?php 
$title = 'validation livraison';
 require_once(__DIR__."/partials/head.php") ?>
    <h1> Validation Formulaire </h1>
    <?php  
        if(!isset ($_POST ['nom'])|| !isset($_POST['prenom']) || !isset($_POST['adresse']) || !isset($_POST['numeroTelephone'])|| !isset($_POST['ville'])
        || !isset($_POST['pays'])|| !isset($_POST['codePostale'])|| !isset($_POST['pays'])||
        empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['adresse']) || empty($_POST['codePostale']) || empty($_POST['ville']) || empty($_POST['pays']) || empty($_POST['numeroTelephone'])
    )   { echo"<h6> merci de remplir le formulaire <h6>";
        } else { 
    ?>
     <div>
        <h6>Votre Nom:</h6>
        <p><?php echo $_POST['nom'] ?></p>
    </div>
    <div>
        <h6>Votre Prenom:</h6>
        <p><?php echo $_POST['prenom'] ?></p>
    </div>
    <h6>Votre Adresse:</h6>
        <p><?php echo $_POST['adresse'] ?></p>
    </div>
    <div>
        <h6>Votre Numero de Telephone:</h6>
        <p><?php echo $_POST['numeroTelephone'] ?></p>
    </div>
    <div>
        <h6>Votre ville:</h6>
        <p><?php echo $_POST['ville'] ?></p>
    </div>
    <h6>Votre Code Postale:</h6>
        <p><?php echo $_POST['codePostale'] ?></p>
    </div>
    <h6>Votre Pays:</h6>
        <p><?php echo $_POST['pays'] ?></p>
    </div>
 
    <?php } ?> 



    <?php require_once(__DIR__."/partials/footer.php") ?>
