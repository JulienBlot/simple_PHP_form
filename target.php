<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Target PHP</title>
    <!-- We can have other metadata here -->
</head>

<body>
    
    <?php 
             $prenom = ""; 
        
            function security($donnees){
                 $donnees =  strip_tags($donnees); //strip_tags — Remove HTML and PHP tags from a string
                 $donnees =  stripcslashes($donnees); //stripslashes -  Remove all backslashes
                 $donnees =  trim($donnees); //trim — Remove spaces (or other characters) at the start and end of the string
                return $donnees;
            }
                 
                 
        $prenom = security($_POST['prenom']); 
        
        echo 'Hello ' .$prenom. '<br/>';
        
        
        
        ?>


    <p> Click <a href="index.php"> here</a> to be able to type your first name again</p>
</body>

</html>
