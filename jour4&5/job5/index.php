<!DOCTYPE html>
<html>
<body>
<form  method="POST">
    <label for="username"> username: </label>
    <input type= "text" name="username" id="username">
    <br>

    <label for="password"> password </label>
    <input type= "password" name="password" id="password">
    <br>
    
    <input type="submit" value="Envoyer !">
</form>
    </body>
    </html>
    <?php
if (isset($_POST['username']) &&  ($_POST['password'])){

if($_POST['username']   == 'John'  || $_POST['password']  == 'rambo') {
  echo "C est pas ma guerre";
}
else {
  echo "Votre pire cauchemar";
}
}

 ?>
