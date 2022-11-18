<!DOCTYPE html>
<html>
<body>
<form  method="POST">
    <label for="largeur"> largeur: </label>
    <input type= "text" name="largeur" id="largeur">
    <br>

    <label for="hauteur"> hauteur: </label>
    <input type= "text" name="hauteur" id="hauteur">
    <br>
    
    <input type="submit" value="Envoyer !">
</form>
    </body>
    </html>

    <pre>
        <?php
$a = " "; 
$b = "_";

if (isset($_POST['largeur']) && isset($_POST['hauteur'])){
    $largeur = ($_POST['largeur']);
    echo "<br>";
    $hauteur = ($_POST['hauteur']);
   

    for ($h1 = 0; $h1 < $largeur/2; $h1++){ 
        for ($j = $largeur/2; $j > $h1; $j--){
            echo $a;
        }
        echo "/"; 
        for ($x = 0; $x < $h1; $x++){
            echo $b . $b;
           
        }
        echo "\\";
        echo "<br>";
    } 
    for ($h2 = 0; $h2 < $hauteur; $h2++){
        if ($h2 == 0){
            echo "|";
        }
        else{
            echo "|";
        }
        if ($h2 == $hauteur-1){
            for ($y = 0; $y < $largeur; $y++){
                echo $b;
            }
        }
        else{
            for ($y = 0; $y < $largeur; $y++){
                echo $a;
            }
        }
        if ($h2 == 0){
            echo "|";
        }
        else{
            echo "|";
        }
        echo "<br>";
    }
}


?></pre>