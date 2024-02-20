<!-- exercice 1
créer un fichier recherche.php et un fichier rechercheResultat.php

le fichier recherche.php devra contenir un formulaire avec un input de recherche
une checkbox “recherche globale” et un select avec trois possibilités de tri “par catégorie”, ”par nom” , “par date” -->


    <?php
    session_start();
    $title = 'RECHERCHER';
    require_once(__DIR__ . '/head.php') ?>
    <h1>page de recherche</h1>

    <form action="rechercheResultat.php">
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


    <?php require_once(__DIR__ . '/footer.php') ?>
