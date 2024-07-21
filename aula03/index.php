<?php
    $nome = "Henrique";
    
    // aspas duplas imprime o conteúdo da variável
    // aspas simples imprime a variável e não o valor dela
    
//     $html = "<!DOCTYPE html>
//             <html>
//                 <head>
//                     <title>Site PHP de $nome</title>
//             	</head>
//             	<body>
//             		<h1>Meu nome é $nome</h1>
//             		<p>Olá $nome! Tudo bem com você?</p>
//             	</body>
//             </html>";

    $head = "<!DOCTYPE html>
            <html>
                <head>
                    <title>Site PHP de $nome</title>
            	</head>";
    
    $body = "<body>
            	<h1>Meu nome é $nome</h1>
            	<p>Olá $nome! Tudo bem com você?</p>
            </body>
          </html>";
    
//     echo $html;
    $html = $head . $body;
    echo $html;
    
?>