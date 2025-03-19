<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Formulaire de Contact</title>
</head>

<body>
    <h2>Formulaire de Contact</h2>
    <form action="traitement.php" method="post">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Prenom:</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="ville">Ville:</label>
        <input type="text" id="ville" name="ville" required><br><br>

        <label for="sexe">Sexe:</label>
        <input type="text" id="sexe" name="sexe" required><br><br>

        <input type="radio" name="couleur[]" value="jaune"> Developpeur Logiciel<br>
        <input type="radio" name="couleur[]" value="bleu"> Designer web<br>
        <input type="radio" name="couleur[]" value="vert"> Chef de Projet<br>

        <input type="submit" value="Envoyer">
    </form>
</body>

</html>