<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Target PHP</title>
    <!-- On peut avoir d'autres méta-données ici -->
</head>

<body>
    
    <?php 
             $prenom = ""; 
        
            function securite($donnees){
                 $donnees =  strip_tags($donnees); //strip_tags — Supprime les balises HTML et PHP d'une chaîne 
                 $donnees =  stripcslashes($donnees); //stripslashes -  Supprime tous les antislashs
                 $donnees =  trim($donnees); //trim — Supprime les espaces (ou d'autres caractères) en début et fin de chaîne 
                return $donnees;
            }
                 
                 
        $prenom = securite($_POST['prenom']); 
        
        echo 'Bonjour ' .$prenom. '<br/>';
        
        
        
        ?>


    <p> Clique <a href="index.php"> ici</a> pour pouvoir retaper ton prénom</p>
</body>

</html>
