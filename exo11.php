<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Bouton Date en Toutes Lettres</title>
    <style>
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <button onclick="afficherDate()">Afficher la date</button>
    <p id="date"></p>

    <script>
        function afficherDate() {
            // Définition des jours et des mois en français
            var jours = ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"];
            var mois = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"];

            // Récupération de la date actuelle
            var aujourd'hui = new Date();
            var jourSemaine = jours[aujourd'hui.getDay()];
                    var jour = aujourd'hui.getDate();
                    var moisNom = mois[aujourd'hui.getMonth()];
                        var annee = aujourd'hui.getFullYear();

                        // Création de la date en toutes lettres
                        var dateEnToutesLettres = jourSemaine + " " + jour + " " + moisNom + " " + annee;

                        // Affichage dans l'élément avec l'id "date"
                        document.getElementById("date").innerText = dateEnToutesLettres;
                    }
    </script>

</body>

</html>


<?php


echo formaterDateFrIntlDateFormatter();
echo formaterDateFrIntlDateFormatter("2010-04-08");

function formaterDateFrIntlDateFormatter(string $date = "now")
{
    $fmt = new IntlDateFormatter(
        'de_DE', // permet de définir la locale
        IntlDateFormatter::FULL, // format de la date (FULL, MEDIUM, SHORT, NONE)
        IntlDateFormatter::FULL, // format de l'heure (FULL, MEDIUM, SHORT, NONE)
        'Europe/Paris', // fuseau horaire
        IntlDateFormatter::GREGORIAN, // type de calendrier
        'EEEE d MMMM Y'
    ); // format d'affichage
    $d = new DateTime($date);
    $d = $fmt->format($d) . "
";
    return $d;
}
