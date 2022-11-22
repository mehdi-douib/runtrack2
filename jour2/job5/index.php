<?php 
        for($i=1; $i<=1000; $i++){
            for($x=2; $x<$i; $x++){
                if ($i % $x === 0){ 
                    break;
                }
                else if($x === $i-1){ 
                    echo "$i<br>";
                }
            }
        }
    ?>