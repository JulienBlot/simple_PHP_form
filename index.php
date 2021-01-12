<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Form in PHP</title>
    <!-- We could insert more metadata here-->
</head>

<body>

    <form method="post" action="target.php">
        <!-- use the POST method to not have the restrictions of the GET (data to be sent to the server is written directly in the URL) as well as to ensure the necessary confidentiality and more flexibility -->

        <p>
            <label for="prenom"> Enter your first name: </label>
            <input type="text" name="prenom" id="prenom" /> <!-- the name prenom will be the key, and the value associated with this key will be the value sent by the user --> 
        </p>

        <p>
            <input type="submit" value="Submit" />
        </p>

    </form>

</body>

</html>
