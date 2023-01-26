<?php
try {
    $linkpdo = new PDO("mysql:host=localhost;dbname=projetphp", 'root', '');
    }
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

$req = $pdo->prepare("SELECT * FROM partie");
$req->execute(array());
echo count($req);

?>