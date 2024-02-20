<!-- exercice 
creez un formulaire avec :
nom,prenom,code,code postal ,adresse ,pays , numero de telephone.
utilisez la method POST et la superglobale $_POST afin que le formulaire sois securiser.
Pour finir ajoutez le maximum de contrainte avant l affichage des donnee -->


   <?php
   session_start();
   $title = 'LIVRAISON';
   require_once(__DIR__ . '/head.php') ?>
   <h2>Fomulaire Livraison</h2>
  <form action="livraisonValide.php" method = "POST">

   
<div class="form-row">
    <div class="form-group col-md-4">
    <label for="nom"> Nom</label>
    <input type="text" class="form-control"name="nom" id="nom" >
  </div>
</div>
  <div class="form-row">
    <div class="form-group col-md-4">
    <label for="prenom">Prenom</label>
    <input type="text" class="form-control"name="prenom" id="prenom" >
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
    <label for="adresse">Adresse</label>
    <input type="text" class="form-control" name="adresse"id="adresse" placeholder="1234 Main St">
  </div>
</div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="codePostale">Code Postal</label>
      <input type="text" class="form-control" name="codePostale"id="codePostale">
    </div>
    <div class="form-row">
    <div class="form-group col-md-4">
    <label for="ville">Ville</label>
    <input type="text" class="form-control" name="ville"id="ville" >
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
    <label for="pays">Pays</label>
    <input type="text" class="form-control"name="pays" id="pays" >
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="numeroTelephone">Numero de Telephone</label>
      <input type="text" class="form-control" name="numeroTelephone"id="numeroTelephone">
    </div>
</div>
<br>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
<?php require_once(__DIR__."/footer.php") ?>
