<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cartilha de Acessibilidade e Usabilidade</title>

    <!-- GoogleFonts -->
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Acessibilidade -->
    <link id="pagestyle" href="css/default.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>


<header>
    <div id="accessibility-bar-info">
        <div class="container">
            <ul id="accessibility-info" >
                <li>
                    <a accesskey="1" href="#acessibilidade-usabilidade">
                        Ir para o conteúdo <span class="access-key hidden-sm hidden-xs" >1</span>
                    </a>
                </li>

                <li class="last-item">
                    <a accesskey="2" href="#referencias">
                        Ir para o rodapé <span class="access-key hidden-sm hidden-xs">2</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:swapStyleSheet()" title="Alto Contraste" accesskey="3">Alto Contraste <span class="access-key hidden-sm hidden-xs">3</span></a>
                </li>


            </ul>

        </div>
    </div>
</header>



<div id="titulo">
    <div class="clear"></div>
    <div class="container">

        <?php /*

        <h1>
            <span id="numero" class="col-md-2 col-xs-12">26</span>
            <span id="recomendacoes"  class="col-md-10 col-xs-12"> Recomendações para o desenvolvimento de sítios</span>

            <span id="acessiveis-usabilidade" class="col-md-12 col-xs-12">Acessíveis e com boa Usabilidade</span>
            <span id="para"  class="col-md-12 col-xs-12">para</span>

            <span id="universidades"  class="col-md-12 col-xs-12">Universidades Públicas</span>
        </h1>
        */ ?>
        <div class="clear"></div>
        <h1><a href="http://lucassandes.com/cartilha-acessibilidade-usabilidade">26 Recomendações para o desenvolvimento
                de sítios acessíveis e com boa usabilidade para Universidades Públicas</a></h1>
        <!-- <img src="imgs/header.png" alt="26 Recomendações para o desenvolvimento de sítios acessíveis e com boa usabilidade
                                        para Universidades Públicas" class="center-block img-responsive"/> -->
        <!--<h1 class="text-center">
          <span>2X</span> Recomendações para o desenvolvimento de Sítios de Universidades Públicas Acessíveis e com
            boa Usabilidade
        </h1>-->

        <p class="text-right">Trabalho de Conclusão de Curso<br/> Lucas Vinícius Maciel Sandes<br/> Universidade Federal
            de São Paulo - Unifesp<br/> Bacharelado em Ciência da Computação. 2015</p>


    </div>
    <div class="clear"></div>
</div>

<div id="acessibilidade-usabilidade">

    <div class="container">
        <div class="title text-center">
            Introdução
        </div>
        <div class="col-md-5 col-md-offset-1 box">

            <div class="title text-center">
                Acessibilidade?
            </div>
            <div class="text">
                <p>
                    O termo Acessibilidade é empregado, de maneira geral, para carecterizar o acesso integral
                    de qualquer pessoa a todos os benefícios da vida social, inclusive o da Internet.
                </p>


                <button class="btn btn-primary" type="button" data-toggle="collapse"
                        data-target="#detalhes-acessibilidade"
                        aria-expanded="false" aria-controls="detalhes-acessibilidade">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Mais detalhes
                </button>

                <div class="collapse well" id="detalhes-acessibilidade">
                    <p class="no-padding-bottom">
                        <strong>Governo Eletrônico - eGov</strong>
                    </p>

                    <p class="no-padding-bottom">O eGov desenvolve uma série de programas para democratizar o acesso a
                        informação e
                        auxiliar, de maneira teórica e prática, o desenvolvimento de aplicações públicas</p>

                    <p class="no-padding-bottom"><strong>Legislação</strong></p>

                    <p class="no-padding-bottom">O decreto 5.296 de 2 de dezembro de 2004 torna obrigatória a
                        acessibilidade em sítios do poder público/do governo. Deste decreto, destaca-se o seguinte
                        trecho:</p>

                    <p class="citacao">Art. 8o Para os fins de acessibilidade, considera-se:<br/>
                        I - acessibilidade: condição para utilização, com segurança e autonomia, total
                        ou assistida, dos espaços, mobiliários e equipamentos urbanos, das edifica-
                        ções, dos serviços de transporte e dos dispositivos, sistemas e meios de comunicação
                        e informação, por pessoa portadora de deficiência ou com mobilidade
                        reduzida;<br/>
                        II - barreiras: qualquer entrave ou obstáculo que limite ou impeça o acesso, a
                        liberdade de movimento, a circulação com segurança e a possibilidade de as
                        pessoas se comunicarem ou terem acesso à informação, classificadas em:
                        (...)<br/>
                        d) barreiras nas comunicações e informações: qualquer entrave ou obstáculo
                        que dificulte ou impossibilite a expressão ou o recebimento de mensagens por
                        intermédio dos dispositivos, meios ou sistemas de comunicação, sejam ou não
                        de massa, bem como aqueles que dificultem ou impossibilitem o acesso à informação;
                        (...)<br/>
                        Art. 47. No prazo de até doze meses a contar da data de publicação deste
                        Decreto, será obrigatória a acessibilidade nos portais e sítios eletrônicos da
                        administração pública na rede mundial de computadores (internet), para o uso
                        das pessoas portadoras de deficiência visual, garantindo-lhes o pleno acesso às
                        informações disponíveis.(BRASIL, 2004)</p>
                </div>
            </div>
        </div>

        <div class="col-md-5 col-md-offset-1 box">
            <div class="title text-center">
                Usabilidade?
            </div>

            <div class="text">
                <p>
                    O termo Usabilidade é frequentemente associado ao grau de facilidade de um produto ser utilizado.
                </p>

                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#detalhes-usabilidade"
                        aria-expanded="false" aria-controls="detalhes-usabilidade">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Mais detalhes
                </button>

                <div class="collapse well" id="detalhes-usabilidade">
                    <p><strong>Nielsen</strong> (1994) define <strong>usabilidade</strong> como um conjunto de atributos
                        que qualificam
                        quão bem uma pessoa consegue interagir com um sistema interativo</p>
                    <ul>
                        <li><strong>Facilidade de aprendizado:</strong> O sistema deve ser fácil de aprender de maneira
                            que, rapidamente,
                            seja possível obter algum resultado do mesmo.
                        </li>
                        <li><strong>Facilidade de recordação:</strong> O sistema deve ser fácil de usar, a ponto de um
                            usuário casual
                            conseguir utilizar o sistema após um período de tempo sem ter que reaprender a utilizá-lo.
                        </li>
                        <li><strong>Eficiência:</strong> O sistema deve ser eficiente, isto é, uma vez que o usuário
                            aprendeu a utilizá-
                            lo, ele deve ser capaz de atingir altos nívels de produtividade na execução de suas tarefas.
                        </li>
                        <li><strong>Segurança no uso:</strong> O sistema deve ter uma baixa taxa de erros, de maneira
                            que, caso o
                            usuário cometa algum erro, este deve ser facilmente recuperável. Erros catastróficos não
                            devem ocorrrer.
                        </li>
                        <li><strong>Satisfação do usuário:</strong> O sistema deve ser agradável de usar, de modo que os
                            usuários
                            estejam subjetivamente satisfeitos ao usá-lo. O sistema deve satisfazer suas necessidades
                        </li>
                    </ul>
                </div>


            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="text text-center bold objetivo">
                Esse infográfico foi criado com o objetivo de auxiliar e facilitar o desenvolvimento de sítios
                eletrônicos
                de universidades públicas brasileiras.
            </div>
        </div>

        <div class="clear"></div>
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
            <p>Elementos comuns a todas as páginas devem estar sempre no mesmo lugar.</p>

            <p> Exemplos: logotipo, caixa de busca, menu principal.</p>
        </div>
        <div class="clear"></div>


        <div class="col-xs-6 ">
            <img src="imgs/identifique-errado.gif" class="img-responsive center-block border-img"
                 data-toggle="tooltip" data-placement="top"
                 alt="Animação ilustrando a maneira errada de identificar a universidade nas páginas do sítio. Em cada
                 página o logo e a caixa de busca se apresentam em um lugar diferente, dificultando o uso para usuários que utilizam leitores de tela"
                 title="Animação ilustrando a maneira errada de identificar a universidade nas páginas do sítio. Em cada
                 página o logo e a caixa de busca se apresentam em um lugar diferente, dificultando o uso para usuários que utilizam leitores de tela"/>

            <div class="legenda-errado text-center">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Errado :(
            </div>
        </div>
        <div class="col-xs-6 ">
            <img src="imgs/identifique-certo.gif" class="img-responsive center-block border-img"
                 data-toggle="tooltip" data-placement="top"
                 alt="Animação ilustrando a maneira correta de identificar a universidade em todas as páginas e no mesmo lugar"
                 title="Animação ilustrando a maneira correta de identificar a universidade em todas as páginas e no mesmo lugar"/>

            <div class="legenda-certo text-center">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Certo!
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
            Fornecer lista de abreviações e acrônimos comuns encontrados no site, no campus e na convivência
            universitária.
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
                formando o chamado “migalha de pão” (breadcumbs).</p>

            <p><strong>Exemplo:</strong>

            </p>

            <div class="well">
                <p> Você está em <span class="underline">Página Inicial</span> -> <span class="underline">Cursos</span>
                    -> <span class="underline">Ciência da Computação</span></p>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>


<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Barra de Acessibilidade com atalhos do teclado
        </div>
        <div class="text">
            <p>O sítio deve possuir uma <strong>barra de acessibilidade</strong> com os seguintes itens:
                atalhos (para menu, conteúdo e busca), Alto contraste e Acessibilidade (link para a página com os
                recursos de acessibilidades do sítio);
                Se o sítio for responsivo e/ou possuir versão mobile, pode-se ocultar os atalhos de teclado nos
                dispositivos de telas menores, mas as
                funções <strong>Acessibilidade</strong> e <strong>Alto Contraste</strong> devem permanecer.
            </p>

            <p><strong>Exemplo:</strong></p>
        </div>

        <div id="accessibility-bar-ex" class="col-md-12">

            <ul id="accessibility-ex" class="hidden-sm hidden-xs">
                <li>
                      <span class="emule-link" title="Link de exemplo - não funciona">
                        Ir para o conteúdo
                          <span class="access-key">1</span>
                    </span>
                </li>
                <li>
                  <span class="emule-link" title="Link de exemplo - não funciona">
                        Ir para o menu
                          <span class="access-key">2</span>
                    </span>
                </li>
                <li>
                     <span class="emule-link" title="Link de exemplo - não funciona">
                        Ir para a busca
                          <span class="access-key">3</span>
                   </span>
                </li>
                <li class="last-item">
                    <span class="emule-link" title="Link de exemplo - não funciona">
                        Ir para o rodapé
                        <span class="access-key"> 4 </span>
                    </span>
                </li>
            </ul>

            <ul id="portal-siteactions-ex">
                <li id="siteaction-accessibility">
                    <span class="emule-link">Acessibilidade</span>
                </li>
                <li id="siteaction-contraste">
                    <a href="javascript:swapStyleSheet()" title="Ativar Alto Contraste" accesskey="6">Alto Contraste</a>
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
            Alto contraste / Folha de estilo com alto contraste

        </div>

        <div class="text col-md-6">
            O sítio deve possuir a funcionalidade de folha de estilo com alto contraste disponível no menu de
            acessibilidade. Regras para a folha de estilo de alto contraste:
            <ul>
                <li>
                    <div class="square black-square" data-toggle="tooltip" data-placement="top" title="#000000"></div>
                    Cor de fundo: deve ser utilizado preto
                </li>
                <li>
                    <div class="square white-square" data-toggle="tooltip" data-placement="top" title="#FFFFFF"></div>
                    Cor do texto: deve ser branco
                </li>
                <li>
                    <div class="square yellow-square" data-toggle="tooltip" data-placement="top" title="#FFF333"></div>
                    Links: sublinhados e de cor amarela
                </li>
                <li>
                    <div class="square white-square" data-toggle="tooltip" data-placement="top" title="#FFFFFF"></div>
                    Ícones: devem ser brancos
                </li>
                <li>
                    <div class="square white-square" data-toggle="tooltip" data-placement="top" title="#FFFFFF"></div>
                    Linhas e contornos: devem ser brancos
                </li>
            </ul>
            <br/>
            <button onclick="swapStyleSheet()" class="btn btn-primary" type="button">
                <span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Veja exemplo ao vivo! Alto contraste
            </button>


        </div>
        <div class="col-md-6">
            <img src="imgs/contraste.gif" class="img-responsive center-block border-img"
                 data-toggle="tooltip" data-placement="top"
                 alt="Animação simulando o funcionamento da Folha de Estilo com Alto Constraste em um site de universidade"
                 title="Animação simulando o funcionamento da Folha de Estilo com Alto Constraste em um site de universidade"/>

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
            Responsividade

        </div>

        <div class="subtitle text-center"> Permitir redimensionamento sem perda de funcionalidade</div>

        <div class="text">
            <p>O sítio deve ser responsivo, permitindo o redimensionamento da tela para até 200% sem perda de
                funcionalidade. Ao redimensionar a página, não deve aparecer a barra horizontal do navegador. Junto a
                isso,
                as páginas devem funcionar corretamente independente de plataformas ou navegadores.</p>

            <p>Não usar expressões como “compatível com” ou “melhor visto na resolução...”</p>


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
            <p>Apenas cor, tamanho, forma, som ou outras características sensoriais não devem ser a única maneira de
                diferenciar elementos. Combine dois ou mais elementos.</p>

            <p class="col-md-offset-1"><strong>Exemplo:</strong></p>

            <div class="well col-md-4 col-md-offset-1">
                <p>Clique no botão verde para continuar e no botão vermelho para cancelar</p>

                <button type="button" class="btn btn-danger btn-lg">

                </button>
                <button type="button" class="btn btn btn-success btn-lg pull-right">

                </button>
                <div class="clear"></div>
                <div class="legenda-errado text-center">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Errado :(
                </div>

            </div>


            <div class="well col-md-4 col-md-offset-1">
                <p>Clique no botão verde para continuar e no botão vermelho para cancelar</p>

                <button type="button" class="btn btn-danger btn-lg ">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar
                </button>

                <button type="button" class="btn btn btn-success btn-lg pull-right">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Continuar
                </button>
                <div class="clear"></div>
                <div class="legenda-certo text-center">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Certo!
                </div>

            </div>

            <div class="clear"></div>


        </div>
    </div>

</div>


<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Esquema consistente de cores e fontes
        </div>

        <div class="text">

            O sítio deve possuir uma harmonia consistente de cores e tipos de fontes em todas as páginas. Deve haver um
            padrão. Subsítios do sítio principal ou sítios de departamentos da universidade também devem adotar o mesmo
            padrão. Utilizar no máximo 3 famílias de fontes distintas.


            <div class="clear"></div>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#exemplo-tipo"
                    aria-expanded="false" aria-controls="exemplo-tipo">
                <span class="glyphicon glyphicon-console" aria-hidden="true"></span> Veja sugestão para tamanho de
                fontes
            </button>

            <div class="collapse" id="exemplo-tipo">

                <script src="https://gist.github.com/lucassandes/4e01389b981f642c1d2c.js"></script>

            </div>


        </div>
    </div>

</div>


<!-- Funcionalidade -->


<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">

            Mapa de Site
        </div>

        <div class="text text-center">
            Sítios de universidades tendem a ser grandes, portanto o sítio deve apresentar um <strong>Mapa de
                Site</strong> em forma de
            lista hierárquica contento todas ou as principais páginas do sítio.
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
            O sítio deve possuir um campo de busca. Quando a busca não encontra resultados para serem exibidos,
            <!--Na falta de resultados da busca--> devem ser fornecido links com as
            páginas mais acessadas e/ou mais importantes. Além disso, a caixa de busca deve estar presente em todas as
            páginas.


        </div>
        <div class="col-sm-5 vcenter  col-sm-offset-1"><img src="imgs/lupa.png"
                                                            alt="Ilustração de um personagem utilizando uma lupa, representando uma busca"
                                                            class="img-responsive"/></div>
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
                fornecida, utilizando-se do atributo “alt”.</p>

            <p class="hidden-sm hidden-xs">Passe o mouse na imagem ao lado para visualizar um exemplo de descrição.</p>
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
            Evitar conteúdo textual em imagens
        </div>

        <div class="text col-sm-5 vcenter  col-sm-offset-1">
            Conteúdo textual deve ser escrito no código. Textos em imagem dificultam a leitura e perdem qualidade no
            redimensionamento. Além disso, não são lidos por mecanismos de busca nem por leitores de tela.

        </div>

        <div class=" col-sm-5 vcenter">
            <img src="imgs/text-imagem.png" class="img-responsive center-block" alt="Texto escrito na imagem"/>

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

            As mensagens de erro devem ser apresentadas de maneira clara. Evitar o uso de vocabulário técnico. Quando
            ocorrer erro em
            formulários, posicionar o cursor no local do erro para facilitar a correção e não limpar o conteúdo do
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

        <div class="text text-center">
            Páginas de erro devem possuir links para a página inicial, de “Fale Conosco” e possuir um campo de busca
            evidente.
        </div>

    </div>
    <div class="clear"></div>

</div>


<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Dividir o texto em tópicos
        </div>

        <div class="text ">
            Textos na internet devem ser curtos. Por isso, divida os textos mais longos em pequenas unidades, pequenos
            parágrafos ou listas para facilitar o entendimento do conteúdo da informação.
        </div>


        <div class="col-xs-6 ">
            <?php $string = 'Imagem da página de um site de universidade em que o texto é longo, sem divisão de tópicos. Exemplifica a maneira errada de produzir textos para os sítios de universidades'; ?>
            <img src="imgs/texto-errado.png" class="img-responsive center-block border-img"
                 data-toggle="tooltip" data-placement="top"
                 alt="<?php echo $string; ?>"
                 title="<?php echo $string; ?>"/>

            <div class="legenda-errado text-center">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Errado :(
            </div>
        </div>

        <div class="col-xs-6 ">
            <?php $string = 'Imagem da página de um site de universidade em que o texto longo foi dividido em blocos menores e organizado por tópicos. Exemplifica a maneira adequada de produzir textos para os sítios de universidades'; ?>
            <img src="imgs/texto-certo.png" class="img-responsive center-block border-img"
                 data-toggle="tooltip" data-placement="top"
                 alt="<?php echo $string; ?>"
                 title="<?php echo $string; ?>"/>

            <div class="legenda-certo text-center">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Certo!
            </div>
        </div>

    </div>
    <div class="clear"></div>

</div>


<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Utilizar termos simples e claros como rótulos de menu
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
            Usar convenções
        </div>

        <div class="text ">
            Utilize convenções comuns da Internet, como por exemplo:
            links sublinhados,
            caixa de busca no canto superior direito,
            logotipo no canto superior esquerdo,
            logotipo funcionar como link para página inicial,

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
            O desenvolvedor deve navegar pelo sítio apenas pelo teclado (utilzando a tecla tab) a fim de identificar se
            a
            hierarquia das informações encontra-se disposta de forma coerente.

        </div>


        <div class="col-xs-6 ">
            <?php $string = 'Animação exemplificando a maneira errada de ordenar a leitura de tabulação.
            Ao navegar pela tecla tab, o cursor não navega de forma intuitiva e coerente'; ?>
            <img src="imgs/tabulacao-errado.gif" class="img-responsive center-block border-img"
                 data-toggle="tooltip" data-placement="top"
                 alt="<?php echo $string; ?>"
                 title="<?php echo $string; ?>"
                />

            <div class="legenda-errado text-center">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Errado :(
            </div>
        </div>
        <div class="col-xs-6 ">
            <?php $string = 'Animação exemplificando a maneira correta de ordenar a leitura de tabulação.
            Ao navegar pela tecla tab, o cursor navega de forma intuitiva e coerente, facilitando o uso do sítio por
            pessoas com limitações visuais ou motoras'; ?>
            <img src="imgs/tabulacao-certo.gif" class="img-responsive center-block border-img"
                 data-toggle="tooltip" data-placement="top"
                 alt="<?php echo $string; ?>"
                 title="<?php echo $string; ?>"/>

            <div class="legenda-certo text-center">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Certo!
            </div>
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


<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Arquivos abertos
        </div>

        <div class="text ">
            Não fornecer arquivos oficiais em formatos de arquivos abertos para edição (.doc, por exemplo), optar sempre
            pelo
            PDF.
            Ao utilizar arquivos em PDF, fornecer o conteúdo do documento em formatos acessíveis, isto é, PDFs também
            devem ter sua alternativa em HTML.

        </div>

    </div>
    <div class="clear"></div>

</div>


<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Programas universitários
        </div>

        <div class="text ">
            Facilite para os usuários a visualização de projetos e programas desenvolvidos na universidade, como por
            exemplo: programas de extenção, Iniciação Científica e Programas de Estágio.

        </div>

    </div>
    <div class="clear"></div>

</div>

<?php /*
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
*/ ?>
<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Página de cursos
        </div>

        <div class="text ">
            Na página de cursos deve haver uma pequena descrição do curso, o contato do Coordenador de Curso e a grade
            horária.
        </div>

    </div>
    <div class="clear"></div>

</div>

<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Página inicial
        </div>
        <div class="text">
            A página inicial deve evidenciar os cursos fornecidos pela universidade. Destaques e notícias principais
            devem estar antes da linha de dobra, ou seja, não podem estar no fim da página.

        </div>
    </div>

</div>


<div id="s<?php echo $i;
$i++ ?>">
    <?php echo $i; ?>
    <div class="container">
        <div class="title text-center">
            Forma de ingresso
        </div>
        <div class="text">
            O sítio deve possuir uma página explicando a forma de ingresso na universidade e as etapas do processo.
            Nessa página também deve ser fornecido o número de vagas oferecidos por curso e links para as páginas dos
            cursos oferecidos.

        </div>
    </div>

</div>


<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Rodapé
        </div>
        <div class="text">
            No rodapé do sítio deve haver o endereço da universidade e informações básicas de contato: telefone e
            e-mail.

        </div>
    </div>

</div>


<div id="s<?php echo $i;
$i++ ?>">
    <div class="container">
        <div class="title text-center">
            Precisa de ajuda?
        </div>

        <div class="text col-sm-5 vcenter  col-sm-offset-1">
            <p> Para facilitar o entendimento dessa cartilha, foi desenvolvido um <strong>template</strong> para <em>Wordpress</em>
                contemplando todas as recomendações.
            </p>

            <div class="clear"></div>
            <div class="col-md-12 row">
                <a href="template/" target="_blank" class="btn btn-default text-left full-width"
                   role="button">
                    <span class=" glyphicon glyphicon-new-window" aria-hidden="true"></span> Veja o template funcionando
                </a>
            </div>

            <div class="clear"></div>
            <div class="col-md-12 row">
                <a href="https://github.com/lucassandes/template-universidade" class="btn btn-default  text-left full-width" role="button">
                    <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Faça o download do
                    template
                </a>
            </div>
        </div>


        <div class=" col-sm-5 vcenter">
            <a href="template/"  target="_blank" title="Veja template funcionando"> <img src="imgs/print-tema.jpg" class="img-responsive img-thumbnail center-block" alt="Screenshot do template"/></a>


        </div>

        <div class="clear"></div>

    </div>

</div>


<div id="referencias">
    <div class="container">
        <div class="title bold">
            Referências
        </div>

        <div class="text">
            <ol>
                <li>KATIE SHERWIN (2014). <a href="http://www.nngroup.com/articles/university-sites/" target="_blank">University
                        Websites: Top 10 Design Guidelines</a></li>
                <li>BRASIL (2014). <a href="http://emag.governoeletronico.gov.br/" target="_blank">eMAG - Modelo de
                        Acessibilidade em Governo Eletrônico</a></li>
                <li>BRASIL (2010). <a href="http://epwg.governoeletronico.gov.br/cartilha-usabilidade" target="_blank">
                        Padrões Web em Governo Eletrônico e-PWG - Cartilha de Usabilidade.</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script>
    var style = 0;
    console.log(style);

    //tooltip inicialization
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })


    //corrigindo o javascript:void(0) para acessibilidade
    $("a:not([href])").attr("href", "javascript:void(0);");

    //toogle stylesheet
    function swapStyleSheet() {

        if (style == 0) {
            document.getElementById('pagestyle').setAttribute('href', 'css/acessibilidade.css');
            style = 1;
            console.log(style);
        }

        else {
            document.getElementById('pagestyle').setAttribute('href', 'css/default.css');
            style = 0;
            console.log(style);
        }

    }
</script>
</body>
</html>