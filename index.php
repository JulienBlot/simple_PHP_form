<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Formulaire en PHP</title>
    <!-- We could insert more metadata here-->
</head>

<body>

    <form method="post" action="target.php">
        <!-- employer la méthode POST pour ne pas avoir les restrictions du GET (données à envoyer au serveur sont écrites directement dans l'URL) ainsi que d'assurer la confidentialité nécessaire et davantage de flexibilité -->

        <p>
            <label for="prenom"> Enter your first name: </label>
            <input type="text" name="prenom" id="prenom" /> <!-- le name prénom sera la clé, et la valeur associée à cette clé sera la valeur envoyée par l'utilisateur --> 
        </p>

        <p>
            <input type="submit" value="Submit" />
        </p>

    </form>

</body>

</html>
