<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Projeto Archivo</title>
	<meta name="description" content="Arquivo de igrejas e ferrovias, por Bruno Bonavigo">
	<meta name="author" content="Bruno Bonavigo">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="app/public/css/app.css">
</head>
<body class="corpo-pagina-principal">
	<main>
		<img class="maquina-de-escrever" src="app/public/img/typewriter.png" onclick="APP.tocarSom('tag-audio-typewriter')">
		<h2 class="titulo-site mb-1">Archivo</h2>
		<p class="text-center fs-4">Seja bem-vindo ao Projeto Archivo!</p>
		<p class="pequena-descricao-site fs-5">Este site tem por objetivo expor o meu pequeno acervo de fotos, aliado com descrições e histórias dos respectivos lugares. Planejo alcançar várias áreas, mas inicialmente igrejas e estações ferroviárias.</p>
		<div>
			<a href="igrejas/" class="btn btn-primary">Igrejas</a>
			<a href="ferrovias/" class="btn btn-primary">Ferrovias</a>
		</div>	
	</main>
	<audio src="app/public/audio/typewriter.mp3" id="tag-audio-typewriter"></audio>