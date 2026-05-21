<?php 
//Demarrer la session PHP
session_start();

// verifier si formulaire est envoyé
if($_SERVER["REQUEST_METHOD"] === "POST"){

// Recuperer les données entrées
$nomUtilisateur = $_POST["username"];
$motdePasse = $_POST["password"];

// verifier si les informations saisies sont correctes
if($nomUtilisateur === "example@gmail.com" && $motdePasse === "1234"){

// Ouvrir la session de l'utilisateur en stockant son username
$_SESSION["user"] = $nomUtilisateur;

// Afficher message de connexion
echo("Vous êtes connecté!");

//  Rediriger la session vers la page "accueil"
header("Location: accueil.php");

//  Et stopper le script
exit();
}

// si la condition n'est pas verifiee, afficher message d'erreur
else{
    echo("Nom d'utilisateur ou Mot de passe incorrect");
}


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion_PHP</title>
    <link rel="stylesheet" href="style-login.css">
</head>
<body class="login_boy">
    <div class="container">
        <h1>Connexion</h1>
        <form action="#" method="POST">
            <input type="email" name="username" placeholder="Entrez votre nom d'utilisateur">

            <input type="password" name="password" placeholder="Entrez votre mot de passe">

            <button type="submit">Se connecter</button>

        </form>
    </div>
</body>
</html>