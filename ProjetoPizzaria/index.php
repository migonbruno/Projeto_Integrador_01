<head>
<link rel="stylesheet" href="css/index.css">
</head>
<?php

// Configuração inicial da página
require ('_config.php');

// Define o título "desta" página
$titulo = "";

// Opção ativa no menu principal
// Valores possíveis: "", "artigos", "noticias", "contatos", "sobre", "procurar"
// Valores diferentes destes = ""
$menu = "";

// Aponta para o CSS "desta" página. Ex.: /css/contatos.css
// Deixe vazio para não usar CSS adicional nesta página
$css = "";

// Aponta para o JavaScript "desta" página. Ex.: /js/contatos.js
// Deixe vazio para não usar JavaScript adicional nesta página
$js = "";

/*********************************************/
/*  CÓDIGOS PHP DESTA PÁGINA FICAM AQUI */
/*********************************************/



/************************************************/
/*  CÓDIGOS PHP DESTA PÁGINA TERMINAM AQUI */
/************************************************/

// Inclui o cabeçalho do template
require ('_header.php');

?>

<div class="inicio">

    <h1>Marcello's Pizzaria</h1>
    <small><h2>"Alberto, come and look at Marcello!"</h2></small>
    <br>
    <hr>
</div>

<div class="conteudo">
    <h4>Faça seu pedido online!</h4>
    <img src="img/banner.jpg" alt="Banner">
</div>
<?php

// Inclui o rodapé do template
require ('_footer.php');

?>