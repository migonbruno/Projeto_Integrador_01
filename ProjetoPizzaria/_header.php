<?php
 

// Tratamento do título da página
if ($titulo == "") {
    $titulo = "Marcello's Pizzaria - MAMA MIA MARCELLO!";
} else {
    $titulo = "{$titulo} - Marcello's Pizzaria";
}

// Tratamento do CSS da página
if ($css != "") {
    $css = "<link rel=\"stylesheet\" href=\"{$css}\">\n";
} else {
    $css = null;
}

// Tratamento do JavaScript da página --> _footer.php
if ($js != "") {
    $js = "<script src=\"{$js}\"></script>\n";
} else {
    $js = null;
}

?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?></title>

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="shortcut icon" href="/img/pizzaicon.png">
    <link href="https://fonts.googleapis.com/css?family=Tomorrow&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="nav">
        <a href="index.php">HOME</a>
        <a href="pecaonline.php">PEÇA ONLINE</a>
        <a href="cardapio.php">CARDÁPIO</a>
        <a href="contatos.php">CONTATOS</a>
        <a href="sobre.php">SOBRE</a>
    </nav>

    <main>