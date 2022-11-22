<!DOCTYPE html>
<html>
<body>
<form  method="GET">
    <label for="nom"> Quel est votre nom: </label>
    <input type= "text" name="non" id="non">
    <br>

    <label for="prenom"> Quel est votre prenom: </label>
    <input type= "text" name="prenom" id="prenom">
    <br>
    <label for="age"> Quel est votre age: </label>
    <input type= "text" name="age" id="age">
    <br>
    <input type="submit" value="Envoyer !">
    
</form>
</body>

</html>

<?php

$a=0;
foreach ($_GET as $var ) {
    $a = $a+1;
}
    echo "Le nombre dargument GET envoye est: $a";
    ?>