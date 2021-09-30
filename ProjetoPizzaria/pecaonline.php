<head>
<link rel="stylesheet" href="css/pecaonline.css">
</head>
<?php

// Configuração inicial da página
require ('_config.php');

// Define o título "desta" página
$titulo = "Pedidos";

// Opção ativa no menu principal
// Valores possíveis: "", "artigos", "noticias", "contatos", "sobre", "procurar"
// Valores diferentes destes = ""
$menu = "";

// Aponta para o CSS "desta" página. Ex.: /css/contatos.css
// Deixe vazio para não usar CSS adicional nesta página
$css = "/css/pecaonline.css";

// Aponta para o JavaScript "desta" página. Ex.: /js/contatos.js
// Deixe vazio para não usar JavaScript adicional nesta página
$js = "";

/*********************************************/
/*  CÓDIGOS PHP DESTA PÁGINA FICAM AQUI */
/*********************************************/

// "Declarando" variáveis
$nome = $email = $telefone = $endereco = $pizza = $bebida = $erro = $msgErro = $msgOk = $msgMail = '';

// Se o formulário foi enviado
if ( isset($_POST['enviado']) ) :

    // Obtém o nome do form
    $nome = sanitiza( filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING) );

    // Obtém o e-mail do form
    $email = sanitiza( filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) );

    // Obtém o nome do form
    $telefone = sanitiza( filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING) );

    // Obtém o nome do form
    $endereco = filter_input(INPUT_POST, 'endereço', FILTER_SANITIZE_STRING);
    
    // Obtém o nome do form
    $pizza = filter_input(INPUT_POST, 'pizza', FILTER_SANITIZE_STRING);
    
    // Obtém o nome do form
    $bebida = filter_input(INPUT_POST, 'bebida', FILTER_SANITIZE_STRING);

    // Verificar o preenchimento do nome
    if (strlen($nome) < 2) {
        $erro .= "<li>Seu nome está muito curto.</li>";
    }

    // Verificar o preenchimento do e-mail
    // O sinal "!" inverte TRUE com FALSE
    if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
        $erro .= "<li>Seu e-mail parece inválido.</li>";
    }

    // Verificar o preenchimento do telefone
    if (strlen($telefone) < 4) {
        $erro .= "<li>O telefone está muito curto.</li>";
    }
    
    // Verificar o preenchimento do endereço
    if (strlen($endereco) < 1) {
        $erro .= "<li>O endereço está muito curto.</li>";
    }

    // Verificar o preenchimento da mensagem
    if (strlen($pizza) < 4) {
        $erro .= "<li>O sabor da pizza está muito curta.</li>";
    }

    // Verificar o preenchimento da mensagem
    if (strlen($bebida) < 4) {
        $erro .= "<li>A bebida está muito curta.</li>";
    }

    // Validando erros
    if ($erro != '') :

        // Cria mensagem de erros. Usamos HEREDOC.
        $msgErro .= <<<TEXTO
<div class="msgErro">
    <h3>Ooooops!</h3>
    <p>Ocorreram erros que impedem o envio do seu pedido:</p>
    <ul>{$erro}</ul>
    <p>Por favor corrija os erros e tente novamente.</p>
</div>
        
TEXTO;

    else :
        
        // Preparando para salvar os dados
        $sql = <<<SQL
INSERT INTO pedidos
    (nome_user, email_user, tel_user, endereco_user, pizza_user, bebida_user)
VALUES
    ('{$nome}', '{$email}', '{$telefone}', '{$endereco}', '{$pizza}', '{$bebida}')
;
SQL;

        // Executa a query gerada em $sql
        $conn->query($sql);

        // Prepara dados para envio por e-mail
        $msgMail .= <<<TEXTO
Um novo contato foi enviado para o site "mpizzaria":
    Nome: {$nome}
    E-mail: {$email}
    Telefone: {$telefone}
    Endereço: {$endereco}
    Pizza: {$pizza}
    Bebida: {$bebida}
TEXTO;

        // Enviando e-mail --> Não funciona no XAMPP
        // O "@" oculta mensagens de erro --> CUIDADO!
        // Dê preferência a bibliotecas de e-mail à função "mail()" do PHP
        // Por exemplo, pesquise por "PHPMailer" e outras similares
        @mail('admin@semnome.com', 'Novo pedido com mpizzaria', $msgMail);

        // Obtendo partes do nome
        // O primeiro nome estará em $partes[0]
        $partes = explode(' ', $nome);

        // Gerando mensagem de agradecimento
        $msgOk .= <<<TEXTO
<div class="msgOk">
    <h3>Olá {$partes[0]}!</h3>
    <p>Seu pedido foi recebido!</p>
    <p>Tempo de entrega cerca de 40 minutos.</p>
    <p>Obrigado...</em>
</div>
TEXTO;
     
    endif;

endif;

/************************************************/
/*  CÓDIGOS PHP DESTA PÁGINA TERMINAM AQUI */
/************************************************/

// Inclui o cabeçalho do template
require ('_header.php');

?>

<div class="row">
    <div class="col1">

        <h2>Faça seu pedido!</h2>

        <?php
        if ($msgOk == ''):
        ?>

        <p>Preencha o formulário abaixo para que seu pedido seja realizado.</p>

        <?php echo $msgErro ?>

        <form name="contatos" id="contatos" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" accept-charset="utf-8">
            <input type="hidden" name="enviado" value="ok">
            <p>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Seu nome completo" value="<?php echo $nome ?>">
            </p>
            <p>
                <label for="email">E-mail:</label>
                <input type="text" name="email" id="email" placeholder="nome@provedor.com" value="<?php echo $email ?>">
            </p>
            <p>
                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="telefone" placeholder="Seu telefone" value="<?php echo $telefone ?>">
            </p>
            <p>
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereço" id="endereço" placeholder="Seu Endereço" value="<?php echo $endereco ?>">
            </p>
            <p>
                <label for="pizza">Sabor da pizza:</label>
                <input type="text" name="pizza" id="pizza" placeholder="Sabor da pizza" value="<?php echo $pizza ?>">
            </p>
            <p>
                <label for="bebida">Bebida:</label>
                <input type="text" name="bebida" id="bebida" placeholder="Escolha sua bebida" value="<?php echo $bebida ?>">
            </p>
            <p>
                <label></label>
                <button type="submit">Enviar</button>
            </p>
        </form>

        <?php
        else:
            echo $msgOk;
        endif;
        ?>

<?php

// Inclui o rodapé do template
require ('_footer.php');

?>