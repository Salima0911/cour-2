<?php  
session_start();

//var_dump

$title = 'CONNECTION';
require_once(__DIR__ ."/varriable.php");

//on commence par verefier si email et  password existe dans la superglobale

if(isset($_POST['email']) &&isset($_POST['password'])){

     //ensuite on verifie si l'information dans l'email  est bien sous la forme d'un email

    if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){

        //  si c'est pas le cas on affiche  un message  d'erreur             
    //   echo "error dans le formulaire";
    //je creer la variable errorMessage  et je lui attrivue un message si l'eamil est dans le format incorrect
    $errorMessage = "erreur dans le formulaire ";

     

    }else{
        // si c'est le cas  on parcours le tableau des utilisateurs qui proviens des variable
        // puis si l'email existe dans le tableau on verifie que le mot de passe correspond

        foreach($users as $user){

        //pour chaque utilisateur on verifie si l'email est le meme  que celui envoyer  dans le formulaire
            
        //puis si l'email existe dans le tableau  on verifie que le mot de passe correspond
            if($user['email']=== $_POST['email']&& $user['password']=== $_POST['password']){

        //si  c'est  le cas on affiche a l'utilsateur un message  de validation
        // echo  "Vous êtes Connecté" ; 
        //j'arrete  le code  si on a trouver l'utilisateur car ca sert a rien a continuer la boucle
        //return
        $_SESSION['user'] =$user['email'];
        header('location: index.php');
               
            }
        
        }
        //si aucun utilisateur est trouvé alors on met un autre message d'erreur
        $errorMessage = "email ou mot de passe incorrect";
    }
}


?>
    <?php require_once(__DIR__ . "/head.php") ?>
    <form action="" method= "POST">
        <label for="email">Email</label>
        <input type="email" name='email'/>

        <label for="password"> password</label>
        <input type="password" name="password" />
    
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
    <?php 
    if(isset ($errorMessage)){
        echo "<p class='text-danger'>" . $errorMessage . "<p>";
    } 
     require_once(__DIR__."/footer.php") ?>
    

       
        