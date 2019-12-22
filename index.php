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
	<link rel="icon" href="img/general/favicon.ico">
	<title>KŪHAKU</title>

	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

	<!-- ESTILOS PERSONALIZADOS PARA A PÁGINA -->
	<link href="css/style.css" rel="stylesheet">

	<!-- CONFIGURAÇÕES PARA INTERNET EXPLORER -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body onload="alterarClasse()">

	<!-- NAVBAR -->
	<?php
		include 'scripts/script-menu-1.php';
	?>

	<a class="navbar-brand" href="index.php">KŪHAKU</a>

	<?php
		include 'scripts/script-menu-2.php';
	?>
	
	<p class="navbar-text text-center">"Não há nada mais incrível neste mundo do que o desconhecido!" - Jibril</p>

	<?php
		include 'scripts/script-menu-3.php';
	?>
	<!-- FIM DA NAVBAR -->

	

	
	<!-- CONTAINER E LINHA DA PÁGINA -->
	<div class="container-fluid">
		<div class="row">
			
			<!-- MENU LATERAL -->
			<?php
				include 'scripts/script-menu-lateral-1.php';
			?>

			<script language="javascript">
				function alterarClasse() {
					document.getElementById("index").setAttribute('class', `active`);
				}
			</script>
			<!-- FIM DO MENU LATERAL -->
			
			



			<!-- CONTEÚDO DA LATERAL DIREITA -->
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Página Inicial</h1>



				<!-- SEÇÃO ÍCONES DE PERSONAGENS -->
				<div class="row placeholders">
					<div class="col-xs-6 placeholder">
						<img src="img/index/thumbnails/lieat.png" width="200" height="200" class="img-responsive" alt="Imagem LiEat" title="Imagem LiEat">
						<h4>LiEat</h4>
						<span class="text-muted">"O Dragão que Come Mentiras"</span>
					</div>

					<div class="col-xs-6 placeholder">
						<img src="img/index/thumbnails/oneshot.png" width="200" height="200" class="img-responsive" alt="Imagem OneShot" title="Imagem OneShot">
						<h4>OneShot</h4>
						<span class="text-muted">"O Salvador Deste Mundo"</span>
					</div>
				</div>
				<!-- FIM DA SEÇÃO ÍCONES DE PERSONAGENS -->

				
				
				<!-- SEÇÃO DE PÁGINAS -->
				<h2 class="sub-header">Jogos!</h2>

				<!-- LINHA -->
				<div class="row">
					<div class="col-sm-6">
						<div class="thumbnail">
							<img src="img/index/thumbnails/lieat.png" width="500px" alt="Imagem LiEat" title="Imagem LiEat">
							<div class="caption text-center">
								<h3>LiEat</h3>
								<p>Primeiro capítulo da história de Efina & Leo, em uma aventura na cidade-fantasma "Vermilion Town".</p>
								<div title="LiEat"><a class="btn btn-primary" href="pages/games/lieat.php" role="button">Visitar &#62;</a></div>
							</div>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="thumbnail">
							<img src="img/index/thumbnails/oneshot.png" width="500px" alt="Imagem OneShot" title="Imagem OneShot">
							<div class="caption text-center">
								<h3>OneShot</h3>
								<p>A história de Niko, explorando um mundo que há muito tempo perdeu seu Sol.</p>
								<div title="Em Construção!"><a class="btn btn-primary disabled" href="pages/games/oneshot.php" role="button">Visitar &#62;</a></div>
							</div>
						</div>
					</div>
				</div>
				<!-- FIM LINHA -->

				<!-- LINHA -->
				<div class="row">
					<div class="col-sm-6">
						<div class="thumbnail">
							<img src="img/index/thumbnails/lieat2.png" width="500px" alt="Imagem LiEat II" title="Imagem LiEat II">
							<div class="caption text-center">
								<h3>LiEat II</h3>
								<p>O tempo passa, e os dois continuam sua busca por informações, dessa vez em um resort onde houve misteriosos acontecimentos.</p>
								<div title="LiEat II"><a class="btn btn-primary" href="pages/games/lieat2.php" role="button">Visitar &#62;</a></div>
							</div>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="thumbnail">
							<img src="img/index/thumbnails/lieat3.png" width="500px" alt="Imagem LiEat III" title="Imagem LiEat III">
							<div class="caption text-center">
								<h3>LiEat III</h3>
								<p>Último capítulo da jornada, Teo & Efi agora vão a um leilão que foi marcado como alvo por um ladrão-fantasma.</p>
								<div title="LiEat III"><a class="btn btn-primary" href="pages/games/lieat3.php" role="button">Visitar &#62;</span></a></div>
							</div>
						</div>
					</div>
				</div>
				<!-- FIM DA LINHA -->

				<h2 class="sub-header">Animes!</h2>

				<!-- LINHA -->
				<div class="row">
					<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
						<div class="thumbnail">
							<img src="img/index/thumbnails/nogamenolife.jpg" width="500px" alt="Imagem No Game No Life" title="Imagem No Game No Life">
							<div class="caption text-center">
								<h3>No Game No Life</h3>
								<p>A aventura dos dois irmãos gamers no mundo de Disboard!</p>
								<div title="No Game No Life"><a class="btn btn-primary" href="pages/animes/nogamenolife.php" role="button">Visitar &#62;</a></div>
							</div>
						</div>
					</div>
				</div>
				<!-- FIM DA LINHA -->

				<h2 class="sub-header">Outros!</h2>

				<!-- LINHA -->
				<div class="row">
					<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
						<div class="thumbnail">
							<img src="img/index/thumbnails/sobrenos.png" width="500px" alt="Imagem Sobre Nós" title="Imagem Sobre Nós">
							<div class="caption text-center">
								<h3>Sobre Nós</h3>
								<p>Quer saber mais sobre o desenvolvimento deste site?</p>
								<div title="Sobre Nós"><a class="btn btn-primary" href="pages/sobrenos.php" role="button">Visitar &#62;</a></div>
							</div>
						</div>
					</div>
				</div>
				<!-- FIM DA LINHA -->


				<!-- FIM DA SEÇÃO DE PÁGINAS -->
				

				
			</div>
			<!-- FIM DO CONTEÚDO DA LATERAL DIREITA -->



			<!-- RODAPÉ -->
			<?php
				include 'scripts/script-footer-1.php';
			?>
			<!-- FIM DO RODAPÉ -->



		</div>
	</div>
	<!-- FIM DO CONTAINER E LINHA DA PÁGINA -->

	
	
	<!-- BOOTSTRAP JAVASCRIPT -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>