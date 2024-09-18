<body class="corpo-pagina-principal-galerias">
	<main>
		<div class="introducao-a-pagina-galerias">
			<img class="locomotiva-a-vapor" src="app/public/img/locomotiva-a-vapor.png" onclick="APP.tocarSom('tag-audio-trem')">
			<h2 class="titulo-site mb-1">Ferrovias</h2>
			<p class="text-center fs-4">Seja bem-vindo a seção de Ferrovias!</p>
			<p class="pequena-descricao-site fs-5">Os trens já foram o principal método de transporte no Brasil, até serem sucateados em prol de um "substituto" que não possuí, e nunca possuirá, a mesma capacidade: o transporte rodoviário.</p>	
		</div>
		<section class="row col-8">
			<div class="col-sm-6 col-md-4">
				<div class="card">
					<div class="container-foto-galeria">
						<img src="app/public/img/spr.png" class="card-img-top" alt="...">
					</div>
					<div class="card-body">
						<h5 class="card-title">Linhas 7 e 10</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="spr.html" class="btn btn-primary">Visitar página</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="card">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Linhas 8 e 9</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="card">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
		</section>
	</main>
	<footer>
		<p>Por Bruno Bonavigo. 2024 - <span id="ano">20XX</span>.</p>
	</footer>
	<audio src="app/public/audio/trem.mp3" id="tag-audio-trem"></audio>