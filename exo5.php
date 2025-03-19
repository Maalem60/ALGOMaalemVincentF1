<?php
function afficherInputs(array $nomsInput = ["Non défini"])
{
    $result = "<form action='#' method='POST'>";
    foreach ($nomsInput as $input) {
        $minInput = mb_strtolower($input);
        $result .= "<label for='$minInput'>$input</label>

    <input type='text' name='$minInput' id='$minInput'>
    ";
    }
    $result .= "
</form>";
    return $result;
}

$nomsInput = ["Nom", "Prenom", "CP", "Ville", "Pays"];
echo afficherInputs($nomsInput);
