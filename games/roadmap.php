<?php
session_start();
if(!isset($_SESSION['user']))
  {
    header('Location:./../index.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Roadmap</title>
  <link rel="stylesheet" href="../assets/games-css/roadmap.css">
</head>
<body>
  <h1>Roadmap</h1>
  <svg id="template" width="800px" height="2400px" viewBox="0 0 800 2400" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs/>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
      <g id="wall" fill="#B5B5B5">
        <clipPath id="left">
        <path d="M208.051459,2400 C263.281717,2400 309.415831,2355.25297 311.095095,2300.04788 L312.664062,2248.46875 L237.390625,2194.82812 L137.777344,2030.35938 L237.390625,1931.83594 L201.117188,1718.30469 L512.40625,1671.47266 L625.328125,1623.67187 L554.5,1528.82813 L554.671875,1367.17188 L505.5,1496.0625 L389.328125,1318.78125 L308.054687,1456.08984 L292.945312,1260.08984 L139.835938,1239.41797 L193.140625,968.167969 L594.265625,834.582031 L589.878906,810.363281 L294.828125,639.890625 L466.5625,514 L286.109375,421.609375 L403.671875,259.953125 L307.732398,87.3968996 C280.895903,39.1289248 214.371469,-1.77635684e-15 159.13546,-1.77635684e-15 L0,-1.77635684e-15 L0,2400 L208.051459,2400 Z" id="path-1"></path>
        </clipPath>
        <clipPath id="right">
        <path d="M607.571488,2400 C552.344521,2400 500.243973,2355.8417 491.198356,2301.34979 L477.292969,2217.58203 L322.253906,2136.07031 L277.097656,2050.32031 L335.421875,1981.23438 L322.253906,1799.02734 L555.867188,1774.47266 L740.628906,1650.70703 L634.464844,1501 L606.171875,1092.44531 L489.804688,1280.52734 L455.144531,1174.73438 L363.847656,1236.04297 L393.441406,1148.53906 L268.179688,1157.70312 L292.765625,1043.58203 L708.695312,919.421875 L669.171875,751.890625 L442.472656,634.820312 L614.207031,508.929688 L400,400.347656 L477.292969,265.375 L508.251674,98.3209413 C518.314845,44.0197848 571.238285,-1.77635684e-15 626.48025,-1.77635684e-15 L800,-1.77635684e-15 L800,2400 L607.571488,2400 Z" id="path-2"></path>
        </clipPath>
      </g>
    </g>
  </svg>
  <div class="game-container">
    <section id="game">
      <div id="start-spot"></div>
      <div class="wall-left"></div>
      <div class="wall-right"></div>

      <div id="gameover"><h1>Vous avez perdu</h1></div>
      <div id="win"><h1>Bravo !<br/>Vous avez gagnez</h1></div>
    </section>
  </div>
  <section>
    <div class="instructions">
      <p>
        Comment jouer ?<br />
        Placez votre curseur sur le point blanc pour commencer.<br />
        Évitez les murs et échappez-vous !
      </p>
      <hr>
  </section>

</body>
</html>
