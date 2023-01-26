<?php

$domicile = $_POST['domicile'];
$equipeAd = $_POST['equipeAdverse'];
$date = $_POST['dateM'];
$heure = $_POST['heure'];

try {
    $linkpdo = new PDO("mysql:host=localhost;dbname=projetphp", 'root', '');
    }
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $reqRecupe =$linkpdo->prepare('SELECT * FROM partie WHERE idMatch = :idMatch');
    $reqRecupe->execute(array(
   'equipeAdverse'=> $equipeAd,
        'dateM' => $date,
        'heure'=> $heure
    ));

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feuille de match</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styleacc.css"/>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="accueil.php"><img src="img/voley.png">VolleyClub</a></li>
                <li><a href="inscrit.php">Inscription joueur</a></li>
                <li><a href="feuille.php">Feuille de match</a></li>
                <li><a href="composition.php">Composition match</a></li>
                <li><a href="stats.php">Statistique</a></li>   
                <li><a href="connexion.php">Déconnexion</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h3>Feuille de match</h3>
        <form method="post" action="feuille_saisi.php">
        <div class="row mb-3">
            <div class="col">
            Domicile ou extérieur<select class="form-control form-control-sm" name="domicile">
                <option>Domicile</option>
                <option>Extérieur</option>
            </select>
            </div>
            <div class="col">
                Nom équipe adverse<input type="text" class="form-control form-control-sm" name="equipeAdverse" value="" placeholder="" required><br>                
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
            Date du match<input type="date" class="form-control form-control-sm" name="dateM" value="" placeholder="" required><br>                
            </div>
            <div class="col">
            Heure du match<input type="time" class="form-control form-control-sm" name="heure" value="" placeholder="" required><br>                
            </div>
            <div class="col">
            Resultat<input type="text" class="form-control form-control-sm" name="resultat" value="" placeholder="" required><br>                
        </div>
        </div>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <input class="btn btn-primary" type="submit" name="ModifierMatch" value="Enregistrer">
            </div>
        </div>
        </form>
    </div>
</body>
</html>