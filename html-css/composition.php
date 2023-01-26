<?php

try {
    $linkpdo = new PDO("mysql:host=localhost;dbname=projetphp", 'root', '');
    }
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $reqMatch = $linkpdo->prepare ('SELECT * from partie');
    $req = $reqMatch->execute(array());
    $read = true;      

/*$reqMatch = $linkpdo->query("SELECT * FROM partie")->fetchAll();
echo count($req);
//if (query($req)==0){
    //echo"Il n'y a pas encore de joueurs ajouter !";

}
*/

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<link rel="stylesheet" href="">
		<meta charset="utf-8">
		<title>Feuille de match</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="styleacc.css">
        <body>
            <header>
                <nav>
                    <ul>
                        <li><a href="accueil.php"><img src="img/voley.png">VolleyClub</a></li>
                        <li><a href="inscrit.php">Inscription joueur</a></li>
                        <li><a href="feuille.php">Feuille de match</a></li>
                        <li><a href="composition.php">Composition match</a></li>
                        <li><a href="stats.php">Statistique</a></li>   
                        <li class="buttonDeco"><a href="connexion.php">Déconnexion</a></li>
                    </ul>
                </nav>
            </header>
	</head>
    <div class="table-responsive-md table-bordered">
        <table class="table table-dark table-hover table-bordered">
            <thead >
                <th>Date</th>
                <th>Heure</th>
                <th>Lieu</th> 
                <th>Match</th>
                <th>Modifier</th>

        </thead>
        <tbody>
            <?php 
            if ($read == true){
                while($donnees = $reqMatch->fetch()){
                    echo'<tr>
                    <td>'.$donnees['dateM'].'</td>
                    <td>'.$donnees['heure'].'</td>
                    <td>'.$donnees['domicile'].'</td>
                    <td>'.$donnees['equipeAdverse'].'</td>
                    <td>'.'<a href="modifierMatch.php?var3='.$donnees['IdMatch'].'">Modifier</a>'.'</td>
                    </tr>';
                }
            }
            ?>
            
    </body>
    </html>