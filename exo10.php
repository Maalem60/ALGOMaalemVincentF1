<?php
// Fonction pour générer les champs de texte
function afficherInput($nomsInput)
{
    foreach ($nomsInput as $nom) {
        echo '<label>' . htmlspecialchars($nom) . ' :</label><br>';
        echo '<input type="text" name="' . strtolower($nom) . '" required><br><br>';
    }
}

// Fonction pour générer des boutons radio
function afficherRadio($nomsRadio)
{
    foreach ($nomsRadio as $valeur) {
        echo '<label>';
        echo '<input type="radio" name="sexe" value="' . strtolower($valeur) . '" required> ' . htmlspecialchars($valeur);
        echo '</label><br>';
    }
}

// Fonction pour générer une liste déroulante
function alimenterListeDeroulante($elements)
{
    echo '<label>Formation :</label><br>';
    echo '<select name="formation">';
    foreach ($elements as $formation) {
        echo '<option value="' . strtolower($formation) . '">' . htmlspecialchars($formation) . '</option>';
    }
    echo '</select><br><br>';
}

// Liste des champs, options et formations
$nomsInput = ["Nom", "Prénom", "Adresse e-mail", "Ville"];
$nomsRadio = ["Homme", "Femme"];
$formations = ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Formulaire complet</title>
</head>

<body>
    <form method="POST">
        <?php
        // Générer les champs de texte
        afficherInput($nomsInput);

        // Générer les boutons radio
        echo '<label>Sexe :</label><br>';
        afficherRadio($nomsRadio);
        echo '<br>';

        // Générer la liste déroulante
        alimenterListeDeroulante($formations);
        ?>

        <!-- Bouton pour soumettre -->
        <button type="submit">Envoyer</button>
    </form>
</body>

</html>