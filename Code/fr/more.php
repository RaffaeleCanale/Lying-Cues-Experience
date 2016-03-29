<?php
require_once('../constants.php');

$redirect_page = END_REDIRECT_PAGE;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<title>Étude SHS :: Détection de mensonges</title>
</head>

<body>
	<div class="container">

		<div class="row row-top-margin text-center">
			<div class="col-md-12">
				<h1>Détection de visages dignes de confiance</h1>
			</div>
		</div>

		<div class="row row-top-margin text-center">
			<div class="col-md-12">
				<p class="lead important-text">
					Veuillez retourner à la page d'accueil grâce au bouton ci-dessous une fois votre lecture terminée.
				</p>
			</div>
		</div>

		<div class="row row-top-margin text-center">
			<div class="col-md-12">
				<h2>Débriefing</h2>
			</div>
		</div>

		<div class="row row-top-margin">
			<div class="col-md-8 col-md-offset-2">
				<p class="lead">
					Il est facile de s’imaginer pourquoi les humains sont intéressés dans la détection de mensonges, comme par exemple au cours d’interactions personnelles ou dans le cas d’éventuelles violations de la loi. Toutefois, si les gens semblent sensibles aux indices révélateurs de mensonges, ils certainement tout autant sensibles à ceux aux indices qui leur permettent de faire confiance à leur interlocuteur.<br>
					La littérature scientifique offre des listes d’indices faciaux et non-faciaux supposés aider dans l’identification du comportement menteur ou digne de confiance. Par ailleurs, des tentatives ont été faites dans le but de développer des machines capables de séparer les menteurs de ceux qui disent la vérité. Cependant, de telles machines se sont avérées beaucoup moins fiables que les humains. Probablement, les humains sont meilleurs dans la détection des intentions d’autrui en se fiant à des indices non-accessibles à nos mécanismes conscients de prise de décision. Cette étude a pour but de tester la contribution de ces potentiels indices dans la détection de la fiabilité d’autrui.
				</p>
				<p class="lead">
					Les humains peuvent prendre des décisions de façon très rapide, prenant en compte un ou plusieurs aspects de l’information présente. Certaines informations peuvent être accessibles à la personne, alors que d’autres peuvent être cachées. De récentes études ont montré que la présentation à des informations inconsistantes peut entraver ce style rapide et automatique de traitement de l’information. Dans le cas présent, cela impliquait de présenter non seulement des indices dont il est supposé qu’ils indiquent la fiabilité d’autrui, mais également d’ajouter d’autres traits communément considérés comme neutres ou même indicateurs d’un mensonge. Plus précisément, nous avons réalisé cela en superposant sur une seule image faciale : i)  des indices d’honnêteté, ii) des indices d’honnêteté et de tromperie, iii) des indices de tromperie. Nous nous attendons à ce que les stimuli mixtes, transmettant des informations inconsistantes, interfèrent avec le processus de prise de décision, ce qui se reflèterait par des temps de réaction accrus.
				</p>
				<p class="lead">
					Si vous êtes intéressés par notre travail, si vous souhaitez connaître nos résultats et conclusions (lorsqu’ils seront disponibles) ou si vous avez d’autres questions, suggestions, remarques ou commentaires, contactez-nous sans hésiter à l’adresse 
					<a href="mailto:mathieu.arminjon@unige.ch">mathieu.arminjon@unige.ch</a>.
				</p>
			</div>
		</div>

		<div class="row row-top-margin row-bottom-margin">
			<div class="col-md-12 text-center">
				<button class="btn btn-primary btn-lg" onclick='window.location.href = "<?php echo $redirect_page ?>";'>Page d'accueil</button>
			</div>
		</div>

	</div>

</body>
</html>