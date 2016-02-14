<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<meta name="keywords" content="Carros, Rodas, Compras, Automóvel">
		<meta name="description" content="Descrição aqui">
		<meta name="author" content="Hiago Lopes">
		<meta name="robots" content="index,follow">		
		
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" href="style.css">
	</head>
	<body class="home ">
		<nav class="fixed-nav-bar" id="nave">
			<ul class="navmain">
				<li>
					<h1 class="logo">
						<a href="#" title="Quatro Rodas"><img src="img/logo.png" alt="Logo Quatro Rodas"></a>
					</h1>
				</li>
				<li>
					<a href="#" title="Quatro Rodas"  onmouseover="AparecerDiv('menu_carros');OcultarDiv('menu_testes')">Carros</a>
					<nav id="menu_carros" class="menu" style="display: none;">
						<ul class="lista"><li class="modelos"><a href="/carros/fabricantes-modelos">Ver todos os carros</a></li></ul>
						<div class="carros modelos-az">
							<ul>
								<li><a href="?">Audi</a></li>
								<li><a href="?">Bentley</a></li>
								<li><a href="?">BMW</a></li>
								<li><a href="?">Chevrolet</a></li>
								<li><a href="?">Chrysler</a></li>
								<li><a href="?">Chevrolet</a></li>
								<li><a href="?">Dodge</a></li>
								<li><a href="?">Ferrari</a></li>
								<li><a href="?">Fiat</a></li>
								<li><a href="?">Ford</a></li>
								<li><a href="?">Honda</a></li>
								<li><a href="?">Hyundai</a></li>
								<li><a href="?">JAC Motos</a></li>
								<li><a href="?">Jaguar</a></li>
								<li><a href="?">Jeep</a></li>
								<li><a href="?">Kia</a></li>
								<li><a href="?">Lamborghini</a></li>
								<li><a href="?">Mercedes-Benz</a></li>
								<li><a href="?">Mitsubishi</a></li>
								<li><a href="?">Volkswagen</a></li>
							</ul>
						</div>
					</nav>
				</li>
				<li>
					<a href="#" title="Quatro Rodas" onmouseover="OcultarDiv('menu_carros'); AparecerDiv('menu_testes')">Testes</a>
					<nav id="menu_testes" class="menu" style="display: none;">
						<ul class="lista">
							<li class="modelos"><a href="/carros/fabricantes-modelos">Ver tudo de testes</a></li>
							<li class="modelos"><a href="/carros/fabricantes-modelos">Comparativos</a></li>
							<li class="modelos"><a href="/carros/fabricantes-modelos">Impressões</a></li>
							<li class="modelos"><a href="/carros/fabricantes-modelos">Longa duração</a></li>
							<li class="modelos"><a href="/carros/fabricantes-modelos">Teste de pista</a></li>
						
						</ul>
						<div class="carros modelos-az">
							<ul>
								<li><a href="?"><img src="img/carro1.jpg" alt="materia"></a></li>
								<li><a href="?"><img src="img/carro2.jpg" alt="materia"></a></li>
								<li><a href="?"><img src="img/carro1.jpg" alt="materia"></a></li>
								<li><a href="?"><img src="img/carro2.jpg" alt="materia"></a></li>
							</ul>
						</div>
					</nav>
				</li>
				<li>
					<a href="#" title="Quatro Rodas" onmouseover="OcultarDiv('menu_carros'); OcultarDiv('menu_testes')">Notícias</a>
				</li>
				<li>
					<a href="#" title="Quatro Rodas">Auto-Serviço</a>
				</li>
				<li>
					<a href="#" title="Quatro Rodas">Guia de Compras</a>
				</li>
				<li>
					<a href="#" title="Quatro Rodas">Tabela FIPE</a>
				</li>
				<li>
					<a href="#" title="Quatro Rodas">Assine</a>
				</li>
				
				<li>
				<form class="search" action="/busca" method="get">
					<label for="Pesquisar"><input type="text" placeholder="Pesquisar" name="qu"><i class=""></i></label>
					<input type="submit" class="" value="">
				</form>
				</li>
			</ul>
			<a href="#" id="pull"><img src="img/logo.png" alt="Logo Quatro Rodas"></a>
		</nav>
		<div id="pagewrap">
			<header>
				<!--div class="ad">
					<div class="adCont container">
						<img src="img/ad.jpg"/>
					</div>
				</div-->
				<nav class="nav-acessadas">
					<ul>
						<li><a href="?">+Acessados</a></li>
						<li><a href="?">Renegade</a></li>
						<li><a href="?">Salão do Automóvel</a></li>
						<li><a href="?">Novo Sandero</a></li>
						<li><a href="?">Novo Fox</a></li>
						<li><a href="?">Novo Ka</a></li>
						<li><a href="?">HB 20</a></li>
						<li><a href="?">Duster</a></li>
						<li><a href="?">Golf</a></li>
						<li><a href="?">Corolla</a></li>
						<li><a href="?">Civic</a></li>
						<li><a href="?">|A - Z|</a></li>
					</ul>
				</nav>
			</header>

			<section onmouseover="OcultarDiv('menu_carros'); OcultarDiv('menu_testes')">
				<h1>Conteudo</h1>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</section>
	
			<footer>
				<h4>Footer</h4>
			</footer>

		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="js.js"></script>
	</body>
</html>
