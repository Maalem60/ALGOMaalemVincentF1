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

        <input type="checkbox" name="couleur[]" value="jaune"> Developpeur Logiciel<br>
        <input type="checkbox" name="couleur[]" value="bleu"> Designer web<br>
        <input type="checkbox" name="couleur[]" value="vert"> Chef de Projet<br>

        <input type="submit" value="Envoyer">
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = htmlspecialchars(trim($_POST['nom']));
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $email = htmlspecialchars(trim($_POST['email']));
    $ville = htmlspecialchars(trim($_POST['ville']));
    $sexe = htmlspecialchars(trim($_POST['sexe']));

    // Validation des données
    if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($ville) && !empty($sexe)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if ($sexe == "M" || $sexe == "F") {
                // Traitement des données (par exemple, les envoyer par email)
                $to = "votre-email@example.com";
                $subject = "Nouveau message de $nom";
                $body = "Nom: $nom\nPrenom: $prenom\nEmail: $email\nVille: $ville\nSexe: $sexe";
                $headers = "From: $email";

                if (mail($to, $subject, $body, $headers)) {
                    echo "Message envoyé avec succès.";
                } else {
                    echo "Erreur lors de l'envoi du message.";
                }
            } else {
                echo "Le sexe doit être 'M' ou 'F'.";
            }
        } else {
            echo "Adresse email invalide.";
        }
    } else {
        echo "Tous les champs sont requis.";
    }
} else {
    echo "Méthode de requête non autorisée.";
}
?>