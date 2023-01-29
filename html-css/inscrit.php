<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleInscription.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<title>Incription</title>
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
        <h3> Inscription d'un nouveau joueur</h3>
            <form method="post"  action="saisi_inscri.php">
				<div class="row mb-3">
                    <div class="col">
                       Nom <input type="text" class="form-control form-control-sm" name="nom" value="" placeholder="Nom" required><br>
                    </div>
                    <div clas="col">
                       Prenom <input type="text" class="form-control form-control-sm" name="prenom" value="" placeholder="Prénom" required> <br>
                    </div>
                </div>
                <div class="row mb-3">
                    <div clas="col">
					  Date de naissance  <input type="date" class="form-control form-control-sm" name="dnaissance" value="" placeholder="Date de naissance" required><br>
                    </div>
                    <div clas="col">
                      Poids  <input type="char3" class="form-control form-control-sm" name="poids" value="" placeholder="Poids en Kg" required><br>
                    </div>
                </div>
                       Taille <input type="char3" class="form-control form-control-sm" name="taille" value="" placeholder="Taille en cm" required><br>
                       Poste preferé <input type="text" class="form-control form-control-sm" name="posteprefere" value="" placeholder="Poste préferé" required><br>
                       Statut <input type="text" class="form-control form-control-sm" name="statut" value="" placeholder="Statut" required><br>
                       Photo <input type="file" class="form-control form-control-sm" name="photo" value="" placeholder="Photo" required><br>
                        <button type="reset" class="btn btn-outline-danger mb-2" value="vide">Vider</button>
                        <button type="submit" class="btn btn-outline-success mb-2" value="ok" name="valider" >Valider </button>
			           </div>
            </from>
    </div>
</body>
</html>