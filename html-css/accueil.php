<?php
$pdo = new PDO("mysql:host=localhost;dbname=projetphp", 'root', '');
            
$req = $pdo->query("SELECT * FROM joueur ORDER BY Nom ASC")->fetchAll();
//echo count($req);
//if (query($req)==0){
    //echo"Il n'y a pas encore de joueurs ajouter !";

//}

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <link rel="stylesheet" href="">
    <meta charset="utf-8">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styleacc.css">

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
                <li><a href="#">Déconnexion</a></li>
            </ul>
        </nav>
    </header>
</body>
<div class="table-responsive-md table-bordered">
    <table class="table table-dark table-hover table-bordered">
        <thead>
            <th>Numéro Licence</th>
            <th>Photo </th>
            <th>Nom </th>
            <th>Prénom</th>
            <th>Date naissance </th>
            <th>Taille cm </th>
            <th>Poids Kg</th>
            <th>Poste </th>
            <th>Statut</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </thead>
        <tbody>
            <?php foreach($req as $req): ?>
            <tr>
                <td><?= $req['nLicence']?></td>
                <td><?= $req['photo']?></td>
                <td><?= $req['nom']?></td>
                <td><?= $req['prenom']?></td>
                <td><?= $req['dnaissance']?></td>
                <td><?= $req['taille']?></td>
                <td><?= $req['poids']?></td>
                <td><?= $req['posteprefere']?></td>
                <td><?= $req['statut']?></td>
                <td><a href="modifier.php?var1=<?=$req['nLicence']?>"><img src="img/stylo-a-bille.png"></a></td>
                <td><a href="supprimer.php?var1=<?=$req['nLicence']?>"><img src="img/corbeille-rouge.png"></a></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

</html>