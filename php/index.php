<link rel="stylesheet" href="./css/style.css">
      <!--Page du Tictactoe-->
      <div id="tictactoe-wrapper">
      <?php echo "<div class='current-user'>" . wp_get_current_user()->display_name . "</div>"; ?>
            <!--Barre de navigation-->
            <div class="navbar">
                <ul>
                    <li>
                        <img
                            src="http://envweb.test/wp-content/uploads/2023/10/logo.png"
                            alt="logo xgamesstation"
                        />
                    </li>
                    <li>
                        <p class="slogan">
                            Rassemblez vos amis, jouez en ligne, dominez le jeu.
                        </p>
                    </li>
                    <li>
                        <a class="login-btn" href="">CONNEXION</a>
                    </li>
                </ul>
            </div>
            <!--Fin de la barre de navigation-->

            <!--Contenu principal de la page-->

            <div class="main-content">
                <!--Boites des modes de jeu-->
                <div class="gaming-mode-box">
                    <div class="play-with-friends">
                        <p>Joue avec tes amis!</p>
                        <img
                            class="friends-play-img"
                            src="http://envweb.test/wp-content/uploads/2023/10/friends-play.png"
                            alt="option joue avec tes amis"
                        />
                    </div>
                    <div class="multiplayers">
                        <p>Multijoueur en ligne Joue sur ton propre appareil</p>
                        <img
                            class="multiplayers-img"
                            src="http://envweb.test/wp-content/uploads/2023/10/multiplayers.png"
                            alt="option multijoueurs"
                        />
                    </div>
                </div>
                <!--Fin des boites de modes de jeu-->
                <!--Titre principal-->
                <div class="title-box">
                    <h1 class="main-title">
                        Testes-toi avec la démo de notre tout premier jeu le tic
                        tac toe!
                    </h1>
                </div>
                <!--Fin du titre principal-->
                <!--Paramètres du jeu et règles-->
                <div class="gameboard">
                    <div class="setting">
                        <ul>
                            <li>Choix du joueur</li>
                            <li><a href="">Aléatoire</a></li>
                            <li><a href="">Dernier vainqueur</a></li>
                            <li><a href="">Dernier perdant</a></li>
                            <li><a href="">Fixe</a></li>
                        </ul>
                        <ul>
                            <li>Choix du temps</li>
                            <li><a href="">15 sec</a></li>
                            <li><a href="">30 sec</a></li>
                            <li><a href="">Illimité</a></li>
                        </ul>
                    </div>
                    <div class="tic-tac-toe"></div>
                    <a class="gaming-rules" href="#">Règle du jeu</a>
                </div>
                <!--Fin des paramètres du jeu et règles-->

                <!--Tic-Tac-Toe-->
                <div class="gaming-area-wrapper">
                    <div class="time">
                    <?php echo "<div class='current-player'>" . get_option( 'tic_tac_toe_option_name' )['premier_joueur_0'] . "</div>"; ?>
                        <p>Temps restant : 00:15</p>
                    </div>
                    <table id="table_game">
                        <tr>
                            <td class="td_game">
                                <div id="cell0" class="fixed"></div>
                            </td>
                            <td class="td_game">
                                <div id="cell1" class="fixed"></div>
                            </td>
                            <td class="td_game">
                                <div id="cell2" class="fixed"></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td_game">
                                <div id="cell3" class="fixed"></div>
                            </td>
                            <td class="td_game">
                                <div id="cell4" class="fixed"></div>
                            </td>
                            <td class="td_game">
                                <div id="cell5" class="fixed"></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td_game">
                                <div id="cell6" class="fixed"></div>
                            </td>
                            <td class="td_game">
                                <div id="cell7" class="fixed"></div>
                            </td>
                            <td class="td_game">
                                <div id="cell8" class="fixed"></div>
                            </td>
                        </tr>
                    </table>
                    <div id="restart" title="Start new game">
                        <span>Reset</span>
                    </div>
                    <table>
                        <tr>
                            <th class="th_list active-player">Joueur X</th>
                            <th
                                class="th_list"
                                style="padding-right: 10px; padding-left: 10px"
                            ></th>
                            <th class="th_list">Joueur O</th>
                        </tr>
                        <tr>
                            <td class="td_list" id="computer_score">0</td>
                            <td
                                class="td_list"
                                style="padding-right: 10px; padding-left: 10px"
                                id="tie_score"
                            ></td>
                            <td class="td_list" id="player_score">0</td>
                        </tr>
                    </table>
                </div>
                <!--Fin du Tic-Tac-Toe-->

                <!--Jeu de carte à collectionner-->

                <div class="coming-soon">
                    <h2>Bientôt en ligne!</h2>
                    <div class="collecting-card">
                        <p>Jeu de carte à collectionner</p>
                        <img
                            src="http://envweb.test/wp-content/uploads/2023/10/collecting-cards.png"
                            alt="carte à collectionner"
                        />
                    </div>
                </div>
                <!--Fin jeu de carte à collectionner-->

                <!--Fin du contenu principal-->

                <!--Footer-->
                <div class="footer">
                    <div class="x">
                        <img src="http://envweb.test/wp-content/uploads/2023/10/logo.png" alt="" />
                    </div>

                    <div class="social">
                        <p>Nous suivre</p>
                        <ul class="social-media-list">
                            <li>
                                <img
                                    src="http://envweb.test/wp-content/uploads/2023/10/facebook.png"
                                    alt="suivez nous sur facebook"
                                />
                            </li>
                            <li>
                                <img
                                    src="http://envweb.test/wp-content/uploads/2023/10/instagram.png"
                                    alt="suivez nous sur instagram"
                                />
                            </li>
                            <li>
                                <img
                                    src="http://envweb.test/wp-content/uploads/2023/10/play-btn.png"
                                    alt="voir des matchs en direct"
                                />
                            </li>
                        </ul>
                    </div>
                    <div class="team-logo">
                        <img src="http://envweb.test/wp-content/uploads/2023/10/logo-equipe2.png" alt="" />
                    </div>
                    <!--Fin du footer-->
                </div>
            </div>
        </div>