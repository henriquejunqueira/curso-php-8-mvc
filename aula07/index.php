<?php

    // array simples
    //$prateleira = array();
    //$prateleira = [1, 2, 3, 4, 5];
    //$prateleira = ['o', 'l', 'á', 1, 2, 3, 4, 5];
    $prateleira = ['o', 'l', 'á', '!', ' ', 'mundo', 1, 2, 3, 4, 5, TRUE, FALSE, 3.14];
    
    //echo $prateleira[0];
    //echo $prateleira[4];
    
    //echo $prateleira[0];
    //echo $prateleira[1];
    //echo $prateleira[2];
    //echo $prateleira[3];
    //echo $prateleira[4];
    //echo $prateleira[5];
    
    //print_r($prateleira) // imprime todo o conteúdo do array
    
    //var_dump($prateleira); // imprime todo o conteúdo do array e o tipo de dado de cada item
    
    // array associativo (cada item tem uma chave determinada para identificá-lo)
    $exemplo = ['a' => 'abacate', 'b' => 'bola', 'c' => 'cachorro'];
    
    //echo $exemplo['a']; // abacate
    //echo $exemplo['b']; // bola
    //echo $exemplo['c']; // cachorro
    
    echo 'O ' . $exemplo['c'] . ' brincou com a ' . $exemplo['b'];

?>