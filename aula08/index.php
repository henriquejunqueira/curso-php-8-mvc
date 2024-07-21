<?php

    // estruturas condicionais
    //$a = 100;
    $a = 1001;
    //$b = '100';
    $b = 100;
    
    // verifica se os valores de $a e $b são iguais, mas não importando o tipo
    /*if($a == $b){
        echo 'Valores iguais';
    }*/
    
    // verifica se os valores de $a e $b são idênticos, ou seja, se são do mesmo tipo e mesmo valor
    /*if($a === $b){
        echo 'Valores iguais';
    }else{
        echo 'Valores diferentes';
    }*/
    
    /*if($a === $b){
        echo 'Valores iguais';
    }else if($a == $b){
        echo 'Valores iguais, mas não do mesmo tipo';
    }else{
        echo 'Valores diferentes';
    }*/
    
    /*if($a < $b){
        echo '$a é menor que $b';
    }*/
    
    if($a > $b){
        echo "$a é maior que $b <br />";
    }
    
    if($a > 0){
        echo "$a é maior que 0";
    }

?>