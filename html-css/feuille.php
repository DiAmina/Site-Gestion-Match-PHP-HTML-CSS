<?php
$read  = false;
$domicile = $_POST['domicile'];
$equipeAd = $_POST['equipeAdverse'];
$date = $_POST['dateM'];
$heure = $_POST['heure'];


if(isset($_POST['joueurAct'])){
	try {
		$linkpdo = new PDO("mysql:host=localhost;dbname=projetphp", 'root', '');
		}
		catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}

$req = $linkpdo->prepare("SELECT * FROM joueur WHERE statut = 'actif'");
$req->execute(array());
$read = true;

$reqInsert = $linkpdo->prepare('INSERT INTO partie(domicile,equipeAdverse,dateM,heure)
    VALUES (:domicile, :equipeAdverse, :dateM, :heure)');

}

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
        <form method="post" action="">
    <div class="row mb-3">
        <div class="col">
            Date du match<input type="date" class="form-control form-control-sm" name="dateM" value="" placeholder="" required><br>                
        </div>
        <div class="col">
            Heure du match<input type="time" class="form-control form-control-sm" name="heure" value="" placeholder="" required><br>                
        </div>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
        <label class="form-check-label" for="inlineRadio1">A domicile</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
        <label class="form-check-label" for="inlineRadio2">Extérieur</label>
    </div>
    <br></br>
    <input class="btn btn-primary" type="button" name="joueurAct" value="Joueurs actifs" >
         <br></br>
        <table class="table">
            <thead >
                <th>Photo</th>
                <th>Taille</th> 
                <th>Poids</th>
                <th>Poste préféré</th>
                <th>Commentaires</th>
                <th>Evaluation entraineur</th>
            </thead>
            <tbody>
                <?php 
                if($read ==true){
                    while($donnes = $req->fetch()){
                    echo'<tr>
                        <td>'.$donnees['photo'].'</td>
                        <td>'.$donnees['taille'].'</td>
                        <td>'.$donnees['poids'].'</td>
                        <td>'.$donnees['posteprefere'].'</td>
                        <td>'.$donnees['commentaire'].'</td>
                        <td>'.$donnees['performance'].'</td>
                        </tr>';
                    }
                }
                ?>
            </tbody> 
        </table>
        <input class="btn btn-outline-primary" type="button" value="Précedent">
        </form>
    </div>
</body>
</html>