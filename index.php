<!DOCTYPE html>
<html>
<head>
	<title>AlugaFlex - Alugue agora!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		#menu_login
		{
			paddding: 10px;
			float: right;
			position: absolute;
			left: 1320px;
			bottom:710px;
		}
	</style>
</head>
<body>
	<div id="area-cabecalho">
		<div id="area-logo">
			<h1>Aluga<span class="branco">Flex</span></h1>
		</div>
		<div id="area-menu">
			<a href="index.php">Home</a>
			<a href="Carros.php">Carros</a>
			<a href="acessorios.php">Acessórios</a>
		</div>
		<div id="menu_login">
			<a href="login.php">Login</a> | 
			<a href="formulario.php">Registrar</a>
		</div>
	</div>
	<div id="area-principal">
		<div id="area-postagens">
			<!-- abertura postagem -->
			<div class="postagem">
				<h2>Nome do Carro</h2>
				<span class="data-postagem">postado 20 março 2022</span>
				<img width="620px" src="imagens/imagem1.jpg">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et scelerisque quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent nulla turpis, gravida at nunc eu, luctus aliquam justo. Praesent eget risus vehicula
				</p>
				<a href="">Leia mais</a>
			</div><!--// fechamento postagem -->
			<!-- abertura postagem -->
			<div class="postagem">
				<h2>Nome do Carro</h2>
				<span class="data-postagem">postado 10 março 2022</span>
				<img width="620px" src="imagens/imagem2.jpg">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et scelerisque quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent nulla turpis, gravida at nunc eu, luctus aliquam justo. Praesent eget risus vehicula
				</p>
				<a href="">Leia mais</a>
			</div><!--// fechamento postagem -->
		</div>
		<div id="area-lateral">
			<div class="conteudo-lateral">
				<h3>Postagens recentes</h3>
				<div class="postagem-lateral">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					<a href="">Leia mais</a>
				</div>
				<div class="postagem-lateral" style="border-bottom: none;">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					<a href="">Leia mais</a>
				</div>
			</div>
			<div class="conteudo-lateral">
				<h3>Categorias</h3>
				<a href="index.php">Home</a>
			    <a href="jogos.php">Carros</a>
			    <a href="celulares.php">Acessórios</a>
			</div>
		</div>
		<div id="rodape">
			Todos os direitos reservados
		</div>
	</div>
</body>
</html>
