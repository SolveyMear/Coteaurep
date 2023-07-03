<?php 
require_once __DIR__ . '/../vitephp/helpers.php';
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Coteaurep</title>
		<meta charset="utf-8" />
		<!-- <link rel="stylesheet" href="stylesPlanLeCoteau.css" /> -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap"
			rel="stylesheet" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>

	<body>
	<?php
							echo 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA';
							?>
		<!-- header -->
		<header>
			<nav>
				<!-- for-computers -->
				<!-- for-computers -->

				<div class="barOnglets">
					<div class="logoCoteaurep">
						<img
							src="../images/logos/logo_coteaurep-removebg-preview.png"
							alt="Logo coteaurep"
							style="height: 100%" />
					</div>
					<ul class="onglets">
						<li class="accueil">
							<a href="../index.html"> Accueil</a>
						</li>
						<li class="galerie">
							<a href="galerie.html"> Galerie</a>
						</li>
						<li class="cinema">
							<a href="cinemaCoteau.html"> Cinéma</a>
						</li>
						<li class="evenement">
							Évènement
						</li>
						<li class="goodies">
							<a href="goodiesCoteau.html"> Goodies</a>
						</li>
						<li class="planAcess">
							<a href="plan.php"> Plan</a>
						</li>
					</ul>
					<div class="logSign">
                        <a href="monCompteLeCoteau.html">
                            <div class="seConnecter" >
                                <div class="logoConnection"><img src="../images/images-used/chopBiereLogo.png" alt="logoConnection"> </div>
                                <div class="logoConnection2"><img src="../images/images-used/chopBiereLogo.png" alt="logoConnection"> </div>
                            </div>
						    <div class="monCompte">Mon compte</div>
                        </a>
					</div>
				</div>
			</nav>
		</header>
		<main>
			<div class="presentationEspacePlan">
				Bienvenue sur notre page du plan d'accès ! Vous cherchez à rejoindre Le Coteau de manière facile, écologique et conviviale ? Ne cherchez plus ! Consultez notre plan détaillé pour trouver votre chemin. Découvrez également les horaires des lignes de bus et de train depuis Tours pour un voyage pratique et respectueux de l'environnement. Nous sommes impatients de vous accueillir au Coteau, où vous pourrez profiter de moments inoubliables dans un cadre enchanteur à la campagne. À bientôt !
			</div>
            <div class="transport">
				<div class="transportEnCommun">
					<div class="demandeDHoraireTransport">
						<h2 class="aQuelleHeureTuVeuxPartirDeTours">Tu veux partir quand de Tours ?</h2>
						<form class="dateHeureDepart" action="" >
							<label for="date">Quel jour ?</label>
							<input type="date">
							<label for="heure">Quelle Heure ?</label>
							<input type="time">
							<button class="buttonChercher">chercher</button>
						</form>
						
						<?php
							$fichier = fopen("tableau.csv", "r");
							?>
						<ol class="reponsesTransport">
							<h2 class="tesMeilleursOptions">Tes meilleurs options :</h2>
							<li class="reponses">Ligne G à 18h25 à la gare de Tours, tu dessendras à St-Branchs centre.</li>
							<li class="reponses">Ligne G à 18h45 à la gare de Tours, tu dessendras à St-Branchs centre.</li>
							<li class="reponses">Ligne G à 19h05 à la gare de Tours, tu dessendras à St-Branchs centre.</li>
						</ol>
						<button class="plusDeTrajets">Plus de trajets.</button>
					</div>
					<div>
						<h2 class="planDuCoin">Plan du Coin.</h2>
						<div><iframe src="https://www.google.com/maps/d/embed?mid=1Os-cQcWPBm0mrO2oyTKU9tAKpVHWOFM&ehbc=2E312F" width="640" height="680"></iframe></div>
					</div>
				</div>
				<div class="pdfHoraires">
					<h2 class="listeDesLignesDeTrainsEtDeBus">Liste des lignes de train et de bus:</h2>
					<div class="textePdfHoraire">Clique sur les lignes si tu veux le PDF officiel des horaire</div>
					<div class="listePdfLignes">
						<ul class="listeBus">Bus :
							<li> <a href="https://www.remi-centrevaldeloire.fr/wp-content/uploads/37-indre-et-loire/lignes-regulieres/horaires-2022/DEPLIANT-HORAIRES-2022-ligne-G-340X185.pdf" target="_blank">Remi Ligne G</a></li>
							<li> <a href="https://www.remi-centrevaldeloire.fr/wp-content/uploads/37-indre-et-loire/lignes-regulieres/horaires-2022/DEPLIANT-HORAIRES-2022-ligne-F.pdf" target="_blank">Remi Ligne F</a></li>
							<li> <a href="https://www.remi-centrevaldeloire.fr/wp-content/uploads/37-indre-et-loire/lignes-regulieres/horaires-2022/DEPLIANT-HORAIRES-2022-ligne-H.pdf" target="_blank">Remi Ligne H</a></li>
							<li> <a href="https://www.remi-centrevaldeloire.fr/wp-content/uploads/DEPLIANT-HORAIRES-2022-ligne-H1-II.pdf" target="_blank">Remi Ligne H1</a></li>
							<li> <a href="https://www.remi-centrevaldeloire.fr/wp-content/uploads/DEPLIANT-HORAIRES-2022-ligne-H2-II.pdf" target="_blank">Remi Ligne H2</a></li>
							<li> <a href="https://www.remi-centrevaldeloire.fr/wp-content/uploads/LIGNE800-SITE-REGION-V11-A3-01-06-2023.pdf" target="_blank">Remi Ligne 800</a></li>
						</ul>
						<ul class="listeTrains">Trains :
							<li> <a href="https://www.remi-centrevaldeloire.fr/wp-content/uploads/LIGNE800-SITE-REGION-V11-A3-01-06-2023.pdf" target="_blank">Remi Ligne 800</a></li>
						</ul>
						<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRLvPaZ8zLzOvCIIvVVJILsAqsK-YTPDzvAQVsLgjHHMCVctWrhkWhnJkjQD5yTQRc6bJHSn0zGbzIi/pubhtml?widget=true&amp;headers=false"></iframe>
					</div>
				</div>
			</div>
        </main>
		<footer>
			<div class="reseauxSociaux">
				<h2 class="vousAimez">Suit Le Coteau.</h2>
				<div class="likePartage">
					<div class="reseaux">
						<img src="../images/images-used/facebookLogo.png" alt="reseaux logo" ;>
					</div>
					<div class="reseaux">
						<img src="../images/images-used/twitterLogo.png" alt="reseaux logo" ;>
					</div>
					<div class="reseaux">
						<img src="../images/images-used/instagramLogo.png" alt="reseaux logo" ;>
					</div>
					<div class="reseaux">
						<img src="../images/images-used/whatappLogo.png" alt="reseaux logo" ;>
					</div>
				</div>
			</div>
		</footer>
		<?= vite('js/main.js') ?>
		<!-- <script type="module" src="../public/js/main.js"></script> -->

        </body>
</html>
        