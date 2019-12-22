<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<!-- CONFIGURAÇÕES DO SITE -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- INFORMAÇÕES, ÍCONE E TÍTULO -->
	<meta name="description" content="LiEat é um jogo criado no Wolf RPG Maker por Miwashiba, disponível na plataforma do Steam.">
	<meta name="author" content="KŪHAKU">
	<meta name="keywords" content="kuhaku, jogos, lieat">
	<link rel="icon" href="../../img/general/favicon.ico">
	<title>KŪHAKU - LiEat</title>

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
	
	<p class="navbar-text text-center">"Se uma mentira não é descoberta... não é bem uma mentira." - Leo</p>
	
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
					document.getElementById("lieat").setAttribute('class', `active`);
				}
			</script>
			<!-- FIM DO MENU LATERAL -->



			<!-- CONTEÚDO DA LATERAL DIREITA -->
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">LiEat</h1>



				<!-- SEÇÃO DE PERSONAGENS -->
				<div class="row placeholders">
					<div class="col-xs-6 col-sm-4 placeholder">
						<img src="../../img/lieat/characters/efina.jpg" width="200" height="200" class="img-responsive" alt="Efina" title="Efina">
						<h4>Efina</h4>
					</div>

					<div class="col-xs-6 col-sm-4 placeholder">
						<img src="../../img/lieat/characters/leo.jpg" width="200" height="200" class="img-responsive" alt="Leo" title="Leo">
						<h4>Leo</h4>
					</div>

					<div class="col-xs-6 col-sm-4 placeholder">
						<img src="../../img/lieat/characters/neil.jpg" width="200" height="200" class="img-responsive" alt="Neil" title="Neil">
						<h4>Neil</h4>
					</div>
					
					<div class="col-xs-6 col-sm-4 placeholder">
						<img src="../../img/lieat/characters/keith.jpg" width="200" height="200" class="img-responsive" alt="keith" title="Keith">
						<h4>Keith</h4>
					</div>

					<div class="col-xs-6 col-sm-4 placeholder">
						<img src="../../img/lieat/characters/rachel.jpg" width="200" height="200" class="img-responsive" alt="Rachel" title="Rachel">
						<h4>Rachel</h4>
					</div>

					<div class="col-xs-6 col-sm-4 placeholder">
						<img src="../../img/lieat/characters/brett.jpg" width="200" height="200" class="img-responsive" alt="Brett" title="Brett">
						<h4>Brett</h4>
					</div>

					<div class="col-xs-6 col-sm-4 placeholder">
						<img src="../../img/lieat/characters/carol.jpg" width="200" height="200" class="img-responsive" alt="Carol" title="Carol">
						<h4>Carol</h4>
					</div>

					<div class="col-xs-6 col-sm-4 placeholder">
						<img src="../../img/lieat/characters/rosalie.jpg" width="200" height="200" class="img-responsive" alt="Rosalie" title="Rosalie">
						<h4>Rosalie</h4>
					</div>

					<div class="col-xs-offset-3 col-xs-6 col-sm-offset-0 col-sm-4 placeholder">
						<img src="../../img/lieat/characters/levin.jpg" width="200" height="200" class="img-responsive" alt="Levin" title="Levin">
						<h4>Levin</h4>
					</div>
				</div>
                <!-- FIM DA SEÇÃO DE PERSONAGENS -->
                
                
				
				<!-- SEÇÃO DE INTRODUÇÃO -->
                <h2 class="sub-header">Introdução!</h2>

                <!-- ÍCONE LIEAT -->
				<div class="row">
                    <figure class="text-center">
                        <img src="../../img/general/text-lieat.png" class="img-responsive center-block" alt="LiEat" title="LiEat">
                        <figcaption><small>"O dragão que come mentiras e o vampiro vermelho"</small></figcaption>
                    </figure>
                </div>
                <!-- FIM DO ÍCONE LIEAT -->

                <!-- LINHA COM AS INFORMAÇÕES -->
				<div class="row">
                    <div class="col-md-offset-1 col-md-10 col-md-offset-1">

                        <br>
                        <hr>
                        <br>

                        <!-- LINHA -->
                        <div class="row">
                            <div class="col-md-7">	  
                                <h3 class="text-center">Sobre LiEat!</h3>
                                <br>
                                <p>
                                    LiEat foi criado por <strong>Miwashiba</strong> no <strong>Wolf RPG Maker</strong> em Abril de 2014, lançado na plataforma do Steam em 2016, e possui uma história dividida em 3 capítulos. A versão do Steam já inclui todos os capítulos.
                                </p>
                                <p>
                                    Versão do Steam: <a href="http://store.steampowered.com/app/373770/LiEat/" title="Página do LiEat no Steam!" target="_blank">LiEat</a>
                                </p>
                                <p>
                                    Desenvolvedor: <a href="http://store.steampowered.com/search/?developer=△○□×%20%28Miwashiba%29&snr=1_5_9__400" title="Jogos de Miwashiba (△○□×)" target="_blank">Miwashiba</a>
                                </p>
                                <p>
                                    Distribuidora: <a href="http://store.steampowered.com/search/?publisher=AGM%20PLAYISM" title="Jogos da AGM Playism" target="_blank">AGM Playism</a>
                                </p>
                                <br>
                            </div>
                                
                            <div class="col-md-5">
                                <figure>
                                    <img src="../../img/lieat/gallery/gallery (2).png" class="img-responsive center-block" width="320px" alt="LiEat" title="LiEat">
                                    <figcaption class="text-center"><small>Uma curiosa jornada...</small></figcaption>
                                </figure>
                            </div>
                        </div>
                        <!-- FIM DA LINHA -->

                        <br>
                        <hr>
                        <br>

                        <!-- LINHA -->
                        <div class="row">
                            <div class="col-md-5">
                                <figure>
                                    <img src="../../img/lieat/gallery/gallery (3).png" class="img-responsive center-block" width="320px" alt="Efina" title="Efina">
                                    <figcaption class="text-center"><small>Bem-vindo a LiEat!</small></figcaption>
                                </figure>
                                <br>
                            </div>

                            <div class="col-md-7">	  
                                <h3 class="text-center">Efina & Leo</h3>
                                <br>
                                <p>
                                    <strong>Efina</strong> é uma jovem garota muito especial. Ela é curiosa. Ela é otimista. Ela tem uma habilidade muito incomum, e, junto com <strong>Leo</strong>, os dois viajam pelas cidades em busca de informações (e dinheiro). Este primeiro arco da história fala sobre a chegada desses dois à <strong>"Cidade Vermilion"</strong>.
                                </p>
                                <br>
                            </div>
                        </div>
                        <!-- FIM DA LINHA -->

                        <br>
                        <hr>
                        <br>

                        <!-- LINHA COM LINKS -->
                        <div class="row">
                            <p class="lead text-center">Outros Jogos!</p>
                            <p>
                                LiEat foi criado por <strong>Miwashiba</strong> no <strong>Wolf RPG Maker</strong> e é dividido em três capítulos, sendo o desta página o <strong>primeiro</strong> deles. Você pode acessar a página de cada um nesses links:
                            </p>

                            <br>

                            <!-- LINHA -->
                            <div class="row">
                                <div class="col-xs-4">
                                    <a href="lieat.php"><img src="../../img/general/link-lieat.png" class="img-responsive center-block efeito-fade" alt="LiEat" title="LiEat"></a>
                                </div>

                                <div class="col-xs-4">
                                    <a href="lieat2.php"><img src="../../img/general/link-lieat2.png" class="img-responsive center-block efeito-fade" alt="LiEat II" title="LiEat II"></a>
                                </div>

                                <div class="col-xs-4">
                                    <a href="lieat3.php"><img src="../../img/general/link-lieat3.png" class="img-responsive center-block efeito-fade" alt="LiEat III" title="LiEat III"></a>
                                </div>
                            </div>
                            <!-- FIM DA LINHA -->
                        </div>
                        <!-- FIM DA LINHA COM LINKS -->
				
                        <br>
                        <hr>
                        <br>

                        <!-- LINHA COM MODALS -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="thumbnail">
                                    <img src="../../img/lieat/thumbnails/thumbnail (1).png" alt="Introdução" title="Introdução">
                                    <!-- CAPTION -->
                                    <div class="caption text-center">
                                        <h3>Introdução</h3>
                                        <!-- BOTÃO DO MODAL-->
                                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal1">Visualizar &#62;</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="thumbnail">
                                    <img src="../../img/lieat/thumbnails/thumbnail (2).png" alt="Cidade Vermilion" title="Cidade Vermilion">
                                    <!-- CAPTION -->  
                                    <div class="caption text-center">
                                        <h3>Cidade Vermilion</h3>
                                        <!-- BOTÃO DO MODAL-->
                                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal2">Visualizar &#62;</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- FIM DA LINHA COM MODALS -->
                                
                    </div>
                </div>
                <!-- FIM DA LINHA COM AS INFORMAÇÕES -->



                <!-- MODAL 1 -->
                <div id="modal1" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">

                        <!-- CONTEÚDO DO MODAL-->
                        <div class="modal-content">

                            <!-- HEADER -->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h3 class="modal-title">Introdução</h3>
                            </div>

                            <!-- BODY -->
                            <div class="modal-body">

                                <!-- ALERTA
                                <div class="row">
                                    <!-- COLUNA 1
                                    <div class="col-sm-4 col-md-6">
                                        <div class="alert alert-info" role="alert">
                                            <span class="lead">LiEat - Trilha Sonora</span>
                                            <br>
                                            [2. LiEat - Liar]
                                        </div>
                                    </div>
                                    <!-- COLUNA 2
                                    <div class="col-sm-8 col-md-6">
                                        <audio controls>
                                            <source src="../../audio/lieat/2-lamp.mp3" type="audio/mpeg">
                                            Seu navegador não suporta o elemento 'audio'.
                                        </audio>
                                    </div>
                                </div>
								<!-- FIM DO ALERTA -->

                                <!-- CARROSSEL -->
                                <br>
                                <div id="introducao" class="carousel slide" data-interval="0" data-ride="carousel">

                                    <!-- SLIDES -->
                                    <div class="carousel-inner" role="listbox">

                                        <div class="item active">
                                            <img src="../../img/lieat/modal-introduction/introduction (1).png" class="img-responsive center-block" style="width:100%;" alt="Imagem">
                                        </div>

                                        <script language="javascript">
                                            for (i = 2; i <= 17; i++) {
                                                document.write(
                                                    '<div class="item">'+
                                                    '<img src="../../img/lieat/modal-introduction/introduction ('+i+').png" class="img-responsive center-block" style="width:100%;" alt="Imagem">'+
                                                    '</div>'
                                                );
                                            }
                                        </script>

                                    </div>
                                    <!-- FIM DOS SLIDES -->

                                    <!-- CONTROLES -->
                                    <a class="left carousel-control" href="#introducao" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Anterior</span>
                                    </a>
                                    <a class="right carousel-control" href="#introducao" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Próximo</span>
                                    </a>
                                </div>
                                <!-- FIM DO CARROSSEL -->

                            </div>
                            <!-- FIM DO BODY DO MODAL -->

                            <!-- FOOTER -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                            </div>

                        </div>
                        <!-- FIM DO CONTEÚDO DO MODAL -->
                    </div>
                </div>
                <!-- FIM DO MODAL 1 -->



				<!-- MODAL 2 -->
				<div id="modal2" class="modal fade" role="dialog">
					<div class="modal-dialog modal-lg">

						<!-- CONTEÚDO DO MODAL-->
						<div class="modal-content">

							<!-- HEADER -->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3 class="modal-title">Vermilion Town</h3>
							</div>

							<!-- BODY -->
							<div class="modal-body">

								<!-- ALERTA
								<div class="row">
									<!-- COLUNA 1
									<div class="col-sm-4 col-md-6">
										<div class="alert alert-info" role="alert">
											<span class="lead">LiEat - Trilha Sonora</span>
											<br>
											[3. LiEat - Vermilion Town]
										</div>
									</div>
									<!-- COLUNA 2
									<div class="col-sm-8 col-md-6">
										<audio controls>
											<source src="../../audio/lieat/3-vermilion-town.mp3" type="audio/mpeg">
											Seu navegador não suporta o elemento 'audio'.
										</audio>
									</div>
								</div>
								<!-- FIM DO ALERTA -->

								<br>
								<div class="row">
									<div class="col-md-offset-1 col-md-10 col-md-offset-1">
										<p class="lead">INTRODUÇÃO</p>
										<p>
											LiEat é a história de um andarilho atravessando um estranho e misterioso mundo junto com um (ou, "uma") dragão, comprando e vendendo informações, e ao mesmo tempo tentando descobrir a verdade sobre si mesmos. Ao longo do caminho, eles vão descobrir uma série de mistérios, conhecer uma variedade incrível de personagens, incluindo outros dragões (sério, dragões são demais!), e descobrir acontecimentos do passado que os levaram a ser quem são hoje. 
										</p>
									</div>
								</div>

								<br>
								<img src="../../img/lieat/modal-vermilion-town/vermilion-town (1).png" class="img-responsive center-block" alt="Cidade Vermilion" title="A 'Cidade Vermilion'">

								<br>
								<div class="row">
									<div class="col-md-offset-1 col-md-10 col-md-offset-1">
										<p>
											O Primeiro Capítulo da história introduz Efina e Leo, que chegam à uma pequena cidade, a <strong>Cidade Vermilion</strong> (ou: 'Vermilion Town'), que tem um grande segredo. Quando Efi começa a perceber e entender o mundo em volta dela com uma nova e diferente perspectiva, os dois descobrem que a lenda sobre criaturas que caçam a noite não é apenas um conto para assustar crianças... 
										</p>
									</div>
								</div>
								
								<br>
								<img src="../../img/lieat/gallery/gallery (4).png" width="640px" class="img-responsive center-block" alt="As Criaturas da Noite" title="As 'Criaturas da Noite'">

							</div>
							<!-- FIM DO BODY DO MODAL -->

							<!-- FOOTER -->
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
							</div>

						</div>
						<!-- FIM DO CONTEÚDO DO MODAL -->
					</div>
				</div>
				<!-- FIM DO MODAL -->



				<!-- SEÇÃO DA TRILHA SONORA
				<h2 class="sub-header">Trilha Sonora!</h2>
				<div class="row">

                    <img src="../../img/lieat/label/label-lieat.png" class="img-responsive center-block" alt="LiEat Trilha Sonora" title="Trilha Sonora">
                    
                    <br>
                    <!-- COLUNA COM A TABLE
					<div class="col-md-offset-2 col-md-8 col-md-offset-2">   
                        <!-- TABLE    
						<div class="table-responsive">  
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Número</th>
										<th>Nome</th>
										<th>Player</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>#1</td>
										<td>LiEat - LiEat (Title)</td>
										<td>
											<audio controls>
												<source src="../../audio/lieat/1-lieat-title.mp3" type="audio/mpeg">
												Your browser does not support the audio element.
											</audio>
										</td>
									</tr>

									<tr>
										<td>#2</td>
										<td>LiEat - Lamp</td>
										<td>
											<audio controls>
												<source src="../../audio/lieat/2-lamp.mp3" type="audio/mpeg">
												Your browser does not support the audio element.
											</audio>
										</td>
									</tr>

									<tr>
										<td>#3</td>
										<td>LiEat - Vermilion Town</td>
										<td>
											<audio controls>
												<source src="../../audio/lieat/3-vermilion-town.mp3" type="audio/mpeg">
												Your browser does not support the audio element.
											</audio>
										</td>
									</tr>

									<tr>
										<td>#4</td>
										<td>LiEat - Disguise</td>
										<td>
											<audio controls>
												<source src="../../audio/lieat/4-disguise.mp3" type="audio/mpeg">
												Your browser does not support the audio element.
											</audio>
										</td>
									</tr>

									<tr>
										<td>#5</td>
										<td>LiEat - Dragon</td>
										<td>
											<audio controls>
												<source src="../../audio/lieat/5-dragon.mp3" type="audio/mpeg">
												Your browser does not support the audio element.
											</audio>
										</td>
									</tr>

									<tr>
										<td>#6</td>
										<td>LiEat - Liar</td>
										<td>
											<audio controls>
												<source src="../../audio/lieat/6-liar.mp3" type="audio/mpeg">
												Your browser does not support the audio element.
											</audio>
										</td>
									</tr>

									<tr>
										<td>#7</td>
										<td>LiEat - Trick</td>
										<td>
											<audio controls>
												<source src="../../audio/lieat/7-trick.mp3" type="audio/mpeg">
												Your browser does not support the audio element.
											</audio>
										</td>
									</tr>

									<tr>
										<td>#8</td>
										<td>LiEat - Yawn</td>
										<td>
											<audio controls>
												<source src="../../audio/lieat/8-yawn.mp3" type="audio/mpeg">
												Your browser does not support the audio element.
											</audio>
										</td>
									</tr>

									<tr>
										<td>#9</td>
										<td>LiEat - LiEat (Ending)</td>
										<td>
											<audio controls>
												<source src="../../audio/lieat/9-lieat-ending.mp3" type="audio/mpeg">
												Your browser does not support the audio element.
											</audio>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- FIM DA TABLE
                    </div>
                    <!-- FIM DA COLUNA COM A TABLE

				</div>
				<!-- FIM DA SEÇÃO DA TRILHA SONORA -->



				<!-- SEÇÃO DA GALERIA -->
				<h2 class="sub-header">Galeria!</h2>
				<div class="row">

					<script language="javascript">
						for (i = 1; i <= 6; i++) {
    						document.write(
								'<div class="col-xs-6 col-md-4">'+
								'<div class="thumbnail"><img src="../../img/lieat/gallery/gallery ('+i+').png" class="img-responsive" alt="Imagem"></div>'+
								'</div>'
							);
						}
					</script>

					<div class="col-xs-offset-1 col-xs-10 col-xs-offset-1 col-md-offset-2 col-md-8 col-md-offset-2">
						<div class="thumbnail"><img src="../../img/lieat/gallery/gallery (7).png" class="img-responsive" width="80%" alt="Imagem"></div>
					</div>
                </div>
                <!-- FIM DA SEÇÃO DA GALERIA -->



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