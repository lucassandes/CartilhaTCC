<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title text-center>Cartilha de Acessibilidade </title text-center>

    <!-- GoogleFonts -->
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


<header>

</header>
<div id="titulo">
    <div class="container">
        <h1 class="">
            27 Recomendações para o desenvolvimento de Sítios de Universidades Públicas Acessíveis e com boa Usabilidade
        </h1>
    </div>
</div>
<!--
model
<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class=""></div>
        <div class=""></div>
    </div>

</div>
-->
<?php
$i = 1;
?>
<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Identifique a universidade em todas as páginas - e no mesmo lugar
        </div>
        <div class="">
            Elementos comuns a todas as págnas devem estar sempre no mesmo lugar.
            Exemplos: Logotipo, caixa de busca, menu principal.

        </div>
    </div>

</div>


<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Página inicial clara
        </div>
        <div class=""> A página inicial do portal deve deixar claro o que é o sítio, seu objetivo e as informações e
            serviços nele disponíveis.
        </div>
    </div>

</div>

<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Lista de abreviações comuns
        </div>
        <div class="">
            Fornecer lista de abreviações comuns encontradas no site, no campus e na convivência universitária
        </div>
    </div>
</div>

<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">BREADCUMBS</div>
        <div class="">O usuário deve saber onde ele está e como fez para chegar ali. Utilize links em forma hierárquica,
            formando o chamado “migalha de pão” (breadcumbs)
            Exemplo: Você está em Página Inicial -> Cursos -> Ciência da Computação
        </div>
    </div>
</div>

<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">BARRA DE ACESSIBILIDADE com atalhos do teclado
        </div>
        <div class="">O sítio deve possuir uma barra de acessibilidade com os seguintes itens: Alto contraste, Atalhos
            (para menu, conteúdo e busca) e Acessibilidade (link página com os recursos de acessbilidades do sítio);
        </div>
    </div>
</div>

<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            alto contraste / Folha de estilo com alto contraste

        </div>

        <div class="">
            O sítio deve possuir a funcionalidade de folha de estilo com alto contraste disponível no menu de
            acessibilidade.
            <ul>
                <li>Cor de fundo: Deve ser utilizado preto (#000);</li>
                <li>Cor do texto: Deve ser branco (#FFF);</li>
                <li> Links: Sublinhados e de cor amarelo (#FFF333);</li>
                <li> Ícones: Devem ser brancos;</li>
                <li> Linhas e contornos: Devem ser brancos.</li>
            </ul>

        </div>
    </div>

</div>

<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            RESPONSIVIDADE ou aumentar fonte / Permitir redimensionamento sem perda de funcionalidade / Não usar
            expressões como “compatível com” “melhor visto na resolução...”

        </div>

        <div class="">
            O sítio deve ser responsivo, permitindo o redimensionamento da tela para até 200% sem perda de
            funcionalidade. Ao redimensionar a página, não deve aparecer a barra horizontal do navegador. Junto a isso,
            as páginas devem funcionar corretamente independente de plataformas ou navegadores.
        </div>
    </div>

</div>

<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Não utilizar apenas cor ou outras características sensoriais para diferenciar elementos
        </div>

        <div class="">
            Apenas cor, tamanho, forma, som ou outras características sensoriais não devem ser a única maneira de
            diferenciar elementos.

        </div>
    </div>

</div>
<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Esquema consistente de cores e fontes.
        </div>

        <div class="">

            O sítio deve possuir uma harmonia consistente de cores e tipos de fontes em todas as páginas. Deve haver um
            padrão.
        </div>
    </div>

</div>

<!---------- Funcionalidade ---------- --->

<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">

            MAPA DE SITE
        </div>

        <div class="">
            O sítio deve apresentar um Mapa de Site, em forma de lista hierárquica contento todas as páginas do sítio
        </div>
    </div>

</div>

<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            BUSCA / A ferramenta de busca presente em todas as páginas
        </div>

        <div class="">
            O sítio deve possuir um campo de busca. Na falta de resultados da busca, deve ser fornecido links com as
            páginas mais acessadas e/ou mais importantes. Além disso, a caixa de busca deve estar presente em todas as
            páginas.
        </div>
    </div>

</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>