<?php
$nombre = [200,204,173,98,171,404,459];
foreach ($nombre as $valeur){
    if ($valeur % 2 === 0) {
       echo $valeur, ' est pair <br>';
    } else {
       echo $valeur, ' est impair <br>';
    }
}
?>