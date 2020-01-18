<?php 
    include_once 'config.php'; 
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="geo.region" content="BR-RJ" >
        <meta name="geo.placename" content="Rio de Janeiro" >
        <meta name="geo.position" content="-22.903052;-43.18617" >
        <meta name="ICBM" content="-22.903052, -43.18617" >
        <meta name="keywords" content="gapconnect, gapconsultoria, emprestimo pessoal, consultoria financeira, financeira, emprestimo, metas financeiras ">
        <meta name="description" content="" >
        <meta name="author" content="@jlbnwill">
        <meta name="application-name" content="Gap connect consultoria">
        <link rel="shortcut icon" href="assets/img/icones/img-shout-gap.png" type="image/png">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <title>Gap Connect Consultoria</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg gapopacity">
            <a href="#" class="gapcortext" >
                <img class="ml-md-5 ml-sm-0" src="assets/img/slogan.png"  width="150" height="60" alt="Slogan gapconnect">
            </a>
            <button class="navbar-toggler gapborder" id="botaoroda" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Alterna navegação">
                <span class="gaproda">═</br></span>
            </button>
            <div id="navbarMenu" class="navbar-collapse collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#quemsomos">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#vantagens">Vantagens</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-danger " href="#contato">Entra em Contato</a>
                    </li>           
                </ul>
            </div>
        </nav>
        <header class="container-fluid-lg mb-0 text-light">
            <div class="bg-principal text-center pt-md-5 pt-sm-3 pb-5 py-lg-5 py-sm-0">
                <h1 class="h3 mt-md-5 mt-sm-5 mb-5 my-lg-5 my-sm-0 principal">Gap connect consultoria sob medida para você!</h1>
                <p class="lead">Vamos trabalhar junto para conquistar o tão sonhado.</p>
                <b class="mb-0 lead"> Agende a primeira reunião gratuita presencial ou pelo telefone!</b>
            </div>
        </header>
        <article class="container-fluid pl-5 text-center mt-5 mb-5" id="vantagens">
            <h2 class="h2 pb-5 borda_trans">Quais são suas metas?</h2>
            <div class="row pt-5 py-5">
                <div class="col-lg-4 col-md-6  col-sm-12">
                    <div class="">
                        <img src="assets/img/icones/casa_propria.png" class="img-fluid" style="max-width:280px">
                        <p class="h5">Compra sua casa própria</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  col-sm-12">
                    <div class="">
                        <img src="assets/img/icones/chave_carro.png" class="img-fluid mb-4" style="max-width:280px">
                        <p class="h5">Comprar um novo carro</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  col-sm-12">
                    <div class="">
                        <img src="assets/img/icones/casa_praia.png" class="img-fluid" style="max-width:280px">
                        <p class="h5">Comprar uma casa de praia</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  col-sm-12">
                    <div class="">
                        <img src="assets/img/icones/viagem.png" class="img-fluid" style="max-width:280px">
                        <p class="h5">Fazer uma viagem dos sonhos</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="">
                        <img src="assets/img/icones/aposentar.png" class="img-fluid" style="max-width:280px">
                        <p class="h5">Se aponsentar cedo</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  col-sm-12">
                    <div class="">
                        <img src="assets/img/icones/dividas.png" class="img-fluid" style="max-width:280px">
                        <p class="h5">Se ver livra das dívidas</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="">
                        <img src="assets/img/icones/planejar.png" class="img-fluid" style="max-width:280px">
                        <p class="h5">Planejar seu futuro</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  col-sm-12">
                    <div class="">
                        <img src="assets/img/icones/faculdade.png" class="img-fluid" style="max-width:280px">
                        <p class="h5">Pagar a faculdade dos filhos</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  col-sm-12">
                    <div class="">
                        <img src="assets/img/icones/1.png" class="img-fluid" style="max-width:280px">
                        <p class="h5"></p>
                    </div>
                </div>
            </div>
        </article>
        <article class="container-fluid  pt-5 gapbgred" id="quemsomos" >
            <div class="ml-5">
                <span class="h2 d-block text-light">Como funciona a consultoria financeira?</span>
            </div>
            <div class="row mt-5 py-md-3 py-sm-0 justify-content-center">
                <div class="col-md-4 col-sm-12 text-center ">
                    <div class="bg-light my-md-3 my-sm-0 rounded-pill efeito">
                        <img src="assets/img/icones/agenda.png" id="move">
                        <h4>Agendamento</h4>
                        <p class="lead  p-2" id="janela">Agendamos uma reunião gratuita, presencial ou pelo telefone.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-center efeito-2">
                    <div class="bg-light my-md-3 my-sm-0 rounded-pill ">
                        <img src="assets/img/icones/reunião.png">
                        <h4>1º Reunião gratuita</h4>
                        <p class="lead  p-2" id="janela-2">Alinhamos as necessidades e objetivo do trabalho.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-center efeito-3">
                    <div class="bg-light my-md-3 my-sm-0 rounded-pill">
                        <img src="assets/img/icones/diagnostico.png">
                        <h4>Diagnóstico</h4>
                        <p class="lead p-2" id="janela-3">Apresentamos um diagnostico financeiro com base na situação do cliente.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-center efeito-4">
                    <div class="bg-light my-md-3 my-sm-0 rounded-pill">
                        <img src="assets/img/icones/plano-acao.png">
                        <h4>Plano de Ação</h4>
                        <p class="lead p-2" id="janela-4">Elaboramos um plano de ação com o fim de alcançarmos os objetivos.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 align-self-center text-center mb-5 efeito-5">
                    <div class="bg-light my-md-3 my-sm-0 rounded-pill">
                        <img src="assets/img/icones/execucao.png">
                        <h4>Execução e acompanhamento</h4>
                        <p class="lead p-2" id="janela-5">Colocamos o plano em prática, se necessário, revisamos.</p>
                    </div>
                </div>    
            </div>
        </article>
        <article class="container-fluid gapbg pt-0" id="contato">
            <div class="container pb-5">
                <div class="text-center">
                    <span class="h6 d-block text-light pt-5">A gap connect tem uma solução ideal para você!</span>
                    <h5 class="display-4 text-danger pb-5">Fale Conosco</h5>
                </div>
                <!--Sucesso no envio-->
                <div class="j_seletor alert alert-success" id="j_sucesso" role="alert" >
                    <h4 class="alert-heading">obrigado!</h4>
                    <p>Dentro de no máximo 3 dias, um de nossos consultores entrará em contato com você por telefone.</p>
                    <hr>
                    <p class="mb-0">Não pedidos nenhum deposito adiantado, para efetuar nenhuma transação.</p>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col">
                        <form id="jcontrol" class="bg-light rounded p-4 mb-5 box-shadow" action="<?= HOME ?>/js/requisicao/requisicao.php">
                            <div class="form-group">
                                <label for="nome">Nome Completo*</label>
                                    <input type="text" name="name" class="form-control" id="nome" aria-describedby="nome" required >
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 col-sm-12">
                                    <label for="telefone">Telefone*</label>
                                    <input type="tel" name="telefone" id="telefone" class="form-control" id="telefone" placeholder="(00) 0000-0000">
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <label for="telefone">Celular*</label>
                                    <input type="tel" name="celular" id="celular" class="form-control" id="celular" placeholder="(00) 90000-0000" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 col-sm-12">
                                    <label for="cpf">cpf*</label>
                                    <input type="tel" name="cpf" id="cpf" class="form-control" id="cpf" placeholder="somente numeros" required >
                                </div>
                                <div class="col-md-6 col-sm-12">
                                <label for="convenio">Qual seu convenio?</label>
                                <select class="form-control" name="convenio" id="convenio">
                                    <option></option>
                                    <option>INSS Dataprev</option>
                                    <option>Siape</option>
                                    <option>Outro</option>
                                </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" method="POST">Enviar</button>
                            <!--Erro-->
                            <div class="j_seletor alert alert-danger" id="j_error" role="alert">
                                Tente novamente, houve um erro!
                                Caso error persiste, ligue para nos.
                            </div>
                            <!--Enviando-->
                            <div class="d-flex justify-content-center" >
                                <div class="j_seletor spinner-border" role="status" id="j_enviando">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </article>
        <article class="container">
            <div class="text-center">
                <span class="h6 d-block text-light pt-5"></span>
                <h5 class="display-4 text-danger pb-5">Dúvidas frequentes</h5>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-sm-12" id="duvidasfrequentes" data-children=".pergunta">
                    <div class="pergunta">
                        <a class="lead btn btn-block mb-3" data-toggle="collapse" data-parent="#duvidasfrequentes" href="#pergunta1" aria-expanded="true" aria-controls="pergunta1">➵Qual a utilidade de uma consultoria financeira?</a>
                        <div id="pergunta1" class="collapse pt-2 pb-5" role="tabpanel">
                            <p>Infelizmente, a educação financeira não é algo ensinado no cotidiano, o que obriga as pessoas a buscarem métodos alternativos, tendo em vista que as escolas, por exemplo, não oferecem qualquer tipo de educação financeira. Sendo assim, a consultoria financeira particular é considerada um método eficaz para evitar erros e prejuízos financeiros.
                            A consultoria financeira particular oferece uma visão especializada, a fim de realizar o acúmulo de valores e bens, de forma que a organização de finanças seja atingida com sucesso pelo cliente. Tal método é recomendado para pessoas que desejam evitar problemas financeiros ou para quem já os possui. Além desses fatores, é possível adotar a consultoria financeira para conhecer as alternativas de investimentos disponíveis no mercado, definir objetivos financeiros concretos, elaborar um planejamento financeiro focado, negociar ou se livrar de dívidas, dentre outros.</p>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="pergunta">
                        <a class="lead btn btn-block mb-3" data-toggle="collapse" data-parent="#duvidasfrequentes" href="#pergunta2" aria-expanded="true" aria-controls="pergunta2">➵A consultoria financeira pessoal pode ser aplicada à todos?</a>
                        <div id="pergunta2" class="collapse" role="tabpanel">
                            <p>A consultoria financeira é cabível a todos. Caso o cliente deseje ter as finanças mapeadas em um curto espaço de tempo, recomendações de aplicações financeiras, dicas profissionais, perfil dos seus gastos identificados e possíveis mudanças no mercado, a ajuda de um consultor financeiro pode lhe ser útil</p>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="pergunta">
                        <a class="lead btn btn-block mb-3" data-toggle="collapse" data-parent="#duvidasfrequentes" href="#pergunta3" aria-expanded="true" aria-controls="pergunta3">➵Relizam visita aos finais de semana ?</a>
                        <div id="pergunta3" class="collapse" role="tabpanel">
                            <p>Não, trabalhos em horário comercia. Caso aza a nessecidade podemos exceder o horário comercial mais nunca realizamos reunião ou  visitas aos fim de semana.</p>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="pergunta">
                        <a class="lead btn btn-block mb-3" data-toggle="collapse" data-parent="#duvidasfrequentes" href="#pergunta4" aria-expanded="true" aria-controls="pergunta4">➵A Gap Connect pedir realizanção de algum deposito?</a>
                        <div id="pergunta4" class="collapse" role="tabpanel">
                            <p>Nunca, pedimos a nosso cliente efetuação de nenhuma deposito de antecipação pelo nossos serviços. Somentes realizamos transações financeira ápos o acordo por meio de contrato na presença do cliente.</p>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="pergunta">
                        <a class="lead btn btn-block mb-3" data-toggle="collapse" data-parent="#duvidasfrequentes" href="#pergunta5" aria-expanded="true" aria-controls="pergunta5">➵É preciso ter investimento para participa da consulta financeira?</a>
                        <div id="pergunta5" class="collapse" role="tabpanel">
                            <p>Não. Intendemos que o investimento pessoal tem varias vertentes, que vai alem do que esta relacionado a investimento financeiro. Se você que fazer aquela viagem ou compra aquele carro, nós o ajudaremos nesses e qual for outra necessidade pessoal que deseja esta realizando ou solucionando.</p>
                        </div>
                    </div>
                </div>
            </div>
            <span class="h6 d-block text-light pt-5"></span>
        </article>
        <footer class="bg-dark text-white">
            <div class="container py-4">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="py-5">
                            <img id="gap" src="assets/img/slogan.png" >
                            <p class="lead pt-4">Bem vindo a Gap consultoria. </br>Somos uma união de consultores, com um equipe treinada e qualificada para melhor atende-lo. </br>Fazemos variás simulações antes de traçamos o melhor plano para nossos clientes.</br>
                               
                            </p>
                        </div>
                        <div class="borda_footer"></div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <p class="pt-5">Venha se consulta conosco!</p>
                        <h6 class="h1 ">Fale conosco</h6>
                        <div class="borda_footer" id="terceira"></div>
                        
                        <address class="">
                            <a class="text-decoration-none" href="mailto:contato@gapconnectconsultoria.com.br">
                                <p class="text-white">contato@gapconnectconsultoria.com.br</p>
                            </a>
                            <a class="text-decoration-none text-white" href="tel:213655-9999">
                                <p class="lead">(21)3655-9999</p>
                            </a>
                            <a class="text-decoration-none text-white" href="https://www.google.com/maps/place/Servi%C3%A7o+Registral+do+11%C2%BA+Of%C3%ADcio+de+Im%C3%B3veis/@-22.9017288,-43.1811983,3a,75y,331.25h,93.28t/data=!3m7!1e1!3m5!1s_5cl0nkm3DxZFklqHiqdyQ!2e0!6s%2F%2Fgeo3.ggpht.com%2Fcbk%3Fpanoid%3D_5cl0nkm3DxZFklqHiqdyQ%26output%3Dthumbnail%26cb_client%3Dsearch.TACTILE.gps%26thumb%3D2%26w%3D211%26h%3D120%26yaw%3D331.52408%26pitch%3D0%26thumbfov%3D100!7i13312!8i6656!4m5!3m4!1s0x997f5c5b8fdb1b:0x636b1fc1fa537351!8m2!3d-22.9015114!4d-43.1813171"><p class="lead">Av. Presidente Vargas, n°542, 13ºandar - sala 1304 - Rio de Janeiro/RJ.</p></a>
                        </address>
                    </div>
                </div>
            </div>
            <div class="border-top container-fluid row justify-content-between text-center"  style="font-size: 15px">
                <p class="col-lg-5 col-sm-6">Gap ©2019 Todos os direitos reservados</p>
                <p class="col-lg-3 col-sm-6">Desenvolvido por ▬Develops <kbd>WRD</kbd>▬</p>
            </div>
        </footer>        
        <!--Fim do codigo-->
        <script type="text/javascript" src="assets/js/jquery-3.4.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="assets/js/jquery.mask.js"></script>
        <script type="text/javascript" src="assets/js/app.js"></script>
    </body>   
</html>