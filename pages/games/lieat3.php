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
	<title>KŪHAKU - LiEat III</title>

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
	
	<p class="navbar-text text-center">"Eu prometi... que iria te proteger." - Efi</p>
	
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
					document.getElementById("lieat3").setAttribute('class', `active`);
				}
			</script>
			<!-- FIM DO MENU LATERAL -->



			<!-- CONTEÚDO DA LATERAL DIREITA -->
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">LiEat III</h1>
                
                <!--<div class="alert alert-warning" role="alert">
                    Atenção! Esta página ainda está em desenvolvimento!
                </div>-->
                


                <!-- SEÇÃO DE INTRODUÇÃO -->
                <h2 class="sub-header">Introdução!</h2>

                <!-- ÍCONE LIEAT -->
                <div class="row">
                    <figure class="text-center">
                        <img src="../../img/general/text-lieat.png" class="img-responsive center-block" alt="LiEat III" title="LiEat III">
                        <figcaption><small>"O dragão que come mentiras e o ladrão dourado"</small></figcaption>
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
                                    <img src="../../img/lieat3/gallery/gallery (1).png" class="img-responsive center-block" width="320px" alt="Efina & Teo" title="Efina & Teo">
                                    <figcaption class="text-center"><small>Último capítulo da saga</small></figcaption>
                                </figure>
                                <br>
                            </div>

                            <div class="col-md-7">	  
                                <h3 class="text-center">Efina & Teo</h3>
                                <br>
                                <p>
                                    Último capítulo da história, em <strong>LiEat III</strong> vemos de novo a dupla <strong>Efi</strong> & <strong>Teo</strong>, dessa vez em um leilão de um raro artefato onde acontece um certo contra-tempo e problemas começam a surgir.
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
                                LiEat foi criado por <strong>Miwashiba</strong> no <strong>Wolf RPG Maker</strong> e é dividido em três capítulos, sendo o desta página o <strong>terceiro</strong> deles. Você pode acessar a página de cada um nesses links:
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
                                    <img src="../../img/lieat3/thumbnails/thumbnail (1).png" alt="Introdução" title="Introdução">
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
                                    <img src="../../img/lieat3/thumbnails/thumbnail (2).png" alt="Ladrão Fantasma" title="Ladrão Fantasma">
                                    <!-- CAPTION -->  
                                    <div class="caption text-center">
                                        <h3>"Ladrão Fantasma"</h3>
                                        <!-- BOTÃO DO MODAL
                                        <button type="button" class="btn btn-info btn-lg disabled" data-toggle="modal" data-target="#modal2">Visualizar &#62;</button>-->
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
                                            <span class="lead">LiEat III - Trilha Sonora</span>
                                            <br>
                                            [1. LiEat III - Heart]
                                        </div>
                                    </div>
                                    <!-- COLUNA 2
                                    <div class="col-sm-8 col-md-6">
                                        <audio controls>
                                            <source src="../../audio/lieat3/1-heart.mp3" type="audio/mpeg">
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
                                            <img src="../../img/lieat3/modal-introduction/introduction (1).png" class="img-responsive center-block" style="width:100%;" alt="Imagem">
                                        </div>

                                        <script language="javascript">
                                            for (i = 2; i <= 7; i++) {
                                                document.write(
                                                    '<div class="item">'+
                                                    '<img src="../../img/lieat3/modal-introduction/introduction ('+i+').png" class="img-responsive center-block" style="width:100%;" alt="Imagem">'+
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
                            <!-- FIM DO BODY -->

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

					<img src="../../img/lieat3/label/label-lieat3.png" class="img-responsive center-block" alt="LiEat III Trilha Sonora" title="Trilha Sonora">
					<br>
					<div class="col-md-offset-2 col-md-8 col-md-offset-2">
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
										<td>LiEat III - Heart</td>
										<td>
											<audio controls>
												<source src="../../audio/lieat3/1-heart.mp3" type="audio/mpeg">
												Your browser does not support the audio element.
											</audio>
										</td>
									</tr>

									<tr>
										<td>#2</td>
										<td>LiEat III - Gold Town</td>
										<td>
											<audio controls>
												<source src="../../audio/lieat3/2-gold-town.mp3" type="audio/mpeg">
												Your browser does not support the audio element.
											</audio>
										</td>
									</tr>

									<tr>
										<td>#3</td>
										<td>LiEat III - Pride</td>
										<td>
											<audio controls>
												<source src="../../audio/lieat3/3-pride.mp3" type="audio/mpeg">
												Your browser does not support the audio element.
											</audio>
										</td>
									</tr>

									<tr>
										<td>#4</td>
										<td>LiEat III - Butterfly</td>
										<td>
											<audio controls>
												<source src="../../audio/lieat3/4-butterfly.mp3" type="audio/mpeg">
												Your browser does not support the audio element.
											</audio>
										</td>
									</tr>

									<tr>
										<td>#5</td>
										<td>LiEat III - Trick (3)</td>
										<td>
											<audio controls>
												<source src="../../audio/lieat3/5-trick3.mp3" type="audio/mpeg">
												Your browser does not support the audio element.
											</audio>
										</td>
									</tr>

									<tr>
										<td>#6</td>
										<td>LiEat III - Stagnation</td>
										<td>
											<audio controls>
												<source src="../../audio/lieat3/6-stagnation.mp3" type="audio/mpeg">
												Your browser does not support the audio element.
											</audio>
										</td>
									</tr>

									<tr>
										<td>#7</td>
										<td>LiEat III - Red Butterfly</td>
										<td>
											<audio controls>
												<source src="../../audio/lieat3/7-red-butterfly.mp3" type="audio/mpeg">
												Your browser does not support the audio element.
											</audio>
										</td>
									</tr>

									<tr>
										<td>#8</td>
										<td>LiEat III - Liar (3)</td>
										<td>
											<audio controls>
												<source src="../../audio/lieat3/8-liar3.mp3" type="audio/mpeg">
												Your browser does not support the audio element.
											</audio>
										</td>
									</tr>

									<tr>
										<td>#9</td>
										<td>LiEat III - Liar B</td>
										<td>
											<audio controls>
												<source src="../../audio/lieat3/9-liarb.mp3" type="audio/mpeg">
												Your browser does not support the audio element.
											</audio>
										</td>
                                    </tr>
                                    
                                    <tr>
										<td>#10</td>
										<td>LiEat III - LiEat III (Ending)</td>
										<td>
											<audio controls>
												<source src="../../audio/lieat3/10-lieat3-ending.mp3" type="audio/mpeg">
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
						for (i = 1; i <= 4; i++) {
    						document.write(
								'<div class="col-xs-6">'+
								'<div class="thumbnail"><img src="../../img/lieat3/gallery/gallery ('+i+').png" class="img-responsive" alt="Imagem" width="400px"></div>'+
								'</div>'
							);
						}
					</script>

					<div class="col-xs-offset-1 col-xs-10 col-xs-offset-1 col-md-offset-2 col-md-8 col-md-offset-2">
						<div class="thumbnail"><img src="../../img/lieat3/gallery/gallery (5).png" class="img-responsive" width="80%" alt="Imagem"></div>
					</div>
				</div>



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