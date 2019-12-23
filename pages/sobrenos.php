<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<!-- CONFIGURAÇÕES DO SITE -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- INFORMAÇÕES, ÍCONE E TÍTULO -->
	<meta name="description" content="Criado com o objetivo de divulgar conhecimento sobre jogos e assuntos diversos da cultura geek.">
	<meta name="author" content="KŪHAKU">
	<meta name="keywords" content="kuhaku, jogos">
	<link rel="icon" href="../img/general/favicon.ico">
	<title>KŪHAKU - Sobre Nós</title>

	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

	<!-- ESTILOS PERSONALIZADOS PARA A PÁGINA -->
	<link href="../css/style.css" rel="stylesheet">

	<!-- CONFIGURAÇÕES PARA INTERNET EXPLORER -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<style>
		body .main, .lead {
			font-size: 1.3em !important;
		}
	</style>
</head>

<body onload="alterarClasse()">

	<!-- NAVBAR -->
	<?php
		include '../scripts/script-menu-1.php';
	?>

	<a class="navbar-brand" href="../index.php">KŪHAKU</a>

	<?php
		include '../scripts/script-menu-2.php';
	?>
	
	<p class="navbar-text text-center">"O KŪHAKU nunca perde!" - Sora & Shiro</p>

	<?php
		include '../scripts/script-menu-3.php';
	?>
	<!-- FIM DA NAVBAR -->

	
	
	<!-- CONTAINER E LINHA DA PÁGINA -->
	<div class="container-fluid">
		<div class="row">
			
			
			
			<!-- MENU LATERAL -->
			<?php
				include '../scripts/script-menu-lateral-2.php';
			?>

			<script language="javascript">
				function alterarClasse() {
					document.getElementById("sobrenos").setAttribute('class', `active`);
				}
			</script>
			<!-- FIM DO MENU LATERAL -->



            <!-- CONTEÚDO DA LATERAL DIREITA -->
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Sobre Nós</h1>
                
                <!-- LINHA -->
                <div class="row">
                    <div class="col-md-4">
                        <img src="../img/sobrenos/image1.jpg" alt="Kūhaku" class="img-responsive" style="border:double;" title="Kūhaku">
                    </div>

                    <div class="col-md-7">
                        <br>
                        <p class="lead"><strong>Yaaay!</strong> Bem-vindo!</p>
                        <br>
                        <p>Este é o projeto do site KŪHAKU! O objetivo é divulgar conhecimento sobre jogos e outros assuntos variados, da cultura geek. Também serve como objeto de estudo para essa vasta área da Tecnologia da Informação.</p>
                    </div>
                </div>
                <!-- FIM DA LINHA -->

                <br>
                <hr>
                <br>

                <!-- LINHA -->
                <div class="row">
                    <div class="col-md-7">
                        <br>
                        <p class="lead">Desenvolvimento</p>
                        <br>
                        <p>Atualmente o site é composto por alguns recursos como: <strong>HTML</strong>, <strong>CSS</strong>, <strong>JavaScript</strong> e <strong>PHP</strong>, além do framework <a href="https://getbootstrap.com/docs/3.3/" target="_blank">Bootstrap</a> também!</p>
						<p>Desenvolvido de forma independente, o site vai recebendo mais atualizações com novas páginas e conteúdo. Nenhum dos conteúdos de mídia deste site (imagens, vídeos & áudio) é de minha autoria, e pertence a seus respectivos criadores.</p>
                    </div>
					<br>
                    <div class=" col-md-offset-1 col-md-4">
                        <img src="../img/sobrenos/image2.png" alt="Kūhaku" class="img-responsive" style="border:double;" title="Kūhaku">
                    </div>
                </div>
                <!-- FIM DA LINHA -->

                <br>
                <hr>
                <br>

				<!-- LINHA -->
                <div class="row">
                    <div class="col-md-4">
                        <img src="../img/sobrenos/image3.png" alt="Kūhaku" class="img-responsive" style="border:double;" title="Kūhaku">
                    </div>

                    <div class="col-md-7">
                        <br>
                        <p class="lead">GitHub</p>
                        <br>
                        <p>Você sabia? O código-fonte deste site está disponível no GitHub! Caso queira ajudar no desenvolvimento, corrigir algum erro ou bug, ou ainda ajudar de qualquer outra maneira, basta entrar nesse link:</p>
						<br>
						<a href="https://github.com/AloneInAbyss/site-kuuhaku/" class="btn btn-primary" role="button" target="_blank">GitHub</a>
                    </div>
                </div>
                <!-- FIM DA LINHA -->



                <br><br>
            </div>
            <!-- FIM DO CONTEÚDO DA LATERAL DIREITA -->



            <!-- RODAPÉ -->
			<?php
				include '../scripts/script-footer-2.php';
			?>
			<!-- FIM DO RODAPÉ -->



        </div>
	</div>
	<!-- FIM DO CONTAINER E LINHA DA PÁGINA -->

	
	
	<!-- BOOTSTRAP JAVASCRIPT -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>