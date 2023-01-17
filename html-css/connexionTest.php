<?php
$login = $_POST['login'];
$password = $_POST['password'];
$_SESSION ='';

var_dump($login);
var_dump($password);
$passwordHacher = hash("sha256",$password);
if(isset($_POST['connecter'])){
	try {
		$linkpdo = new PDO("mysql:host=localhost;dbname=projetphp", 'root', '');
		}
	catch (Exception $e) {
    	die('Erreur : ' . $e->getMessage());
		}
    $req = $linkpdo->prepare('SELECT IdUser FROM sessioncoach where login = ? And $storedPasswordHacher = ?');
    $req->execute($login, $passwordHacher);
    if($req->rowCount() != 0){
        echo ('connecter');
        $_SESSION = true;
        }else{
            die ('Mot de passe incorrect !');
        }
}

if ($_SESSION) {
    header('Location: accueil.php');
} else {
    echo "Echec de connexion. VÃ©rifiez vos identifiants.";
}

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<link rel="stylesheet" href="">
		<meta charset="utf-8">
		<title>Formulaire de connexion</title>
        <link rel="stylesheet" href="style4.css">
		
	</head>
	<body>
        <section>
            <h1> Connexion</h1>
        <form action="#" method="POST">
            Login<input type="text" name="login" value=""required>
            Mdp<input type="password" name="password" value=""required>
            <button type="submit" value="connecter">Connexion</button> 
        </form>
    </body>
    </html>