<?php

$domicile = $_POST['domicile'];
$equipeAd = $_POST['equipeAdverse'];
$date = $_POST['dateM'];
$heure = $_POST['heure'];

if(isset($_POST['SaisiMatch'])){
	try {
		$linkpdo = new PDO("mysql:host=localhost;dbname=projetphp", 'root', '');
		}
		catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}

        $reqInsert = $linkpdo->prepare('INSERT INTO partie(domicile, equipeAdverse, dateM, heure)
        VALUES (:domicile, :equipeAdverse, :dateM, :heure)');

        if ($reqInsert == false){
            die ('erreur du linkpdo');
        }
        $reqIns2 = $reqInsert ->execute(array(
            'domicile' => $domicile,
            'equipeAdverse' => $equipeAd,
            'dateM' => $date,
            'heure' => $heure,
            ));

            header("Location:feuille.php");
    
        $reqSelect = $linkpdo->prepare("SELECT photo,taille,poids,posteprefere,commentaire FROM joueur WHERE statut = 'actif'");
        $req =$reqSelect->execute(array());
        $read = true;
        

        if ($reqIns2 == false){
            $reqInsert->debugDumpParams();
            die ('erreur de execute');
        }
        
}

?>