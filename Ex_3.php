<?php

$ano = 1980;

while($ano != 2024){
    if(($ano % 4 == 0) and ($ano % 100 != 0) or ($ano % 400 == 0)){
        echo $ano . " foi bissexto\n";
    }
    $ano = $ano + 1;
    
    if($ano == 2024){
        echo $ano . " é bissexto";
    }
}
