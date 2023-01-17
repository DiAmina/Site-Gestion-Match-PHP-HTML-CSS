<!DOCTYPE html>
<html>
<head>
    <title>La composition de l'équipe de football</title>
</head>
<body>
    <h1>La composition de l'équipe de football</h1>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Poste</th>
        </tr>
        <?php
        // Récupération des joueurs actifs depuis la base de données
        $joueurs = array(
            array('nom' => 'Dupont', 'prenom' => 'Jean', 'poste' => 'Gardien de but'),
            array('nom' => 'Durand', 'prenom' => 'Marie', 'poste' => 'Défenseur'),
            array('nom' => 'Martin', 'prenom' => 'Luc', 'poste' => 'Milieu de terrain'),
            array('nom' => 'Petit', 'prenom' => 'Julie', 'poste' => 'Attaquant'),
        );

        // Affichage des joueurs dans le tableau
        foreach ($joueurs as $joueur) {
            echo "<tr>";
            echo "<td>" . $joueur['nom'] . "</td>";
            echo "<td>" . $joueur['prenom'] . "</td>";
            echo "<td>" . $joueur['poste'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <div style="width:100%;height:10px;border-top:1px solid #000;"></div>
    <div style="display:flex;">
        <div style="width:50%;">
            <h2>Terrain de football</h2>
            <div style="display:flex;">
                <div>
                    Gardien de but :<br>
                    <input type="text" name="gardien" id="gardien"><br>
                    Défenseurs :<br>
                    <input type="text" name="defenseur1" id="defenseur1"><br>
                    <input type="text" name="defenseur2" id="defenseur2"><br>
                    <input type="text" name="defenseur3" id="defenseur3"><br>
                    Milieux de terrain :<br>
                    <input type="text" name="milieu1" id="milieu1"><br>
                    <input type="text" name="milieu2" id="milieu2"><br>
                    <input type="text" name="milieu3" id="milieu3"><br>
                </div>
                <div>
                    <img src="football-field.png" alt="Terrain de football" style="width:200px;">
                </div>
                <div>
                    Attaquants :<br>
                    <input type="text" name="attaquant1" id="atta