<?php if(isset($_GET['send'])) 
{
	if ($_GET['send']==1) {
		$mailSucess="<h4>Votre message a été envoyé, je vais y répondre au plus vite<h4><hr>"; 
	}
	elseif($_GET['send']==2)
	{
		$mailSucess="<h4>Vous avez remplis un input caché dans le formulaire, vous êtes soit un robot soit un développeur, dans le dernier cas BONJOUR :) (le mail n'a pas été envoyé)<h4><hr>"; 
	}
		elseif($_GET['send']==3)
	{
		$mailSucess="<h4>Erreur dans la réponse du captcha, vous pouvez essayer à nouveau (le mail n'a pas été envoyé)<h4><hr>"; 
	}
}
else {
	$mailSucess=""; 
}
?>

<!DOCTYPE HTML>
<html prefix="og: http://ogp.me/ns#">
	<head>
		<title>Derek Salmon Développeur Web & Communication Digitale</title>
		<meta charset="UTF-8">
		<meta name="description" content="Derek Salmon, Communication Digitale - Développement Web à Strasbourg - Freelance. Contactez moi pour vos projets numériques (site web, SEO-SMO)." />
        
    <meta name="keywords" content="développeur web strasbourg, referencement Strasbourg, community management Strasbourg, communication Strasbourg, webmarketing Strasbourg, developpeur web Strasbourg, creation de site internet Strasbourg, intégrateur web Strasbourg, auto-entrepreneur Strasbourg, freelance Strasbourg" />
    <meta name="author" content="Derek Salmon " /> 
    <meta name="publisher" content="Derek Salmon">
    <meta name="category" content="developpeur web Strasbourg, creation de site internet Strasbourg, creation de site web Strasbourg, referencement Strasbourg, seo Strasbourg, emarketing Strasbourg, social management Strasbourg, réseaux sociaux Strasbourg, communication Strasbourg">
    
    <link rel="icon" type="image/png" href="images/wtod-16x16.png" sizes="16x16" />

    <meta property="og:locale" content="fr_FR" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Derek Salmon, Communication Digitale et Developpement Web à Strasbourg" />
		<meta property="og:description" content="Derek Salmon, Communication Digitale - Developpement Web | Strasbourg - Freelance. Contactez moi pour vos projets web (site web, SEO-SMO)." />
		<meta property="og:url" content="http://www.derek-salmon.me/" />
		<meta property="og:image" content="http://www.derek-salmon.me/images/graphisme.jpg" />
		<meta property="og:site_name" content="Derek Salmon Développeur Web - Communication Digitale" />

		<meta name="twitter:card" content="summary" />
		<meta name="twitter:title" content="Derek Salmon, Communication Digitale et Developpement Web à Strasbourg" />
		<meta name="twitter:url" content="http://www.derek-salmon.me/" />
		<meta name="twitter:image" content="http://www.derek-salmon.me/images/graphisme.jpg" />
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		
		<script src="https://apis.google.com/js/platform.js" async defer>
		  {lang: 'fr'}
		</script>

		<script src="js/init.js" defer></script> 
		<script src="js/jquery.poptrox.min.js" defer></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js" defer></script><![endif]-->
	</head>
	<body>
		<!-- Header -->
			<header id="header">

				<!-- Logo -->
					<h1 id="logo"><a href="#">Derek Salmon - Communication Digitale</a></h1>
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro">Accueil</a></li>
							<li><a href="#one">Présentation</a></li>
							<li><a href="#two">Mes services</a></li>
							<li><a href="#work">Mes réalisations</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</nav>
					
			</header>
			
		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div itemscope itemtype="http://data-vocabulary.org/Person">
					<div class="content container small">
						<header>
							<?= $mailSucess; ?>
								<h2><span itemprop="name">Derek Salmon - Freelance</span></h2>
						</header>
						<p><strong>Communication Digitale</strong> & <span itemprop="jobTitle">Développeur Web</span> à <span itemprop="locality">Strasbourg</span>, orienté frontend, spécialisé en UI/UX design et réseaux sociaux.</p>
						<p>Conception de sites interactifs, ergonomiques, et graphiques au service d'une communication de qualité.</p>
						<footer> 
							<a href="#one" class="button style2 down">More</a>
						</footer>
					</div>
				</div>
			</section>
		
		<!-- One -->
			<section id="one" class="main style2 left dark fullscreen">
				<div class="content box style2" itemscope itemtype="http://schema.org/LocalBusiness">
					<header>
						<h2>Présentation</h2>
					</header>
					<p itemprop="description">Freelance, dans le domaine du développement web et de la <strong>communication digitale</strong>.</p>
					<p>&Eacute;tudiant en alternance, en Master Emarketing à <strong>Strasbourg</strong>.</p>
					<p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">Je travaille, en tant que Full Stack Marketer, chez France Création, une agence web à <span itemprop="addressLocality">Strasbourg</span>.</p>
				</div>
				<a href="#two" class="button style2 down anchored">Next</a>
			</section>
		
		<!-- Two -->
			<section id="two" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Mes Services Freelance</h2>
					</header>
					<p>Retranscrire vos idées, grâce au développement d'applications web interactives et graphiques.</p>
					<p>Mon objectif est de créer des sites web facilitant l'expérience utilisateur aussi bien sur smartphones, tablettes et ordinateurs.</p>
					<h3>Mes Compétences en Communication Digitale</h3>
					<ul>
						<li>| Audit de site web</li>
						<li>| Développement de site vitrine responsive</li>
						<li>| Référencement, communication digitale & Emarketing</li>
					</ul>

					<h4 class="link__dark--underline">Plus de détails sur <a href="services.php">Mes Services</a></h4>
				</div>
				<a href="#work" class="button style2 down anchored">Next</a>
			</section>
			
		<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content container">
					<header>
						<h2>Mes Réalisations Digitales</h2>
						<p>Mes différents travaux autour du développement web, de la communication et des réseaux sociaux.</p>
					</header>
					<!--
						 Lightbox Gallery
						 Powered by poptrox. Full docs here: https://github.com/n33/jquery.poptrox
					-->
						<div class="container small gallery"> 
							<div class="row flush images">
								<div class="6u"><a href="images/fulls/developpement-web-MasterCFT.jpg" class="image full l"><img src="images/thumbs/developpement-web-MasterCFT.jpg" title="Développement d'un site vitrine responsive pour le master CFT Strasbourg"  alt="Développement web pour le master CFT Strasbourg" /></a></div>
								<div class="6u"><a href="images/fulls/developpement-web-Sonia-ebel.jpg" class="image full l"><img src="images/thumbs/developpement-web-Sonia-ebel.jpg" title="Développement d'un site vitrine responsive pour <a href='http://www.sonia-ebel.com/'>Sonia Ebel</a>"  alt="Développement web pour Sonia Ebel graphiste Strasbourg" /></a></div>
								<div class="6u"><a href="images/fulls/Catalogue-LifeisaGame.jpg" class="image full r"><img src="images/thumbs/Catalogue-LifeisaGame.jpg" title="Social networking pour Life is a Game autour des nouveaux visuels" alt="Life is a Game logo" /></a></div> 
								<div class="6u"><a href="images/fulls/LIfeisaGame-logodark.jpg" class="image full l"><img src="images/thumbs/LIfeisaGame-logodark.jpg" title="Community Management pour Life is a Game" alt="Life is a Game catalogue" /></a></div>
								<div class="6u"><a href="images/fulls/Tutorial-Jquery.png" class="image full l"><img src="images/thumbs/Tutorial-Jquery.png" title="Site de démonstration de <a href='http://wtod.github.io/Jquery-Pure-Fun/' target=_blank>Jquery et Pure Css</a>" alt="Démonstration de Jquey" /></a></div>
								<div class="6u"><a href="images/fulls/projet-kolb.jpg" class="image full l"><img src="images/thumbs/projet-kolb.jpg" title="Questionnaire de m&eacute;thode d'apprentissage: m&eacute;thode kolb" alt="Questionnaire int&eacute;ractif Kolb" /></a></div>
								<div class="6u"><a href="images/fulls/Urban-adhesif.jpg" class="image full l"><img src="images/thumbs/Urban-adhesif.jpg" title="Adh&eacute;sif, banderole pour la patisserie Urban &agrave; Obernai" alt="Adh&eacute;sif pour la p&acirc;tisserie Urban &agrave; Obernai" /></a></div>
								<div class="6u"><a href="images/fulls/Apero-autocollant.jpg" class="image full l"><img src="images/thumbs/Apero-autocollant.jpg" title="R&eacute;alisation d'autocollant pour l'associaiton ap&eacute;ro d'Obernai"  alt="Autocollant pour l'association Ap&eacute;ro" /></a></div>
							</div>
						</div>
				</div>
			</section>
			
		<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content container">
					<header>
						<h2>Contact</h2>
						<p>Un site à réaliser, une communication digitale à développer, une simple question, contactez-moi.</p>
					</header>

					<div class="box container small">
							<form method="post" action="contact.php">
								<div class="row half">
									<div class="6u m-hidden"><label class="m-hidden">Bot</label><input type="text" name="bot" title="Mechant robot" placeholder="bot" class="m-hidden"/></div>

									<div class="6u"><label class="m-hidden">Nom</label><input type="text" name="name" placeholder="Nom"  title="Renseignez votre nom" required/></div>
									<div class="6u"><label class="m-hidden">Email</label><input type="text" name="email" placeholder="Email" title="Renseignez votre prénom" required /></div>
								</div>
								<div class="row half">
									<div class="12u"><label class="m-hidden">Message</label><textarea name="message" placeholder="Message" rows="6" title="Renseigner votre message"></textarea></div>
								</div>
								<div class="row half">
									<div class="12u"><label>Captcha : Combien il y a de lettres dans HTML </label><input type="number" name="answer" placeholder="Votre réponse"></div>
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
						<li><a href="mentions.php">Mentions légales</a> | &copy; Derek Salmon</li>
					</ul>
			</footer>

			<script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-42133313-1', 'auto');
        ga('send', 'pageview');
       </script>
	</body>
</html>