<?php 

    // operadores
    //$a = 1001;
    //$a = 1000;
    
    //$a = $a + 1;
    //$a++;
    //$a++;
    //$a++;
    //++$a;
    
    //echo $a;
    
    //$a = 'aaaa';
    //$b = 'aaaa';
    
    /*if($a == $b){
        echo 'os valores de $a e $b são iguais';
    }*/

    //$a = 11;
    //$b = 2;
    
    // % módulo
    //echo $a % $b;
    //echo $a / $b;
    
    //$a = 103;
    $a = 102;
    //$b = 2;
    //$b = 200;
    $b = 2000;
    
    if($a % 2 == 0 and $a > $b){
        echo '$a é um número par e maior que $b';
    }else if($a % 2 == 1 and $a > $b){
        echo '$a é um número ímpar e maior que $b';
    }else if(($a % 2 == 1) or ($a > $b)){
        echo '$a é um número ímpar ou maior que $b';
    }else if(!($a % 2 == 1)){
        echo 'A expressão é falsa';
    }
    
    
    
    
    
    
    
    
    
    
    
    

?>