<div class="rouge"><?php echo wp_get_current_user()->display_name; ?></div>
<div class="bleu"><?php echo get_option( 'tic_tac_toe_option_name' )['premier_joueur_0']; ?></div>
    <link rel="stylesheet" href="./css/style.css"/>
  </head>
  <body>
  <div class="container">
      <h1 id="player-text">Tic-Tac-Toe</h1>
      <!-- Grille de jeu -->
      <div id="gameboard">
        <div class="box" id="0"></div>
        <div class="box" id="1"></div>
        <div class="box" id="2"></div>
        <div class="box" id="3"></div>
        <div class="box" id="4"></div>
        <div class="box" id="5"></div>
        <div class="box" id="6"></div>
        <div class="box" id="7"></div>
        <div class="box" id="8"></div>
      </div>
      <!-- Bouton Restart -->
      <button id="restart-button">Reset</button>
      <!-- Noms des joueurs et scores -->
      <div id="players">
        <div id="player1" class="active">
          <p>Player 1</p>
          <p>Score : <span id="score1">0</span></p>
        </div>

        <div id="player2">
          <p>Player 2</p>
          <p>Score : <span id="score2">0</span></p>
        </div>
      </div>
    </div>
  </body>
  <!--<script src="app.js"></script>-->
  <!--<script src="app.js"></script>-->
</html>