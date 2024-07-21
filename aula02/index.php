<?='Olá mundo novamente!'?>

<?php $nome = "Henrique" ?>

    <!DOCTYPE html>
    <html>
    	<head>
    		<title>Site PHP de <?= $nome ?></title>
    	</head>
    	<body>
    		<h1>Meu nome é <?php echo $nome; ?></h1>
    		<p>Olá <?php print($nome); ?></p>
    	</body>
    </html>