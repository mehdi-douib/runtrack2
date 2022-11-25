<?php
$text = 'Comprendre quand utiliser des fonctions';
function leetSpeak($str){
    $a = ['a','b','e','g','l','s','t'];
    $b = ['A','B','E','G','L','S','T'];
    $c = [4,8,3,6,1,5,7];   
    for ($i=0; isset($str[$i]) ; $i++) { 
        for ($x=0; $x < 7; $x++){    
            if($str[$i] == $a[$x] || $str[$i] == $b[$x]){     
                $str[$i] = $c[$x];
            }
        }     
    }
    return $str;
}
echo leetSpeak($text)
?>






<?php
/*function leetspeak($str){
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
echo leetspeak('Comprendre quand utiliser des fonctions');*/