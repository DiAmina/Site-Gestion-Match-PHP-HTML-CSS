<?php

$nom = $_POST['nom'];
$prenom = $_POST ['prenom'];
$dnaissance = $_POST['dnaissance'];
$poids = $_POST['poids'];
$taille = $_POST['taille'];
$posteprefere = $_POST['posteprefere'];
$statut = $_POST['statut'];
$photo = $_POST ['photo'];

if(isset($_POST['valider'])){
	
	try {
		$linkpdo = new PDO("mysql:host=localhost;dbname=projetphp", 'root', '');
		}
		catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
			}
			$req = $linkpdo->prepare('INSERT INTO joueur(nom, prenom, dnaissance, poids, taille, posteprefere, statut, photo)
 			VALUES(:nom, :prenom, :dnaissance, :poids, :taille, :posteprefere, :statut, :photo)');

			if ($req == false){
				die ('erreur du linkpdo');
			}
            $req2= $req ->execute(array(
				'nom' => $nom,
				'prenom' => $prenom,
                'photo' => $photo,
				'dnaissance' => $dnaissance,
				'poids' => $poids,
                'posteprefere' => $posteprefere,
				'taille' => $taille,
                'statut' => $statut
				));

				header("Location:accueil.php");
				
				if ($req2 == false){
					$req->debugDumpParams();
					die ('erreur de execute');
                }
}	
?>