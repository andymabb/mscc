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

<nav class="nav-wrap">
	<ul class="mainnav nav">
		<?php include("inc/mainnav_cy.php"); ?>
		<li class="switch"><a href="planning.php">English</a></li>
	</ul>
</nav>

<main class="main" id="main">
<h2 class="page-title">Cynllunio</h2>
<p>Dod o hyd i wybodaeth ar geisiadau cynllunio yn ein cymuned a gyflwynwyd ac a benderfynwyd arnynt yn ystod 2020.</p>
<p>Dangosir gwybodaeth yn yr iaith y cafodd ei derbyn.</p>
<p>I ddod o hyd i fanylion llawn ar gyfer ceisiadau cynllunio ewch i wefan <a href="https://www.sirgar.llyw.cymru/cartref/gwasanaethaur-cyngor/cynllunio/">Cynllunio Cyngor Sir Gâr</a>.</p>

<h3>Ionawr 2020 - Present</h3>
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