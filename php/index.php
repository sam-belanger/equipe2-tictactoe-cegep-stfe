

<link rel="stylesheet" href="./css/style.css"/>
  <div class="container">
      <h1 id="player-text">Tic-Tac-Toe</h1>
      <div class=username-and-first-player>
      <div class="tt-username"><?php echo 'User: '. wp_get_current_user()->display_name; ?></div>
      <div class="tt-first-player"><?php echo '1e Joueur: '. get_option( 'tic_tac_toe_option_name' )['premier_joueur_0']; ?></div>
      </div>
      <!-- Grille de jeu -->
      <div id="tic-tac-toe" class="ttt_container">
        <div id="gameboard">
          <div class="box" id="ttt-11"></div>
          <div class="box" id="ttt-12"></div>
          <div class="box" id="ttt-13"></div>

          <div class="box" id="ttt-21"></div>
          <div class="box" id="ttt-22"></div>
          <div class="box" id="ttt-23"></div>

          <div class="box" id="ttt-31"></div>
          <div class="box" id="ttt-32"></div>
          <div class="box" id="ttt-33"></div>
        </div>

        <!-- Bouton Restart -->
        <div class="ttt_manage">
          <label>Joueur 1:</label>
          <input id="ttt-p1", name="ttt-p1" type="text", value="P1">
          <select name="symbol">
              <option value="X" selected>X</option>
              <option value="O">O</option>
          </select>

          <label>Joueur 2:</label>
          <input id="ttt-p2" type="text", name="ttt-p2" value="P2">

          <div id="ttt-info" class="ttt_info"></div>

          <div class="ttt_buttons">
            <button onclick="startNewGame()" id="restart-button">Reset</button>
          </div>
        </div>

        <!-- Noms des joueurs et scores -->
        <div id="players">
          <div id="player1" class="active">
            <p>Joueur 1</p>
            <p>Score : <span id="score1">0</span></p>
          </div>
  
          <div id="player2">
            <p>Joueur 2</p>
            <p>Score : <span id="score2">0</span></p>
          </div>
        </div>
      </div>
    </div>

    <script src="./js/tic-tac-toe.js"></script>
  <!--<script src="app.js"></script>-->