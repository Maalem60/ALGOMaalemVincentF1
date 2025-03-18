
<?php
$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome",
    "Espagne" => "Madrid"
];

echo afficherTableHTML($capitales);

function afficherTableHTML($capitales)
{
    // Trier le tableau par ordre alphabétique des capitales
    asort($capitales);

    $result = "<table border=1>
    <!-- En-tête du tableau -->
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitale</th>
            <th>Lien Wiki</th>
        </tr>
    </thead>
    <!-- Corps du tableau -->
    <tbody>";

    foreach ($capitales as $pays => $capitale) {
        $urlWiki = "https://fr.wikipedia.org/wiki/" . urlencode($capitale);
        $result .= "<tr>
                        <td>" . mb_strtoupper($pays) . "</td>
                        <td>" . ucfirst($capitale) . "</td>
                        <td><a href=\"$urlWiki\" target=\"_blank\">Lien</a></td>
                    </tr>";
    }

    $result .= "</tbody></table>";
    return $result;
}
?>
