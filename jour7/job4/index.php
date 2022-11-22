<?php

function calcule($a, $operation, $b)
{
     
      switch ($operation)
      {
            case '+':
                  $result = $a + $b;
                  break;
            case '-':
                  $result = $a - $b;
                  break;
            case '/':
                  $result = $a / $b;
                  break;
            case '*':
                  $result = $a * $b;
                  break;
            case '%':
                  $result = $a % $b;
                  break;                  
            
      }

      return $result;
}

echo calcule (30,'+',60) . "<br/>";
echo calcule (20,'-',50) . "<br/>";
echo calcule (40,'/',40) . "<br/>";
echo calcule (70,'*',50) . "<br/>";
echo calcule (70,'%',50) . "<br/>";

?>



