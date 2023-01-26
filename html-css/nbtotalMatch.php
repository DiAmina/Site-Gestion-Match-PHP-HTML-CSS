<?php
try {
    $linkpdo = new PDO("mysql:host=localhost;dbname=projetphp", 'root', '');
    }
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

$req = $linkpdo->prepare("SELECT * FROM partie");
$req = $reqMatch->execute(array());
echo count($req);
if (prepare($req)==0){
    echo'Il n y a pas encore de joueurs ajouter !';

}

?>