<?php
	session_start();


if(!isset($_SESSION['user']))
{
  header('Location:index.php');
}
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="./assets/css/games.css" />

</head>

<body>
  <div>
    <h1>Bienvenue
      <br>
      <?php echo $_SESSION['user']; ?>
    </h1>
  </div>
  <div class="container">
  <div class="card">
    <img src="./assets/images/roadmap.jpg" onclick="window.location.href='./games/roadmap.php'">
    <div class="card__head">Roadmap</div>
  </div>
  <div class="card">
    <img src="./assets/images/500493.jpg" onclick="window.location.href='./games/HexGL-master/index.php'">
    <div class="card__head">HexGL</div>
  </div>
  <div class="card">
    <img src="./assets/images/fappy_bird.jpg" onclick="window.location.href='./games/clumsy-bird-master/index.php'">
    <div class="card__head">Clumsy Bird</div>
  </div>
  <div class="card">
    <img src="./assets/images/tetris.jpg" onclick="window.location.href='./games/hextris-gh-pages/index.php'">
    <div class="card__head">Hextris</div>
  </div>
  <div class="card">
    <img src="./assets/images/tower_game.jpg" onclick="window.location.href='./games/tower_game-master/index.php'">
    <div class="card__head">Tower Game</div>
  </div>
</div>
</body>

</html>