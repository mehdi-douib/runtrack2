
<?php session_start();
if (isset($_POST['reset'])){
      session_destroy();
      header('Location: .');
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form method="POST" >
      <input name="prenom" type="text">
      <input name="Envoyer" type="submit" value="Envoyer">
      <input name="reset" type="submit" value="reset">
</form>
<?php

if (isset($_POST['prenom'])){
      $_SESSION['prenom'] =  $_SESSION['prenom'] . "<br><li>" . $_POST['prenom'] . "</li>";
      echo $_SESSION['prenom'];
}

?>
</body>
</html>