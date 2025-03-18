<h1>Convertir Majuscules Rouge</h1>
<p>Créer une fonction personnalisée convertirMajRouge() permettant de <br>transformer une chaine de caratères passée en argument majuscules et en rouge.<br> Vous devrez appeler la fonction comme suit : convertirMajRpuge$texte</p>
<style>
    .red {
        color: red;
    }
</style>
<?php

$texte = "Mon texte en paramètres";
$texte2 = "Mon autre texte : pèche";

echo convertirMajRouge($texte);
echo convertirMajRouge($texte2);
echo convertirMajRouge2($texte);

echo convertirMajColor($texte2, "#fc33ff");


function convertirMajRouge($texte)
{
    $result = mb_strtoupper($texte); // converti en Majuscules, avec 
    $result = "<p class='red'> $result </p>";
    return $result;
}

function convertirMajRouge2($texte)
{
    return "<p class='red'>" . mb_strtoupper($texte) . "</p>";
}
function convertirMajColor($texte2, $color)
{
    return "<p style='color: $color'>" . mb_strtoupper($texte2) . "</p>";
}
?>