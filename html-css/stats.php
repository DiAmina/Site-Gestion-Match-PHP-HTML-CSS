<?php


try {
    $linkpdo = new PDO("mysql:host=localhost;dbname=projetphp", 'root', '');
    }
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

   echo'nombre de match total'; $reqMachtoto =$linkpdo->prepare('SELECT COUNT * FROM partie');
    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styleacc.css">
    <title>Statistique</title>
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
    <div class="row mb-3">
            <div class="col">
    Nombre tatal de match <input type="text" class="form-control form-control-sm" name="" value="<?=$reqMachtoto?>"  disabled/><br>                            
            </div>               
            <div class="col"> 
    Pourcentage de match gagnés <input type="text" class="form-control form-control-sm" name="" value=""  disabled/><br> 
            </div>      
            <div class="col">           
    Pourcentage de match perdus <input type="text" class="form-control form-control-sm" name="" value=""  disabled/><br>                
            </div> 
            <div class="col"> 
    Nom équipe adverse<input type="text" class="form-control form-control-sm" name="" value=""  disabled/><br>                
            </div> 
    </div>

    <div class="table-responsive-md table-bordered">
        <table class="table table-dark table-hover table-bordered">
            <thead >
                <th>Nom</th>
                <th>Prenom</th>
                <th>Statut</th> 
                <th>Nb total titulaire</th>
                <th>Nb total remplçant</th>
                <th>pourcentage de match gagnée</th>

        </thead>
</body>
</html>