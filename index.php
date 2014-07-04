<?php if(isset($_GET['send'])) {
	$mailSucess="<h4>Votre message a été envoy&eacute;, je vais y r&eacute;pondre au plus vite<h4><hr>"; 
}
else {
	$mailSucess=""; 
}
?>

<!DOCTYPE HTML>
<html>

	<head>
		<title>Derek Salmon | D&eacute;veloppeur Web & Communication Digitale</title>
		<meta charset="UTF-8">
		<meta name="description" content="Derek Salmon: Communcation Digitale & Développement Web - Strasbourg - Freelance. Contactez moi pour vos projets numériques (site web, social management)." />
        <meta name="keywords" content="community management, communicaiton, webmarketing, developpeur web,intégrateur web, auto-entrepreneur, freelance, webdesigner, graphiste, wordpress, PHP, javascript, html, css, " />
        
        <meta name="author" content="Derek Salmon " /> 
        <meta name="publisher" content="Derek Salmon">
        <meta name="category" content="developpeur web, webdesign, création de site web, infographie, social management, communicaiton">
        
        <link rel="icon" type="image/png" href="images/wtod-16x16.png" sizes="16x16" />
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<script src="js/jquery.min.js" asynch></script>
		<script src="js/skel.min.js" asynch></script>

		<script src="js/init.js" defer></script>
		<script src="js/jquery.poptrox.min.js" defer></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js" defer></script><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header">

				<!-- Logo -->
					<h1 id="logo"><a href="#">Derek Salmon</a></h1>
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro">Accueil</a></li>
							<li><a href="#one">Mes services</a></li>
							<li><a href="#two">Pr&eacute;sentation</a></li>
							<li><a href="#work">Mes r&eacute;alisations</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</nav>
					
			</header>
			
		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content container small">
					<header>
						<?= $mailSucess; ?>
						<h2>Derek Salmon</h2>
					</header>
					<p>Communicaiton Digitale & D&eacute;veloppeur Web &agrave; Strasbourg, orient&eacute; frontend, sp&eacute;cialis&eacute; en en UI/UX design et réseaux sociaux.</p>
					<p>Conception de sites interactifs, ergonomiques, et graphiques au service d'une communication de qualité.</p>
					<footer>
						<a href="#one" class="button style2 down">More</a>
					</footer>
				</div>
			</section>
		
		<!-- One -->
			<section id="one" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Mes services</h2>
					</header>
					<p>Retranscrire vos id&eacute;es, avec le code et la programmation, en images et interactions.</p>
					<p>Mon objectif est de cr&eacute;er des sites web facilitant l'exp&eacute;rience utilisateur aussi bien sur smartphones, tablettes et ordinateurs.</p>
				</div>
				<a href="#two" class="button style2 down anchored">Next</a>
			</section>
		
		<!-- Two -->
			<section id="two" class="main style2 left dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Pr&eacute;sentation</h2>
					</header>
					<p>&Eacute;tudiant en alternance, en licence professionnelle en web développement et communication &agrave; Strasbourg.</p>
					<p>Je poursuis mes études en master, toujours en alternance, dans le domaine de la communicaiton digitale.</p>
				</div>
				<a href="#work" class="button style2 down anchored">Next</a>
			</section>
			
		<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content container">
					<header>
						<h2>Mes R&eacute;alisations</h2>
						<p>Mes diff&eacute;rents travaux autour du web, du graphisme et des r&eacute;seaux sociaux.</p>
					</header>
					
					<!--
						 Lightbox Gallery
						 
						 Powered by poptrox. Full docs here: https://github.com/n33/jquery.poptrox
					-->
						<div class="container small gallery"> 
							<div class="row flush images">
								<div class="6u"><a href="images/fulls/Catalogue-LifeisaGame.jpg" class="image full r"><img src="images/thumbs/Catalogue-LifeisaGame.jpg" title="Social networking pour Life is a Game autour des nouveaux visuels" alt="Life is a Game logo" height="595" width="595" /></a></div> 
								<div class="6u"><a href="images/fulls/LIfeisaGame-logodark.jpg" class="image full l"><img src="images/thumbs/LIfeisaGame-logodark.jpg" title="Community Management pour Life is a Game" alt="Life is a Game catalogue" height="595" width="595" /></a></div>
								<div class="6u"><a href="images/fulls/Tutorial-Jquery.png" class="image full l"><img src="images/thumbs/Tutorial-Jquery.png" title="Site de démonstration de <a href='http://wtod.github.io/Jquery-Pure-Fun/' target=_blank>Jquery et Pure Css</a>" alt="D&eacute;monstration de Jquey" height="595" width="595" /></a></div>
								<div class="6u"><a href="images/fulls/projet-kolb.jpg" class="image full l"><img src="images/thumbs/projet-kolb.jpg" title="Questionnaire de m&eacute;thode d'apprentissage: m&eacute;thode kolb" alt="Questionnaire int&eacute;ractif Kolb" height="595" width="595" /></a></div>
								<div class="6u"><a href="images/fulls/Urban-adhesif.jpg" class="image full l"><img src="images/thumbs/Urban-adhesif.jpg" title="Adh&eacute;sif, banderole pour la patisserie Urban &agrave; Obernai" alt="Adh&eacute;sif pour la p&acirc;tisserie Urban &agrave; Obernai" height="595" width="595" /></a></div>
								<div class="6u"><a href="images/fulls/Apero-autocollant.jpg" class="image full l"><img src="images/thumbs/Apero-autocollant.jpg" title="R&eacute;alisation d'autocollant pour l'associaiton ap&eacute;ro d'Obernai"  alt="Autocollant pour l'association Ap&eacute;ro" height="595" width="595" /></a></div>
							</div>
						</div>
				</div>
			</section>
			
		<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content container">
					<header>
						<h2>Contact</h2>
						<p>Un site &agrave; r&eacute;aliser, une communication &agrave; d&eacute;velopper, une simple question, contactez-moi.</p>
					</header>

					<div class="box container small">
							<form method="post" action="contact.php">
								<div class="row half">
									<div class="6u"><label class="m-hidden">Nom</label><input type="text" name="name" placeholder="Nom"  title="Renseignez votre nom" required/></div>
									<div class="6u"><label class="m-hidden">Email</label><input type="text" name="email" placeholder="Email" title="Renseignez votre prénom" required /></div>
								</div>
								<div class="row half">
									<div class="12u"><label class="m-hidden">Message</label><textarea name="message" placeholder="Message" rows="6" title="Renseigner votre message"></textarea></div>
								</div> 
								<div class="row">
									<div class="12u">
										<ul class="actions">
										<li>
											<input type="submit" class="button" value="Envoyer votre Message"  />
										<li>
										</ul>
									</div>
								</div>
							</form>
					</div>
				</div>
			</section>
			
		<!-- Footer -->
			<footer id="footer">
					<ul class="actions">
						<li><a href="https://twitter.com/dereksalmon_fr" class="fa solo fa-twitter" target=_blank><span>Twitter</span></a></li>
						<li><a href="https://plus.google.com/+derekSALMON/" class="fa solo fa-google-plus" target=_blank ><span>Google+</span></a></li>
						<li><a href="https://github.com/wtod" class="fa solo fa-github" target=_blank><span>Github</span></a></li>
						<li><a href="https://www.linkedin.com/in/dereksalmon" class="fa solo fa-linkedin" target=_blank><span>Linkedin</span></a></li>

					</ul>
				<!-- Menu -->
					<ul class="menu">
						<li>&copy; Derek Salmon</li>
					</ul>
			</footer>

			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-42133313-1', 'derek-salmon.com');
			  ga('send', 'pageview');

			</script>
	</body>
</html>