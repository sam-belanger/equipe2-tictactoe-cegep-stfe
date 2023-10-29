Projet de TicTacToe

PAGE TIC-TAC-TOE ###############################################################################

Il s'agit ici du plug-in Wordpress.

Le html se situe dans le fichier index.php
Le CSS se situe dans le fichier style.css

Les éléments et styles sont chargés dans la page à l'activation du plug-in.

------------------------------------------------------------------------------------------------
================================================================================================

PAGE DE CONNEXION ##############################################################################

HTML | Page de connexion. À mettre dans la page Wordpress directement.
ATTENTION! Worpress créer du code supplémentaire. Modifier le code affectera le rendu de la page.
Les images doivent être contenu dans la bibliothèque Wordpress et posséder le même url.

<p><!--Chargement des polices-->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Lacquer&display=swap" rel="stylesheet"
/><br />
<!--Page de connexion--></p>
<div id="connection-wrapper">
<!--Barre de navigation--></p>
<div class="navbar">
<ul>
<li><img src="http://envweb.test/wp-content/uploads/2023/10/logo.png" alt="logo xgamesstation"/></li>
<li><p class="slogan">Rassemblez vos amis, jouez en ligne, dominez le jeu.</p></li>
<li><a class="login-btn" href="">CONNEXION</a></li>
</ul>
</div>
<p><!--Fin de la barre de navigation--><br />
<!--Formulaire de connexion--></p>
<div class="tictactoe-login-form">
<h1 class="form-title">Connectez-vous et jouez!!</h1>
<form action="POST">
<input class="tictactoe-email-field" value="Email*" onclick="this.value=''" onblur="if(this.value=='') this.value='Email*'" required
/><br />
<input class="tictactoe-password-field" value="Mot de passe*" onclick="this.value=''" onblur="if(this.value=='') this.value='Mot de passe*'" required/><br />
</form>
<p class="paragraph-link-btn"><a class="tictactoe-link-btn" href="https://www.example.com">Go!</a></p>
<p><!--Fin du formulaire de connexion--></p>
<p><!--Lien pour créer un compte--></p>
<p class="nouveau-compte-tictactoe">Besoin d'un compte?
<br />
<a class="tictactoe-create-account-link" href="#">Clique ici!</a></p>
<p><!--Fin du lien créer un compte--></div>
</div>
<p><!--Footer--></p>
<div class="footer">
<div class="x"><img src="http://envweb.test/wp-content/uploads/2023/10/logo.png" alt="" /></div>
<div class="social">
<p>Nous suivre</p>
<ul class="social-media-list">
<li><img src="http://envweb.test/wp-content/uploads/2023/10/facebook.png" alt="suivez nous sur facebook"/></li>
<li><img src="http://envweb.test/wp-content/uploads/2023/10/instagram.png" alt="suivez nous sur instagram"/></li>
<li><img src="http://envweb.test/wp-content/uploads/2023/10/play-btn.png" alt="voir des matchs en direct"/></li>
</ul>
</div>
<div class="team-logo">
<img src="http://envweb.test/wp-content/uploads/2023/10/logo-equipe2.png" alt="" /></div>
</div>
<p><!--Fin du footer --></p>

------------------------------------------------------------------------------------------------
================================================================================================

CSS ADITIONNEL POUR THEME TWENTY TWENTY-THREE ##################################################

Le style du thème sera modifier pour les pages du site uniquement.
Les styles ne déborderons pas dans Worpress du à l'utilisation d'identifiants et classes spécifiques.

/* Empecher les styles par défault du theme Twenty twenty-three

Code à mettre dans le CSS du theme WP.

Chemin d'accès au style du theme : 

1) Apparence.
2) Themes.
3) Choisir Twenty twenty-three.
4) Personnaliser.
5) Page.
6) Tic-Tac-Toe (titre de la page)
7) Cliquer sur modifier (petit crayon à gauche)
8) Cliquer sur le rond moitié blanc et moitié noir dans la barre en haut a droite.
9) Cliquer sur CSS additionnel en bas du menu de droite.
10) Copier le code CSS si bas :

body
    .is-layout-constrained
    > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
    max-width: 100vw !important;
    margin-left: 0 !important;
    margin-right: 0 !important;
    text-align: center;
}

.has-global-padding {
    padding-right: 0 !important;
    padding-left: 0 !important;
}

.wp-site-blocks {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
}

.wp-block-template-part {
    display: none;
}

.wp-block-post-content a:where(:not(.wp-element-button)) {
    color: #ffffff;
}

a:where(:not(.wp-element-button)) {
text-decoration: none;}

*{margin: 0;
padding:0;}

/* Barre de navigation */

.navbar {
    display: grid;
    width: 100%;
    background-color: #000000;
}

.navbar ul {
    display: inherit;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: 1fr;
    align-items: center;
}

.logo {
    width: 8rem;
    height: 8rem;
}

.slogan {
    font-size: 2.4rem;
    color: #ffffff;
    text-transform: uppercase;
    font-family: "Lacquer";
}

.login-btn {
    padding: 20px 50px;
    border-radius: 5px;
    background-color: #ff6900 !important;
    border: none;
    color: #ffffff;
    font-size: 1.6rem;
}

/* Wrapper page de connexion */

div#connection-wrapper {
    text-align: center;
}

/* Formulaire de connexion */

.tictactoe-login-form {
    width: 50rem;
    height: 45rem;
    background-color: #000000;
    border-radius: 25px;
    margin: 2rem auto 4rem auto;
}

/* Titre du formulaire */

.form-title {
    font-size: 3.6rem;
    display: block;
    padding: 2rem;
    color: #ffffff;
}

/* Champs du formulaire */

.tictactoe-login-form input {
    padding: 1rem 5rem;
    margin: 1.2rem;
    border-radius: 5px;
    background-color: #f55208;
    border: none;
    font-size: 20px;
    text-align: center;
}

/* Bouton de connexion du formulaire */

.paragraph-link-btn {
    height: 3.5rem;
}

.tictactoe-link-btn {
    display: block;
    width: 6rem;
    margin: 3rem auto;
    background-color: #f55208;
    color: #000000 !important;
    padding: 20px 40px;
    font-size: 2rem;
    border-radius: 10px;
    border: none;
    text-transform: uppercase;
}

/* Lien pour création d'un compte */

.nouveau-compte-tictactoe {
    color: #ffffff;
    font-size: 26px;
    padding-top: 4rem;
}

/* Forcer le style css sur le theme WP pour le lien */

.tictactoe-create-account-link {
    color: #f55208 !important;
    text-decoration: underline !important;
}

/* Footer */

div.footer {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: 1fr;
    grid-template-areas: "x" "social" "team-logo";
    background-color: #000000;
    align-items: center;
    height: 18rem;
}

.social-media-list li {
    display: inline-block;
    margin: 1.2rem;
}

.footer p {
    color: #ffffff;
    font-size: 2rem;
    text-align: center;
    font-family: "Inder";
}