<?php
$a=0;
for($a = 0; $a <= 100; $a++){   

    if ($a >= 0 && $a <=20 )  {
        echo "<i> $a </i> <br>";
    } 
    else if ($a == 42) {
        echo "La Plateforme_ <br>";
    }
    else if ($a >= 25 && $a <=50 )  {
        echo "<u> $a </u> <br>";
    }
    else {
        echo "$a <br>";
    }     
}
?>