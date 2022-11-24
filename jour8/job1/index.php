<?php session_start() ?>

<!DOCTYPE html>
<html>
<body>
<form method="POST" >
      <input name="button" type="submit" value="reset">
</form>
<?php
if(isset($_SESSION['nbvisites'])){
    $_SESSION['nbvisites']++;
    
}

if (isset($_POST['button'])){
      $_SESSION['nbvisites'] = 0;
     
}
echo $_SESSION['nbvisites']; 
?>


</body>
</html>