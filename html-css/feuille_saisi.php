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

        $reqInsert = $linkpdo->prepare('INSERT INTO partie(domicile,equipeAdverse,dateM,heure)
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

            if ($reqIns2 == false){
                $reqInsert->debugDumpParams();
                die ('erreur de execute');
            }
        /*
        $req = $linkpdo->prepare("SELECT * FROM joueur WHERE statut = 'actif'");
        $req->execute(array());
        $read = true;
        */
}

?>