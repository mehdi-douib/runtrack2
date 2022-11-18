<!DOCTYPE html>
<html>
<body>
<form  method="get">
    <label for="nom"> Quel est votre nom: </label>
    <input type= "text" name="nom" id="non">
    <br>

    <label for="prenom"> Quel est votre prenom: </label>
    <input type= "text" name="prenom" id="prenom">
    <br>
    
    <input type="submit" value="Envoyer !">
    </body>
    </html>
 <?php

echo '<table border=5>;
<thead>
<tr>
 <th>Argument</th>
 <th> valeur</th>
</tr>
</thead>';

foreach($_GET as $variable => $value) {
    echo '<tr>
  <td>'.$variable.'</td> <td>'.$value.'</td>
  </tr>';

}

?>


