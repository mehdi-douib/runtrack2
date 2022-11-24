
<!DOCTYPE html>
<html>
<body>
<form  method="POST" >
      <input name="button" type="submit" value="reset">
</form>
</body>
</html>

<?php
if (!isset($_COOKIE) || isset($_POST['button'])){
      setcookie('nbvisites', '0');
      header('Location: .');
}
elseif (isset($_COOKIE['nbvisites']) || !isset($_POST['button'])){
      $a = $_COOKIE['nbvisites'];
      $a++;
      setcookie('nbvisites', (string)$a);     
}
echo $_COOKIE['nbvisites'];
?>

