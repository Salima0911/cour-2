<?php 
$title = 'RECHERCHER';
require_once(__DIR__ . '/partials/head.php') ?>
<h1>page de recherche</h1>

<form action="rechercheResultat">
    <div>
        <label for="recherche">recherche</label>
        <input type="text" name="recherche">
    </div>
    <div>
        <input type="checkbox" name="globale" id="">
        <label for="globale">recherche globale</label>
    </div>
    <select name="tri" id="">
        <option value="categorie">categorie</option>
        <option value="nom">nom</option>
        <option value="date">date</option>
    </select>
    <button type="submit">envoyer</button>

</form>

<?php require_once(__DIR__."/partials/footer.php") ?>

