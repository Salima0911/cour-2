<?php 


// echo '<pre>';
// var_dump(parse_url($_SERVER[ 'REQUEST_URI'])['path']);
// echo '<pre>';

// $uri = parse_url($_SERVER[ 'REQUEST_URI'])['path'];


// if ($uri == '/home'){
//     require_once(__DIR__.'/home.php');

// }elseif($uri == '/login'){
//     require_once(__DIR__.'/login.php');


// }elseif($uri == '/contact'){
//     require_once(__DIR__.'/contact.php');


// }elseif($uri == '/contactValide'){
//     require_once(__DIR__.'/contactValid.php');


// }elseif($uri == '/livraison'){
//     require_once(__DIR__.'/livraison.php');

// }elseif($uri == '/livraisonValide'){
//     require_once(__DIR__.'/livraisonValide.php');

// }elseif($uri == '/logout'){
//     require_once(__DIR__.'/logout.php');

// }elseif($uri == '/recherche'){
//     require_once(__DIR__.'/recherche.php');


// }elseif($uri == '/rechercheResultat'){
//     require_once(__DIR__.'/rechercheResultat.php');

// }else{
//     require_once(__DIR__.'/404.php');
// }


// <!-- fonction qui permet de recuperer juste l'url -->
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// le tableau de routage
$routes = [
    '/home'     => '/home.php',
    '/login'    =>'/login.php',
    '/contact'  =>'//contact.php',
    '/contactValid'=>'/contactValid.php',
    '/livraison' =>'/livraison.php',
    '/livraisonValide'=>'/livraisonValide.php',
    '/logout'   =>'/logout.php',
    '/recherche' =>'/recherche.php', 
    '/rechercheResultat.php'=>'/rechercheResultat.php',
];
// $uri = '/home';
// array_key_exists('home', $routes), si il le reouve il me donne comme reponse
//true sinon  il me reponds false
//if (true { require_once( __DIR__.'/home.php)}

// la condition  qui retourne un fichier si la  route existe

if(array_key_exists($uri, $routes)){
    require_once(__DIR__.$routes[$uri]);

}else {
    require_once (__DIR__. '/404.php');
}
?>