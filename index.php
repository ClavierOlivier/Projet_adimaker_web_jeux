<?php
	session_start();


?>

<!DOCTYPE HTML>

<html>

<head>
	<title>Have fun!</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">
	<section id="sidebar">
		<div class="inner">
			<nav>
				<ul>
					<?php
						if(!isset($_SESSION['user']))
						{
							?>
							<li><a href="./login.php">Connexion</a></li>
							<li><a href="./inscription.php">S'inscrire</a></li>
							<?php
						}
						else 
						{
							?>
							<li><a>Bienvenue <?php echo $_SESSION['user']; ?> </a></li>
							<li><a href="./games.php"> Jouer aux jeux ! </a></li>
							<li><a href="deconnexion.php"> Deconnexion </a></li>
							<?php
						}
					?>
				</ul>
			</nav>
		</div>
	</section>
	<div id="wrapper">
		<section id="intro" class="wrapper style1 fullscreen fade-up">
			<div class="inner">
				<h1>​Bienvenue et amuse toi bien !</h1>
				<p>Si tu veux jouer a de nombreux jeux sans rien installer et
					de plus, comparer tes scores avec tes amis connecter toi ou inscrit toi !</p>

				<h5>Site créer par Luc, Olivier, Kévan et Quentin</h5>
			</div>
		</section>
	</div>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>