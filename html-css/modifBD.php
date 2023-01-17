<?php
$nom = $_POST['nom'];
$prenom = $_POST ['prenom'];
$dnaissance = $_POST['dnaissance'];
$poids = $_POST['poids'];
$taille = $_POST['taille'];
$posteprefere = $_POST['posteprefere'];
$statut = $_POST['statut'];
$photo = $_POST ['photo'];
$numLicence = $_GET['var1'];

if(isset($_POST['modifier'])){
	
	try {
		$linkpdo = new PDO("mysql:host=localhost;dbname=projetphp", 'root', '');
		}
		catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
			}
			$req = $linkpdo->prepare('SELECT * FROM joueur WHERE nLicence = $numLicence');
			$donnees = $req-> fetch();
			
			$reqUpdate = $linkpdo->prepare('UPDATE joueur SET nLicence = $numLicence,nom = :nvnom, 
			prebom = :nvprenom,dnaissance = :nvdnaissance,poids = :nvpoids,taille = :nvtaille,
			posteprefere = :nvposteprefere,statut = :nvstatut,photo = :nvphoto');

			$reqUp=$reqUpdate->execute(array('nLicence' => $numLicence,'nvnom' =>'$nom','nvprenom' =>'$prenom','nvdnaissance' =>'$dnaissance',
			'nvpoids' =>'$poids','nvtaille' =>'$taille','nvposteprefere' =>'$posteprefere','nvstatut' =>'$statut','nvphoto' =>'$photo'));
			
            
				if ($req2 == false){
					$req->debugDumpParams();
					die ('erreur de execute');
                }
			
			}
			/**if(isset($_POST['return'])){
				extract($_POST);
    			header("location: accueil.php");
				
			}**/
?>