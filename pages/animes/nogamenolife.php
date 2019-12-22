<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<!-- CONFIGURAÇÕES DO SITE -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <!-- INFORMAÇÕES, ÍCONE E TÍTULO -->
        <!-- [ALTERAR] DESCRIÇÃO DA PÁGINA! -->
	    <meta name="description" content="Criado com o objetivo de divulgar conhecimento sobre jogos e assuntos diversos da cultura geek.">
    <meta name="author" content="KŪHAKU">
    <meta name="keywords" content="kuhaku, jogos, no game no life">
    <link rel="icon" href="../../img/general/favicon.ico">
	<title>KŪHAKU - No Game No Life</title>

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">

    <!-- ESTILOS PERSONALIZADOS PARA A PÁGINA -->
    <link href="../../css/style.css" rel="stylesheet">

	<!-- CONFIGURAÇÕES PARA INTERNET EXPLORER -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body onload="alterarClasse()">

    <!-- NAVBAR -->
    <?php
        include '../../scripts/script-menu-1.php';
    ?>

    <a class="navbar-brand" href="../../index.php">KŪHAKU</a>

    <?php
        include '../../scripts/script-menu-2.php';
    ?>
    
    <p class="navbar-text text-center">"Este mundo é apenas... mais um jogo ruim." - Sora</p>

    <?php
        include '../../scripts/script-menu-3.php';
    ?>
	<!-- FIM DA NAVBAR -->

	
	
	<!-- CONTAINER E LINHA DA PÁGINA -->
	<div class="container-fluid">
		<div class="row">
			
			
			
            <!-- MENU LATERAL -->
            <?php
                include '../../scripts/script-menu-lateral-3.php';
            ?>

            <script language="javascript">
                function alterarClasse() {
                    document.getElementById("nogamenolife").setAttribute('class', `active`);
                }
            </script>
			<!-- FIM DO MENU LATERAL -->



            <!-- CONTEÚDO DA LATERAL DIREITA -->
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">No Game No Life</h1>

                <!--<div class="alert alert-warning" role="alert">
                    Atenção! Esta página ainda está em desenvolvimento!
                </div>-->
                <img class="img-responsive center-block" src="../../img/nogamenolife/thumbnails/thumbnail (1).png" alt="Imagem No Game No Life" title="No Game No Life!">

                <br>

                <div class="jumbotron" style="margin-top: 15px; margin-bottom: 25px;">
                <h1>Sinopse</h1>
                <p>No Game No Life é um anime dos gêneros: aventura, comédia, surreal e fantasia; que foca em <strong>Sora</strong> e <strong>Shiro</strong>, dois irmãos NEET e Hikikomoris que formam a dupla lendária chamada de "KŪHAKU". Eles veem o mundo real como apenas um jogo ruim; porém, um estranho e-mail desafiando eles à uma partida de xadrez muda tudo - o irmão e a irmã são levados a outro mundo onde conhecem Tet, que se assume como rei desse mundo.</p>
                </div>

                <!-- SEÇÃO IMAGENS -->
                <h2 class="sub-header">Imagens!</h2>
                <br>

                <!-- LINHA -->
                <div class="row">
                    <!--<div class="col-md-5">
                        <img src="../../img/nogamenolife/thumbnails/thumbnail (2).png" class="img-responsive center-block" width="320px" alt="Shiro" title="Shiro" style="border:solid;">
                        <br>
                    </div>

                    <div class="col-md-7">	  
                        <h3 class="text-center">Shiro</h3>
                        <br>
                        <p>
                            Como definir a Shiro? Bem, inicialmente você logo percebe que ela é uma garota diferente. Irmã de Sora, Shiro é um gênio dos jogos de raciocínio lógico e cálculos matemáticos. Impossível não se apaixonar: junto com o irmão, os dois buscam 'conquistar o mundo', e eu tenho certeza de que vão conseguir. 
                        </p>
                        <br>
                    </div>-->
                    <div class="col-md-4">
                        <img src="../../img/nogamenolife/thumbnails/card-(1).jpg" class="img-responsive center-block" width="320px" alt="Card" title="Chlammy" style="border:solid;"><br>
                    </div>
                    <div class="col-md-4">
                        <img src="../../img/nogamenolife/thumbnails/card-(2).jpg" class="img-responsive center-block" width="320px" alt="Card" title="Izuna" style="border:solid;"><br>
                    </div>
                    <div class="col-md-4">
                        <img src="../../img/nogamenolife/thumbnails/card-(3).jpg" class="img-responsive center-block" width="320px" alt="Card" title="Shiro" style="border:solid;"><br>
                    </div>
                </div>
                <!-- FIM DA LINHA -->



                <br><br>
            </div>
            <!-- FIM DO CONTEÚDO DA LATERAL DIREITA -->



            <!-- RODAPÉ -->
            <?php
                include '../../scripts/script-footer-3.php';
            ?>
			<!-- FIM DO RODAPÉ -->



        </div>
	</div>
	<!-- FIM DO CONTAINER E LINHA DA PÁGINA -->

	
	
	<!-- BOOTSTRAP JAVASCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>