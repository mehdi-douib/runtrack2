function leetSpeak($str){
    $a = ['a','b','e','g','l','s','t'];
    $b = ['A','B','E','G','L','S','T'];
    $c = [4,8,3,6,1,5,7];

    // parcour la chaine de charactère de $str
    for ($i=0; isset($str[$i]) ; $i++) { 
        // je créé un compteur pour mes trois tableaux
        for ($x=0; $x < 7; $x++){
            // je regarde dans la chain les lettres qui correspondes à ceux des tableaux minus ou maj
            if($str[$i] == $a[$x] || $str[$i] == $b[$x]){
                // je remplace les lettres correspondantes
                $str[$i] = $c[$x]; 
            }
        }
    }
    return $str;
}

echo leetSpeak($chain)

?>