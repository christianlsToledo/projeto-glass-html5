<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Tudo sobre Google Glass </title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
	<link rel="stylesheet" type="text/css" href="_css/form.css"/>
	<script language="javascript" src="_javascript/funcoes.js"></script>
</head>
<body>
	<div id="interface">
		<header id="cabecalho">
				<hgroupe>
					<h1>Google Glass</h1>
					<h2>A revolução do Google está chegando</h2>
				</hgroupe>
				<img id="icone" src="_imagens/contato.png"/>
				<nav id="menu">
					<h1>Menu Principal</h1>
					<ul type="disc">	<!--   Menu -->
						<li onmousemove="mudaIcone('home')" onmouseout="mudaIcone('contato')">
						<a href="index.html">Home</a></li>
						<li onmousemove="mudaIcone('especificacoes')" onmouseout="mudaIcone('contato')">
						<a href="specs.html">Especificações</a></li>
						<li onmousemove="mudaIcone('fotos')" onmouseout="mudaIcone('contato')">
						<a href="fotos.html">Fotos</a></li>
						<li onmousemove="mudaIcone('multimidia')" onmouseout="mudaIcone('contato')">
						<a href="multimidia.html">Multimídia</a></li>
						<li onmousemove="mudaIcone('contato')" onmouseout="mudaIcone('contato')">
						<a href="fale-conosco.html">Fale conosco</a></li>
					</ul>	
				</nav>
		</header>
				<!-- -------------------------- Fim Cabeçalho -------------------------------------- -->
				<header id="cabArtigo">
					<hgroup>
						<h3>Fale conosco > Contato > Confirmações de dados cadastrais</h3>
						<h1>Confirmação de dados</h1>
						<h2 class="scx">por Christian de Toledo</h2>
						<h3 class="direita">Atualizado em 20/Janeiro/2021</h3>	
					</hgroup>
				</header>	
		<!-- ------------------------------------- Recorte Corpo cabecalho ------------------------------------ -->	
	<form id="fContato">
	<fieldset id="confUsuario"><legend>Identificação do Usuário</legend>
		<?php
			$nome = $_POST["nNome"];
			$senha = $_POST["nSenha"];
			$email = $_POST["nMail"];
			$sexo = $_POST["nSexo"];
			$nasc = $_POST["nNasc"];
			echo "Nome: $nome";
			echo "<br/>Senha: $senha";
			echo "<br/>E-mail: $email";
			echo "<br/>Sexo: $sexo";
			echo "<br/>Data de Nascimento: $nasc";
		?>
	</fieldset>

	<fieldset id="confEndereco"><legend>Endereço do Usuário</legend>
		<?php
			$rua = $_POST["nRua"];
			$numero = $_POST["nNum"];
			$estado = $_POST["nEst"];
			$cidade = $_POST["nCid"];
			echo "$rua";
			echo ", n°:$numero";
			echo "<br/>$estado , $cidade .";
		?>
	</fieldset>

	<fieldset id="confMensagem"><legend>Mensagem do Usuário</legend>
		<?php
			$urg = $_POST["nUrg"];
			$msg = $_POST["nMsg"];
			echo "Seu nivel de desejo de um Google Glass é $urg.</br>";
			echo "</br>Sua mensagem: </br> $msg";
		?>
	</fieldset>

	<fieldset id="confPedido"><legend>Quero um Google Glass</legend>
		<?php
			$quant = $_POST["nQuant"];
			$cor = $_POST["nCor"];
			$tot = $_POST["nTot"];
			echo "Estamos reservando para voçê $quant Google Glass.";
		?>
		</br>Na cor <input type="color" value="nCor" readonly/></br>
		<?php
			echo "O total a pagar é R$ ". number_format($tot,2);			
		?>
	</fieldset>
</form>
<nav id="link">
	<p><a href="fale-conosco.html" target="self">Voltar ao formulário.</a></p>
</nav>
<!-- -------------------------- Roda pé Recorte --------------------------------- -->
		<footer id="rodape">
			<nav id="link">	
				<p>Copyright 2021 - by Christian de Toledo &copy; <br/>
				<a href="https://www.facebook.com/christian.louzadodossantosdetoledo" target="blanc">Facebook</a> | 
				<a href="https://wa.me/message/TDYGTHAI6Y7TD1" target="blanc">WhatsApp</a></p>
			</nav>	
		</footer>
	</div>
</body>
</html>