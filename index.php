<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Formulaire en PHP</title>
    <!-- Nous pourrions insérer d'autres méta-données ici -->
</head>

<body>

    <form method="post" action="target.php">
        <!-- employer la méthode POST pour ne pas avoir les restrictions du GET (données à envoyer au serveur sont écrites directement dans l'URL) ainsi que d'assurer la confidentialité nécessaire et davantage de flexibilité -->

        <p>
            <label for="prenom"> Entrez votre prénom : </label>
            <input type="text" name="prenom" id="prenom" /> <!-- le name prénom sera la clé, et la valeur associée à cette clé sera la valeur envoyée par l'utilisateur --> 
        </p>

        <p>
            <input type="submit" value="Envoyer" />
        </p>

    </form>

</body>

</html>
