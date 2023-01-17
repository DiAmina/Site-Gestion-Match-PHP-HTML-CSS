<?php
$numLicence = $_GET['var1'];
(array)$modifications = array();
(array) $apres_modifications = array();


try {
    $linkpdo = new PDO("mysql:host=localhost;dbname=projetphp", 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


$req = $linkpdo->prepare('SELECT * FROM joueur WHERE nLicence = :nLicence');
$reqN = $req->execute(array('nLicence' => $numLicence));
while ($donneesAff = $req->fetch()) {
    # code...
    $nom = $donneesAff['nom'];
    $prenom = $donneesAff['prenom'];
    $dnaissance = $donneesAff['dnaissance'];
    $poids = $donneesAff['poids'];
    $taille = $donneesAff['taille'];
    $posteprefere = $donneesAff['posteprefere'];
    $statut = $donneesAff['statut'];
    /**$photo = $donneesAff['photo'];*/
}
$req->closeCursor();

$modifications = array('nom'=> $nom,
                        'prenom'=> $prenom,
                        'dnaissance'=> $dnaissance,
                        'poids' => $poids,
                        'taille'=> $taille,
                        'posteprefere'=> $posteprefere,
                        'statut'=> $statut,
                        /**'photo'=> $photo*/
                    );

if (isset($_POST['modifier'])) {
    foreach ($modifications as $index=>$val){
        if ($modifications[$index] != $_POST[$index]){
            $apres_modifications[$index] = $_POST[$index];
            $modifications[$index] = $apres_modifications[$index];
        }
    }
    $requete = 'UPDATE joueur SET ';
    foreach ($apres_modifications as $index=>$val){
        if (gettype($val) == 'string'){
            $requete .= $index.' = '."'".$val."'".', ';
        }else{
            $requete .= $index.' = '. $val .', ';
        }
    }
    $requete[-2] = ' ';
    $requete.= 'WHERE nLicence = ' . $numLicence;
    echo $requete;
    $reqUpdate = $linkpdo->prepare($requete);
    if ($reqUpdate == false) {
        //$linkpdo->debugDumpParams();
        die('erreur de prepare');
    }

    $reqUpdate->execute();
    if ($reqUpdate == false){
        $req->debugDumpParams();
        die('erreur de execute');
    }
    /*
    if ($req2 == false) {
        $req->debugDumpParams();
        die('erreur de execute');
        <!--<input type="file" class="form-control form-control-sm" name="photo" value="<?=$modifications['phtoto']?>" placeholder="Photo"><br>-->                    
    }
    */
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="modif.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Modif infos</title>
</head>

<body>
    <div class="container center_div">
        <div class="container">
            <a href="accueil.php" class="back_button"><img src="img/fleche-gauche.png">Retour</a>
            <h4> Modification</h4>
            <form method="post" action="">
                <div class="form-row align-items-center">
                    <div class="col">
                        <input type="text" class="form-control form-control-sm" name="nom" value="<?=$modifications['nom']?>" placeholder="Nom" required><br>
                        <input type="text" class="form-control form-control-sm" name="prenom" value="<?=$modifications['prenom'] ?>" placeholder="Prénom" required> <br>
                        <input type="date" class="form-control form-control-sm" name="dnaissance" value="<?= $modifications['dnaissance'] ?>" placeholder="Date de naissance" required><br>
                        <input type="char3" class="form-control form-control-sm" name="poids" value="<?= $modifications['poids']?>" placeholder="Poids en Kg" required><br>
                        <input type="char3" class="form-control form-control-sm" name="taille" value="<?= $modifications['taille']?>" placeholder="Taille en cm" required><br>
                        <input type="text" class="form-control form-control-sm" name="posteprefere" value="<?= $modifications['posteprefere']?>" placeholder="Poste préferé" required><br>
                        <input type="text" class="form-control form-control-sm" name="statut" value="<?= $modifications['statut'] ?>" placeholder="Statut" required><br>
                        <button type="submit" class="btn btn-outline-success mb-2" value="ok" name="modifier">Modifier</button>
                        <button type="reset" class="btn btn-outline-danger mb-2" value="vide">Vider</button>
                    </div>
                </div>
                </from>
        </div>
    </div>
</body>

</html>
