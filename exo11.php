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
            var jours = ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"];
            var mois = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"];

            var aujourd 'hui = new Date();
            var jourSemaine = jours[aujourd 'hui.getDay()];
                    var jour = aujourd 'hui.getDate();
                    var moisNom = mois[aujourd 'hui.getMonth()];
                        var annee = aujourd 'hui.getFullYear();

                        var dateEnToutesLettres = jourSemaine + " " + jour + " " + moisNom + " " + annee; document.getElementById("date").innerText = dateEnToutesLettres;
                    }
    </script>

</body>

</html>