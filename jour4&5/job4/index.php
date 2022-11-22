<!DOCTYPE html>
<html>
<body>
<form  method="post">
    <label for="nom"> Quel est votre nom: </label>
    <input type= "text" name="Nom" id="non">
    <br>

    <label for="prenom"> Quel est votre prenom: </label>
    <input type= "text" name="Prenom" id="prenom">
    <br>
    
    <input type="submit" value="Envoyer !">
    </body>
    </html>
 <?php

echo '<table border=2>;
<thead>
<tr>
 <th>Argument</th>
 <th> valeur</th>
</tr>
</thead>';

foreach($_POST as $variable => $value) {
    echo '<tr>
  <td>'.$variable.'</td> <td>'.$value.'</td>
  </tr>';

}

?>
