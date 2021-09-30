<head>
    <link rel="stylesheet" href="css/cardapio.css">
</head>
<?php

// Configuração inicial da página
require ('_config.php');

// Define o título "desta" página
$titulo = "Cardápio";

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
<div class="cardtitulo">
    <h1>Confira nosso cardápio.</h1>
    <br>    
    <hr>
</div>

<div class="cardapio">
        <h3>Mussarela</h3>
        <img src="img/mussarela.jpg">
        <form> R$ 35,00</form>
    </a>
</div>

<div class="cardapio">
        <h3>Calabresa</h3>
        <img src="img/calabresa.jpg">
        <form> R$ 35,00</form>
    </a>
</div>

<div class="cardapio">
        <h3>Franco c/ Requeijão</h3>
        <img src="img/mussarela.jpg">
        <form> R$ 40,00</form>
    </a>
</div>

<div class="cardapio">
        <h3>Quatro Queijos</h3>
        <img src="img/4queijos.jpg">
        <form> R$ 40,00</form>
    </a>
</div>

<div class="cardapio">
        <h3>Peperoni</h3>
        <img src="img/peperoni.jpg">
        <form> R$ 40,00</form>
    </a>
</div>

<?php

// Inclui o rodapé do template
require ('_footer.php');

?>