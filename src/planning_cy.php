<?php
$page = basename($_SERVER["PHP_SELF"]);
?>
<!DOCTYPE html>
<html lang="cy">
<head>
<meta charset="utf-8">
<title>Cyngor Cymuned Manordeilo a Salem</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
<link rel="manifest" href="images/favicons/site.webmanifest">
</head>
<body class="page-planning">

<?php include("inc/svgs.php"); ?>
<div class="wrapper">
	
<header class="header">
	<?php include("inc/header_cy.php"); ?>
</header>
<div class="full-width banner-holder">
    <div class="banner"></div>
</div>

<div class="nav-wrap">
	<ul class="mainnav nav">
		<?php include("inc/mainnav_cy.php"); ?>
		<li class="switch"><a href="planning.php">English</a></li>
	</ul>
</div>

<main class="main" id="main">
<h2 class="page-title">Cynllunio - <span class="error">translation required</span></h2>

<p>Please find on this page information pertaining to planning applications, decisions and updates within
the Manordeilo & Salem Community Council area, which we aim to revise regularly.</p>
<p>The Community Council has a statutory right to be consulted on all planning applications in its territory
and makes observations to the Local Planning Authority (LPA) that are taken into account in the
decision-making process.</p>
<p><a href="https://www.carmarthenshire.gov.wales/home/council-services/planning">Carmarthenshire County
Council's planning pages</a>. These pages illustrate the full details and stages achieved in the
planning process for all applications received within our area and others across the County.</p>
<p>Please find below a list of all planning applications relating to our community that have been submitted
to the LPA in 2020 to the present and the applications that have been decided over the same period. We
aim to keep it updated every week if possible.</p>

<h3>January 2020 - Present</h3>
<div class="js-tabs" data-existing-hx="h4">
	<ul class="js-tablist">
		<li class="js-tablist__item">
			<a href="#id_first" class="js-tablist__link">Submitted</a>
		</li>
		<li class="js-tablist__item">
			<a href="#id_second" class="js-tablist__link">Decided</a>
		</li>
	</ul>
	
	<div id="id_first" class="js-tabcontent">
		<h4>January 2020 - Present: Planning Applications (Submitted)</h4>
		<?php include("planning/2020-submitted.php"); ?>
	</div>
	<div id="id_second" class="js-tabcontent">
		<h4>January 2020 - Present: Planning Applications (Decided)</h4>
		<?php include("planning/2020-decided.php"); ?>
	</div>
</div>


</main>

<footer class="footer">
<?php include("inc/footer_cy.php"); ?>
</footer>

</div>

<script src="js/scripts.min.js"></script>
</body>
</html>	