

<?php
session_start();
$title = 'contact';
  require_once(__DIR__."/head.php") ?>

<form action="contactValide.php" method = "">  <!-- dans action on indque le nom d'un fichier ou il doit etre envoye -->
    
 <div class="mb-3">
    <label for="email">Email</label>
    <input type="email" name="email" required >
 </div>
 <div class="mb-3">
    <label for="nom">Nom</label>
    <input type="text" name="nom" id='nom'>
 </div>


 <div class="mb-3">
    <label for="message">Message</label>
    <textarea name="message"  cols="30" rows="10"></textarea>
 </div>

 <button type="submit" class= 'btn btn-primary'>Envoyer</button>



</form>
<?php require_once(__DIR__."/footer.php") ?>
    
