<h1>Exercie 2 Tableau</h1>
<p>Soit le tableau suivant : <code>$capitales = ["France"=>"Paris", "Allemagne"=>"Berlin", "USA"=>"Washinton", "Italie"=>"Rome"];</code><br>
    Réaliser un algorithme permettant d'afficher le tableau HTML suivant (notez que nom du pays s'affichera en minuscule <br>et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.</p>

<h2>Résultats</h2>
<table border=5>
    <!--entete du tableau-->
    <thead>
        <tr>
            <th>pays</th>
            <th>Capitales</th>
        </tr>
    </thead>
    <!--Corps du tableau-->
    <tbody>
        <tr>
            <td>France</td>
            <td>Paris</td>
        </tr>
        <tr>
            <td>Allemagne</td>
            <td>Berlin</td>
        </tr>
        <tr>
            <td>USA</td>
            <td>Washinton</td>
        </tr>
        <tr>
            <td>Italie</td>
            <td>Rome</td>
        </tr>
    </tbody>
</table>


<?php
$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washinton",
    "Italie" => "Rome",
];
//foreach ($capitales as $pays => $capitale) {
//  echo "$pays a pour capitale : $capitale<br>";
//}
echo afficherTableHTML($capitales);

function afficherTableHTML($capitales)
{
    ksort($capitales);
    $result = "<table border=5>
    <!--entête du tableau-->
    <thead>
        <tr>
            <th>pays</th>
            <th>Capitales</th>
        </tr>
    </thead>
    <!--Corps du tableau-->
    <tbody>";
    foreach ($capitales as $pays => $capitale) {
        $result .= "<tr>
                  <td>" . mb_strtoupper($pays) . "</td>;
                  <td>" . ucfirst($capitale) . "</td>;
    </tr>";
    }
    $result .= "</tbody></table>";
    return $result;
}
?>