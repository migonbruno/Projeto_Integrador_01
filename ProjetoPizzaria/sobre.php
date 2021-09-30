<link rel="stylesheet" href="css/sobre.css">
<?php

// Configuração inicial da página
require ('_config.php');

// Define o título "desta" página
$titulo = "Sobre nós";

// Opção ativa no menu principal
// Valores possíveis: "", "artigos", "noticias", "contatos", "sobre", "procurar"
// Valores diferentes destes = ""
$menu = "Sobre";

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
<div class="about">

    <h3>Marcello's Pizzaria, 500 anos de tradição!</h3>
    <br>
    <br>
    <h4> <p> Somos uma pizzaria fundada na antiga cs_italy, nossos queridos jogadores 
    não tinham o que fazer entre um round e outro então</p>
    tivemos a brilhante ideia de vender nossas pizzas em meio ao fogo cruzado.</p>
    <p>Fundada por Marcello (lê-se Martielo) nosso querido herói de guerra, e seu amigo Alberto, temos orgulho em oferecer a melhor pizza de todo o planeta.</p>
    <br>
    <p>MAMA MIA MARCELLO!</p>
    
    <br>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/ChDof6K--GI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
    </h4>


</div>
<?php

// Inclui o rodapé do template
require ('_footer.php');

?>