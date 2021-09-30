<head>
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<?php

// Configuração inicial da página
require ('_config.php');

// Define o título "desta" página
$titulo = "Faça seu cadastro!";

// Opção ativa no menu principal
// Valores possíveis: "", "artigos", "noticias", "contatos", "sobre", "procurar"
// Valores diferentes destes = ""
$menu = "";

// Aponta para o CSS "desta" página. Ex.: /css/contatos.css
// Deixe vazio para não usar CSS adicional nesta página
$css = "css/cadastro.css";

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

<div class="welcomecadastro">
    <h1>Marcello's Pizzaria.</h1>
    <br>    
    <h2>Faça seu cadastro e peça online!</h2>
    <br>
    <hr>
</div>

<div class="cadastrow">
    <form method="post" action="cadastro.php"></form>
    
        <p>
            <input type="text" name="nome" id="nome" placeholder="Nome Completo" maxlength="50">
        </p>

        <p>
            <input type="email" name="email" id="email" placeholder="Email" maxlength="50" />
        </p>

        <p>
            <input type="password" name="senha" id="senha" placeholder="Senha" maxlength="50" />
        </p>
        <br>
        <p>
            <button class="butaum" type="submit" class="botaocadastro">Enviar</button>
        </p>
</div>

<?php

// Inclui o rodapé do template
require ('_footer.php');

?>