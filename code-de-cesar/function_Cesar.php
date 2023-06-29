<?php
    function Cesar($chaine, $choix, $mode){
            $alphabet = "abcdefghijklmnopqrstuvwxyz";
            $resultat = '';
            $len = strlen($alphabet);
        
            if($mode == 0){
                $choix =- $choix;
            }
        
            for($i = 0; $i < strlen($chaine); $i++){
                if(strpos($alphabet, $chaine[$i]) !== false){
                    $j = strpos($alphabet, $chaine[$i]);
                    $j = ($j + $choix + $len) % $len;
                    $resultat .= $alphabet[$j];
                }else{
                    $resultat .= $chaine[$i];
                }
            }
            return $resultat;
    }
?>