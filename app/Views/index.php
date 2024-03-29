<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!--META TAGS-->
		<meta charset="UTF-8">
		<meta name="keywords" content="music, música, reprodução">
		<meta name="description" content="idk">
		<meta name="author" content="Alexsander, Altamiro, Artur, Gustavo, Javier, Matheus">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--FIM META TAGS-->
		<!--CSS e JS-->
		<link rel="stylesheet" href="css/structure.css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
			<!--THEMES-->
			<link rel="stylesheet" href="css/dark.css" id="dark-theme"/>
			<link rel="stylesheet" href="css/light.css" id="light-theme"/>
			<!--incluir preferências de usuário-->
			<script type="text/javascript">
				var theme_blocked = localStorage.getItem('blocked_theme')+"-theme";
				document.getElementById(theme_blocked).disabled=true;
			</script>
		
		<!--FIM CSS e JS-->
		<!--favicon-->
		<!--  AINDA NÃO SUPORTADO
		<link rel="icon" href="img/favicon-16x16.png" sizes="16x16"/>
		<link rel="icon" href="img/favicon-32x32.png" sizes="32x32"/>
		<link rel="icon" href="img/favicon-48x48.png" sizes="48x48"/>
		<link rel="icon" href="img/favicon-64x64.png" sizes="64x64"/>
		<link rel="icon" href="img/favicon-128x128.png" sizes="128x128"/>
		-->
		
		<link rel="icon" href="img/favicon-64x64.png"/>
		
		
			<!--WINDOWS 8 TILE-->
			<meta name="msapplication-TileImage" content="img/tile.png"/>
			<meta name="msapplication-TileColor" content="#000000"/>
			
		
		<title>The Licia World</title>
	</head>
	<body>
		<!--MENU-->
		<nav id="menu-bar">
			<a href="#">The Licia World</a>
			
			<!--BARRA DE PESQUISA-->
			<input id="search-bar" type="text" placeholder="Pesquisar..."/>
			
			<!--GRUPO DE BOTÕES-->
			<div id="btn-group">
				<i class="material-icons" id="menu-btn-user">account_box</i>
				<i class="material-icons" id="menu-btn-menu">menu</i>
			</div>
			
			
		</nav>
		<!--BLOCOS DE MENU-->
			<!--USER-->
			<div class="menu-block" id="menu-block-user">
				hi-su
			</div>
			<!--MENU-->
			<div class="menu-block" id="menu-block-menu">
				<div class="line">THEME/TEMA</div>
				<button type="button" class="menu-btn-theme" id="menu-btn-theme-dark">DARK</button>
				<button type="button" class="menu-btn-theme" id="menu-btn-theme-light">LIGHT</button>
			</div>
		<script src="js/menu.js" type="text/javascript"></script>
		<!--FIM MENU-->
		
		<div id="container-principal">
		
			<a class="container-blocks" href="reol">
				<img src="img/album/reol.jpg"/>
				<div class="container-block-text">
					REOL
				</div>
			</a>
			<a class="container-blocks" href="reol.html">
				<img src="img/album/reol2.jpg"/>
				<div class="container-block-text">
					REOL
				</div>
			</a>
			<a class="container-blocks" href="reol.html">
				<img src="img/album/reol2.jpg"/>
				<div class="container-block-text">
					REOL
				</div>
			</a>
			<a class="container-blocks" href="reol.html">
				<img src="img/album/reol.jpg"/>
				<div class="container-block-text">
					REOL
				</div>
			</a>
			<a class="container-blocks" href="reol.html">
				<img src="img/album/reol2.jpg"/>
				<div class="container-block-text">
					REOL
				</div>
			</a>
			<a class="container-blocks" href="reol.html">
				<img src="img/album/reol.jpg"/>
				<div class="container-block-text">
					REOL
				</div>
			</a><a class="container-blocks" href="reol.html">
				<img src="img/album/reol2.jpg"/>
				<div class="container-block-text">
					REOL
				</div>
			</a>
			<a class="container-blocks" href="reol.html">
				<img src="img/album/reol.jpg"/>
				<div class="container-block-text">
					REOL
				</div>
			</a>
			
		</div>
		<!--PLAY BAR-->
		<iframe src="silence.mp3" allow="autoplay" id="fake_audio" style="display: none"></iframe>
		<div id="play-bar">
			<audio id="music-player" src="" type="audio/mpeg" preload="auto" autobuffer autoplay
			onended="end_m();"></audio>
			<!--PLAYLIST-->
			<div id="playlist">
				<img id="album-art" src="img/album/default.jpg"/>
			</div>
			<!--PROGRESS BAR-->
			<div id="audio-progress" onclick="audio_progress(event);">
				<div id="atual-progress"></div>
			</div>
			<!--CONTROLS-->
			<div class="audio-controls">
				<i class="material-icons" id="skip-previous-btn">skip_previous</i>
				<i class="material-icons" id="play-btn">play_circle_filled</i>
				<i class="material-icons" id="skip-next-btn">skip_next</i>
				<i class="material-icons" id="repeat-btn">repeat</i>
				<i class="material-icons" id="playlist-btn">playlist_play</i>
			</div>
			<!--MUSIC INFO-->
			<div id="music-name">Now playing Nothing</div>
			<div id="music-timer">0:0</div>
		</div>
		<!--FOOTER-->
		<footer>
			&copy;2017
		</footer>
		<!--JS-->
		<script src="js/function.js" type="text/javascript" onload="refresh();"></script>
		
	</body>
</html>