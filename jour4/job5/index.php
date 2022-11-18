<!DOCTYPE html>
<html>
<body>
<form  method="POST">
    <label for="username"> username: </label>
    <input type= "text" name="username" id="username">
    <br>

    <label for="passwor"> password </label>
    <input type= "text" name="password" id="password">
    <br>
    
    <input type="submit" value="Envoyer !">
</form>
    </body>
    </html>
    <?php
if (isset($_POST['username']) && isset($_POST['password'])){

if($_POST['username']   == 'John'  || $_POST['password']  == 'rambo') {
  echo "C est pas ma guerre";
}
else {
  echo "Votre pire cauchemar";
}
}

 ?>
