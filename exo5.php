<?php
function afficherInputDansTableau($nomsInput)
{
    echo '<table border="3" style="border-collapse: separate; width: 50%;">'; // Début du tableau avec bordure
    echo '<thead>';
    echo '<tr><th colspan="2" style="text-align: center;">Affichage</th></tr>'; // Titre du tableau
    echo '</thead>';
    echo '<tbody>';
    foreach ($nomsInput as $nomChamp) {
        echo '<tr>';
        echo '<td><label for="' . strtolower($nomChamp) . '">' . $nomChamp . ' :</label></td>'; // Nom du champ dans une cellule
        echo '<td><input type="text" name="' . strtolower($nomChamp) . '" id="' . strtolower($nomChamp) . '"></td>'; // Champ de texte dans une cellule
        echo '</tr>';
    }
    echo '<tr><td colspan="2" style="text-align: center;"><input type="submit" value="Envoyer"></td></tr>'; // Bouton dans une ligne dédiée
    echo '</tbody>';
    echo '</table>';
    echo '</form>'; // Fin du formulaire
}

// Exemple d'utilisation
$nomsInput = ["Nom", "Prénom", "Ville"];
echo '<form method="POST" action="">'; // Début du formulaire
afficherInputDansTableau($nomsInput);
echo '</form>'; // Encadrer le tableau avec un formulaire
