

<?php
function genererInbox($elements)
{
    foreach ($elements as $label => $checked) {
        // Si $checked vaut true, on coche la case, sinon elle reste décochée
        $isChecked = $checked ? "checked" : "";
        echo '<label>';
        echo '<input type="checkbox" ' . $isChecked . '> ' . htmlspecialchars($label);
        echo '</label><br>';
    }
}

// Exemple d'utilisation
$elements = [
    "Choix 1" => true,  // Case cochée
    "Choix 2" => false, // Case non cochée
    "Choix 3" => true   // Case cochée
];

genererInbox($elements);
?>
