<?php

//lancer la requete pour supprimer
try {
        $linkpdo = new PDO("mysql:host=localhost;dbname=projetphp",'root','');
        
    } catch (Exception $e) {
        die("Erreur : ".$e->getMessage());
        
    }
    //recupere le numero de licence qui nous sert de clé primaire
    (int)$numLicence = $_GET['var1'];

    //requete
    $requete = 'DELETE FROM joueur WHERE nLicence = ';
    $requete .= $numLicence;
    /**if(isset($_POST['supprimer'])){*/
        $reqSup = $linkpdo->prepare($requete);
        $reqSup->execute();
        header("location:accueil.php");
    
?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Confirmation de suppresion</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4 offset-md-4 jumbotron mt-3 text-center">
                <form action="accueil.php"  method="post" class="border border-danger" class="rounded">
                    <p>Je confirme vouloir supprimer le joueur ainsi que ses données</p>
                    <button type="submit" class="btn btn-outline-success mb-2" value="supprimer" name="supprimer">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
    -->
