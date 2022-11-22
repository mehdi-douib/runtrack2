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