<?php
$a=0;
for($a = 0; $a <= 100; $a++){   

                if ($a%5 == 0 && $a%3 == 0 ){   
                    echo " FizzBuzz  <br>";
                } 
                else if ($a%5 == 0) {
                    echo "Buzz. <br>";
                }
                else if ($a%3 == 0 )  {
                    echo "Fizz. <br>";
                }
                else {
                    echo "$a <br>";
                }     
            }
            ?>