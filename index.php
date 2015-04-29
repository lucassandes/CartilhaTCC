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
        <div class="title text-center vcenter">
            Identifique a universidade em todas as páginas - e no mesmo lugar
        </div>
        <div class="col-md-12 text text-center">
            <p>Elementos comuns a todas as págnas devem estar sempre no mesmo lugar.</p>

            <p> Exemplos: Logotipo, caixa de busca, menu principal.</p>
        </div>
        <div class="clear"></div>
        <div class="col-xs-6 ">
            <img src="imgs/ph1.jpg" class="img-responsive center-block" alt="Placeholder"/>

            <div class="legenda-certo text-center">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Certo!
            </div>
        </div>

        <div class="col-xs-6 ">
            <img src="imgs/ph1.jpg" class="img-responsive center-block" alt="Placeholder"/>

            <div class="legenda-errado text-center">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Errado :(
            </div>
        </div>

        <!--<div class="text col-md-5 text-right vcenter">
            <p>Elementos comuns a todas as págnas devem estar sempre no mesmo lugar.</p>
            <p> Exemplos: Logotipo, caixa de busca, menu principal.</p>
        </div>
        <div class="col-md-5 ">
            <img src="imgs/ph1.jpg" class="img-responsive" alt="Placeholder"/>
        </div>
            -->
        <div class="clear"></div>
    </div>

</div>

<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Lista de abreviações comuns
        </div>
        <div class="text col-md-5 col-md-offset-1 vcenter">
            Fornecer lista de abreviações comuns encontradas no site, no campus e na convivência universitária.
        </div>

        <div class="col-md-5 vcenter ">
            <img src="imgs/pc2.png" alt="Place Holder 2 " class="img-responsive center-block"/>
        </div>

        <div class="clear"></div>
    </div>
</div>

<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">Breadcumbs, migalha de pão</div>
        <div class="text">
            <p>O usuário deve saber onde ele está e como fez para chegar ali. Utilize links em forma hierárquica,
                formando o chamado “migalha de pão” (breadcumbs)</p>

            <p><strong>Exemplo:</strong>

            </p>

            <div class="well">
                <p> Você está em <u>Página Inicial</u> -> <u>Cursos</u> -> <u>Ciência da Computação</u></p>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>

<?php /*
<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Página inicial clara
        </div>
        <div class="text"> A página inicial do portal deve deixar claro o que é o sítio, seu objetivo e as informações e
            serviços nele disponíveis.
        </div>
    </div>

</div>
*/
?>



<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Barra de Acessibilidade com atalhos do teclado
        </div>
        <div class="text">
            <p>O sítio deve possuir uma <strong>barra de acessibilidade</strong> com os seguintes itens: Alto contraste,
                Atalhos
                (para menu, conteúdo e busca) e Acessibilidade (link página com os recursos de acessbilidades do sítio);
                Se o sítio for responsivo e/ou possuir versão mobile, pode-se ocultar os atalhos de teclado, mas as
                funções <strong>Acessibilidade</strong> e <strong>Alto Contraste</strong> devem permanecer.
            </p>

            <p><strong>Exemplo:</strong></p>
        </div>

        <div id="accessibility-bar" class="col-md-12">

            <ul id="accessibility" class="hidden-sm hidden-xs">
                <li>
                    <a accesskey="1" href="#conteudo-principal"
                       id="link-conteudo">
                        Ir para o conteúdo
                        <span>1</span>
                    </a>
                </li>
                <li>
                    <a accesskey="2" href="#left-menu"
                       id="link-navegacao">
                        Ir para o menu
                        <span>2</span>
                    </a>
                </li>
                <li>
                    <a accesskey="3" href="#SearchableText" id="link-buscar">
                        Ir para a busca
                        <span>3</span>
                    </a>
                </li>
                <li class="last-item">
                    <a accesskey="3" href="#afooter"
                       id="link-rodape">
                        Ir para o rodapé
                        <span> 4 </span>
                    </a>
                </li>
            </ul>

            <ul id="portal-siteactions">
                <li id="siteaction-accessibility">
                    <a href="#" title="Acessibilidade" accesskey="5">Acessibilidade</a>
                </li>
                <li id="siteaction-contraste">
                    <a href="#" title="Alto Contraste" accesskey="6">Alto Contraste</a>
                </li>
            </ul>


        </div>
        <div class="clear"></div>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample"
                aria-expanded="false" aria-controls="collapseExample">
            <span class="glyphicon glyphicon-console" aria-hidden="true"></span> Veja o código do exemplo acima
        </button>

        <div class="collapse" id="collapseExample">

            <script src="https://gist.github.com/lucassandes/031f4565a09ad67e905c.js"></script>

        </div>

    </div>
    <div class="clear"></div>
</div>

<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Alto Contraste / Folha de estilo com alto contraste

        </div>

        <div class="text col-md-6">
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
        <div class="col-md-6">
            <img src="imgs/ph1.jpg" alt="" class="img-responsive center-block"/>

            <div class="legenda-errado text-center">
                <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Exemplo Folha de Estilo com Alto
                Contraste
            </div>
        </div>
    </div>
    <div class="clear"></div>

</div>

<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Responsividade / Permitir redimensionamento sem perda de funcionalidade

        </div>

        <div class="text">
            <p>O sítio deve ser responsivo, permitindo o redimensionamento da tela para até 200% sem perda de
                funcionalidade. Ao redimensionar a página, não deve aparecer a barra horizontal do navegador. Junto a
                isso,
                as páginas devem funcionar corretamente independente de plataformas ou navegadores.</p>

            <p>Não usar
                expressões como “compatível com” “melhor visto na resolução...”</p>
        </div>
    </div>
    <div class="clear"></div>

</div>

<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Não utilizar apenas cor ou outras características sensoriais para diferenciar elementos
        </div>

        <div class="text">
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

        <div class="text">

            O sítio deve possuir uma harmonia consistente de cores e tipos de fontes em todas as páginas. Deve haver um
            padrão. Subsites do sítio principal ou sítios de departamentos da Universidade também devem adotar o mesmo
            padrão.
        </div>
    </div>

</div>

<!---------- Funcionalidade ---------- --->

<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">

            Mapa de Site
        </div>

        <div class="text text-center">
            O sítio deve apresentar um Mapa de Site, em forma de lista hierárquica contento todas as páginas do sítio
        </div>
    </div>
    <div class="clear"></div>

</div>

<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Busca
        </div>

        <div class="text col-sm-5 vcenter">
            O sítio deve possuir um campo de busca. Na falta de resultados da busca, deve ser fornecido links com as
            páginas mais acessadas e/ou mais importantes. Além disso, a caixa de busca deve estar presente em todas as
            páginas.
        </div>
        <div class="col-sm-5 vcenter  col-sm-offset-1"><img src="imgs/lupa.png" alt="" class="img-responsive"/></div>
    </div>
    <div class="clear"></div>

</div>

<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Etiqueta nas imagens
        </div>
        <div class="text col-sm-5 vcenter col-md-offset-1">

            <img src="imgs/placeholder.png" alt="Imagem de exemplo com um fundo cinza." class="img-responsive"
                 data-toggle="tooltip" data-placement="bottom" title="Imagem de exemplo com um fundo cinza."/>
        </div>


        <div class="text col-sm-5 vcenter">
            <p> Para facilitar a compreensão de usuários com deficiência visual, uma descrição para as imagens deve ser
                fornecida, utilizando-se do atributo “alt”</p>

            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#codigoImagem"
                    aria-expanded="false" aria-controls="collapseExample">
                <span class="glyphicon glyphicon-console" aria-hidden="true"></span> Veja o código do exemplo
            </button>

        </div>


        <div class="collapse col-md-12" id="codigoImagem">
            <script src="https://gist.github.com/lucassandes/1e141f608b45d2f6686a.js"></script>
        </div>

    </div>
    <div class="clear"></div>

</div>

<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Evitar conteúdo textual em imagens.
        </div>

        <div class="text col-sm-5 vcenter  col-sm-offset-1">
            Conteúdo textual deve ser escrito no código. Textos em imagem dificultam a leitura e perdem qualidade no
            redimensionamento. Além disso, não são lidos por mecanismos de busca nem por leitores de tela.

        </div>

        <div class=" col-sm-5 vcenter">
            <img src="imgs/text-imagem.png" class="img-responsive center-block" alt="Texto escrito na imagem" />

            <div class="legenda legenda-fundo-escuro  text-center">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Não faça isso!
            </div>

        </div>
    </div>
    <div class="clear"></div>

</div>


<!-- ERROS -->

<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            As mensagens de erro devem ser sucintas e explicativas
        </div>

        <div class="text ">

            As mensagens de erro devem ser apresentadas de maneira clara. Evitar o uso de vocabulário técnico. Quando em
            formulários, posicionar o cursos no local do erro para facilitar a correção e não limpar o conteúdo do
            formulário inteiro por causa de um erro.
        </div>

    </div>
    <div class="clear"></div>

</div>

<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Páginas de conteúdo não encontrado
        </div>

        <div class="text">
            Páginas de erro devem possuir links para a página inicial, de “Fale Conosco” e possuir um campo de busca
            evidente
        </div>

    </div>
    <div class="clear"></div>

</div>


<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Dividir o texto em tópicos.
        </div>

        <div class="text ">
            Textos na internet devem ser curtos, por isso divida os textos mais longos em pequenas unidades, pequenos
            parágrafos ou listas para facilitar o entendimento do conteúdo da informação
        </div>

    </div>
    <div class="clear"></div>

</div>


<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Utilizar termos simples e claros como rótulos de menu.
        </div>

        <div class="text ">
            Rótulos do menu devem ser de fácil compreensão, portanto deve-se evitar o uso de siglas, abreviações ou
            termos técnicos e devem manter consistência textual com os títulos das páginas que se referem.
        </div>

    </div>
    <div class="clear"></div>

</div>


<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Usar Convenções
        </div>

        <div class="text ">
            Utilize convenções comuns da internet, como por exemplo:
            Links sublinhados;
            Caixa de busca no canto superior direito;
            Logotipo no canto superior esquerdo;
            Logotipo funcionar como link para página inicial;

        </div>

    </div>
    <div class="clear"></div>

</div>


<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Teste rápido de tabulação
        </div>

        <div class="text ">
            "Ordenar de forma lógica e intuitiva a leitura e tabulação"
            O desenvolvedor deve navegar pelo sítio apenas pelo teclado (utilzando a tecla tab) afim de identificar se a
            hierarquia das informações ta disposta de forma coerente

        </div>

    </div>
    <div class="clear"></div>

</div>

<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Nunca utilizar tabelas para diagramação
        </div>

        <div class="text ">
            Tabelas devem ser utilizadas somente para dados tabulares, nunca para disposição de elementos do layout.

        </div>

    </div>
    <div class="clear"></div>

</div>

<!-------------------------------- -->

<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            xx
        </div>

        <div class="text ">
            Não utilizar formatos de arquivos abertos para edição (.doc, por ex), optar sempre pelo pdf.

        </div>

    </div>
    <div class="clear"></div>

</div>


<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            xx
        </div>

        <div class="text ">
            Facilite para os usuários a visualização de projetos e programas desenvolvidos na universidade

        </div>

    </div>
    <div class="clear"></div>

</div>

<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            xx
        </div>

        <div class="text ">
            Sempre fornecer conteúdo alternativo em HTML para grades horarias e demais documentos de interesse dos
            alunos; - (recomendação supérfula: sempre fornecer documentos em formatos acessíveis, isto ´é, pdfs também
            devem ter sua alternativa em HTML)
        </div>

    </div>
    <div class="clear"></div>

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>
</html>