<?php

function occurences($str, $char)
{
      $a = 0;
      $b = 0;
      while (isset($str[$a]))
      {
            if ($char == $str[$a])
            {
                  $b++;
            }
            $a++;
      }
      return $b;
}

echo occurences('Bonjour','o');
?>


<?php
function leetspeak($str){
    $a = 0;
      while (isset($str[$a]))
      {
            if ($str[$a] == 'A' || $str[$a] == 'a')
            {
                  $str[$a] = '4';
            }
            elseif ($str[$a] == 'B' || $str[$a] == 'b'){
                  $str[$a] = '8';
            }
            elseif ($str[$a] == 'E' || $str[$a] == 'e'){
                  $str[$a] = '3';
            }
            elseif ($str[$a] == 'G' || $str[$a] == 'g'){
                  $str[$a] = '6';
            }
            elseif ($str[$a] == 'L' || $str[$a] == 'l'){
                  $str[$a] = '1';
            }
            elseif ($str[$a] == 'S' || $str[$a] == 's'){
                  $str[$a] = '5';
            }
            elseif ($str[$a] == 'T' || $str[$a] == 't'){
                  $str[$a] = '7';
            }
            $a++;
      }
  echo $str;
}
echo leetspeak('Comprendre quand utiliser des fonctions');