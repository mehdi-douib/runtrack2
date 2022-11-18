<!DOCTYPE html>
<html>
<body>
<form  method="POST">
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
    </body>
</form>

</html>

<?php

$a=0;
foreach ($_POST as $var ) {
    $a = $a+1;
}
    echo "Le nombre dargument POST envoyé est: $a";
    ?>