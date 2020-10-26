<?php
$page = basename($_SERVER["PHP_SELF"]);
?>
<!DOCTYPE html>
<html lang="cy">
<head>
<meta charset="utf-8">
<title>Manordeilo And Salem Community Council</title>
<meta name="description" content="Minutes of Community Councils regular meetimg and AGM's">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

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
	<li class="switch"><a href="index.php">English</a></li>
	</ul>
</div>

<main class="main" id="main">
<h2 class="page-title">Croeso i Cyngor Cymuned Manordeilo a Salem</h2>
<P>Rydym yn gobeithio y byddwch yn ei gael yn ffynhonnell werthfawr a diddorol o wybodaeth.</P>
<P>Mae Cyngor Cymuned Manordeilo a Salem yn cynnwys dwy Ward sef Cwmifor a Salem ac yn cwmpasu cymunedau cyfagos Manordeilo, Rhosmaen, Penybanc, Capel Isaac a Taliaris.</P>
<P>Mae aelodaeth y Cyngor Cymuned yn cynnwys deuddeg cynghorydd etholedig, saith i gynrychioli Ward Cwmifor a phump i gynrychioli Ward Salem.</P>
<P>Mae'r Cyngor Cymuned yn bodoli i wasanaethu a chynrychioli'r gymuned ac mae'r cyfarfodydd yn cael eu cynnal ar yr ail Nos Fercher bob mis (nid oes cyfarfod ym Mis Awst) am 7:30yh yn Ystafell Ddarllen Manordeilo. Mae croeso i aelodau'r cyhoedd fynychi'r cyfarfodydd.</P>

<p class="error"><em>Different content from here!</em></p>

<h3>Neges Covid-19</h3>
<p class="error">Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati numquam autem illo, assumenda doloribus labore inventore distinctio suscipit dolor dicta ea aspernatur accusantium soluta eveniet nostrum officia quidem recusandae sunt.</p>

<section class="bb mb5">
	<h3>Diffibrilwyr</h3>
	
	<p class="error">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ea repellat maiores dolorum dicta nostrum sed accusantium cupiditate assumenda odio saepe culpa quo perferendis obcaecati unde recusandae ipsa sint, eius.</p>
	
	<ul>
	<li>All Small Engines, Manordeilo, Llandeilo, SA19 7BG</li>
	<li>Manordeilo Reading Room, Cwmifor, Llandeilo, SA19 7AW</li>
	<li>Salem Village Hall, Salem, Llandeilo, SA19 7LY</li>
	<li>Capel Isaac Vestry, Capel Isaac, Llandeilo, SA19 7TL</li>
	<li>The Plough Inn, Rhosmaen, Llandeilo, SA19 6NP</li>
	<li>Teilo Vets, Beechwood Estate, Talley Road, Llandeilo, SA19 7HR</li>
	</ul>
</section>

<section class="bb mb5">
	<img src="images/audit-notice.png" alt="Audit Notice" class="fr" width="250" height="319">
	<h3>Hysbysiad Archwilio ar gyfer y Flwyddyn Ariannol sy'n Diweddu 31 Mawrth 2020</h3>
	<p class="error">Please find below the Notice of Appointment of Date for the Exercise of Elector's Rights under the Public Audit (Wales) Act 2004.</p>
	
	<p class="error"><a href="downloads/Notice of date appointed for the exercise of_electors.pdf">dogfen rhybudd archwilio</a> <small>(PDF - English)</small></p>
</section>

<section class="bb mb5">
	<h3>Eich Cynghorwyr</h3>
	<details>
	<summary>Gweld cynghorwyr a'u manylion cyswllt</summary>
	<?php include("single-docs/councillors_cy.php"); ?>
	</details>
</section>
<section class="mb5">
	<h3>Local News</h3>
	<div class="well">
	<p class="error">Remove this section or translate news items</p>
	</div>
	<p><a href="news-archive_cy.php">Arc Newyddion</a></p>
</section>

</main>

<footer class="footer">
<?php include("inc/footer_cy.php"); ?>
</footer>

</div>

<script src="js/scripts.min.js"></script>
</body>
</html>	