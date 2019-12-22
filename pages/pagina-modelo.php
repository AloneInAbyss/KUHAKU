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
        <!-- [ALTERAR] PALAVRAS-CHAVE DA PÁGINA! -->
        <meta name="keywords" content="kuhaku, jogos">
        <!-- [ALTERAR] DIRETÓRIO -->
	    <link rel="icon" href="../img/general/favicon.ico">
        <!-- [ALTERAR] NOME DA PÁGINA -->
	    <title>KŪHAKU - Nome da Página</title>

    <!-- BOOTSTRAP CSS -->
        <!-- [ALTERAR] DIRETÓRIO -->
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <!-- ESTILOS PERSONALIZADOS PARA A PÁGINA -->
        <!-- [ALTERAR] DIRETÓRIO -->
	    <link href="../css/style.css" rel="stylesheet">

	<!-- CONFIGURAÇÕES PARA INTERNET EXPLORER -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body onload="alterarClasse()">

    <!-- NAVBAR -->
        <!-- [ALTERAR] DIRETÓRIOS -->
        <?php
            include '../scripts/script-menu-1.php';
        ?>

        <a class="navbar-brand" href="../index.php">KŪHAKU</a>

        <?php
            include '../scripts/script-menu-2.php';
        ?>
        
        <!-- [ALTERAR] FRASE -->
        <p class="navbar-text text-center">"Frase de Efeito!" - Autor(es)"</p>

        <?php
            include '../scripts/script-menu-3.php';
        ?>
	<!-- FIM DA NAVBAR -->

	
	
	<!-- CONTAINER E LINHA DA PÁGINA -->
	<div class="container-fluid">
		<div class="row">
			
			
			
            <!-- MENU LATERAL -->
                <!-- [ALTERAR] DIRETÓRIO -->
                <?php
                    include '../scripts/script-menu-lateral-2.php';
                ?>

                <!-- [ALTERAR] NOME DO ID -->
                <script language="javascript">
                    function alterarClasse() {
                        document.getElementById("nome-do-id").setAttribute('class', `active`);
                    }
                </script>
			<!-- FIM DO MENU LATERAL -->



            <!-- CONTEÚDO DA LATERAL DIREITA -->
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <!-- [ALTERAR] HEADER -->
                <h1 class="page-header">Header</h1>
                
                



                <br><br>
            </div>
            <!-- FIM DO CONTEÚDO DA LATERAL DIREITA -->



            <!-- RODAPÉ -->
                <!-- [ALTERAR] DIRETÓRIO -->
                <?php
                    include '../scripts/script-footer-2.php';
                ?>
			<!-- FIM DO RODAPÉ -->



        </div>
	</div>
	<!-- FIM DO CONTAINER E LINHA DA PÁGINA -->

	
	
	<!-- BOOTSTRAP JAVASCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- [ALTERAR] DIRETÓRIO -->
        <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>