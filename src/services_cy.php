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
<body class="page-services">

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
		<li class="switch"><a href="services.php">English</a></li>
	</ul>
</nav>

<main class="main" id="main">
<h2 class="page-title">Gwasanaethau Lleol</h2>

<p class="mb0">Ar y dudalen hon:</p>
<ul class="nav inline-nav">
	<li><a href="#local">Gweithgareddau a Newyddion Lleol</a></li>
	<li><a href="#older">Gwasanaethau Pobl Hŷn</a></li>
	<li><a href="#v">Gwirfoddoli</a></li>
	<li><a href="#vw">Gwirfoddoli Cymru</a></li>
</ul>

<section class="bb mb5">
	<h3 id="local">Gweithgareddau a Newyddion Lleol</h3>
	<p><a href="http://www.salemvillage.org.uk/ ">Neuadd Bentref Salem</a></p>
</section>	

<section class="bb mb5">
	<h3 id="older">Gwasanaethau Pobl Hŷn</h3>	
	<p><a href="https://www.ageuk.org.uk/cymru/sirgar/">Age Cymru Sir Gar</a></p>
	
	<p>Cyfeiriad:<br>
		Units 5-11<br>
		LEC Workshops<br>
		100 Trostre Road<br>
		Llanelli<br>
		SA15 2EA
	</p>
	
	<ul>
		<li>Gwefan: <a href="https://www.ageuk.org.uk/cymru/sirgar/">https://www.ageuk.org.uk/cymru/sirgar/</a></li>
		<li>Ebost: <a href="mailto:info@agecymrusirgar.org.uk">info@agecymrusirgar.org.uk</a></li>
		<li>Ffon: 01554 784080</li>
	</ul>
</section>

<section class="bb mb5">
<h3 id="v">Gwirfoddoli</h3>
<p><a href="http://www.cavs.org.uk/">Cymdeithas Gwasanaethau Gwirfoddol Sir Gar (CGGSG)</a></p>
<p>Corff ymbarél ar gyfer y trydydd sector, gan gynnig arweiniad, cymorth a chefnogaeth I fudiadau a grwpiau cymunedol, gan eu galluogi I ddod yn gynaliadwy ac yn effeithiol.</p>
<p>Canolfan gwirfoddoli CGGSG –Rydyn yn darparu gwasanaeth I unigolion sydd â diddordeb mewn gwirfoddoli, ac i fudiadau sy’n cynnwys gwirfoddolwyr yn eu gwaith.</p>

<p>
Cyfeiriad:<br>
Carmarthen Office<br>
18 Queen Street<br>
Carmarthen<br>
SA31 1JT
</p>

<ul>
<li>Ffon: 01267 245555</li>
<li>Ebost: <a href="mailto:admin@cavs.org.uk">admin@cavs.org.uk</a></li>
<li>Gwefan: <a href="http://www.cavs.org.uk/">www.cavs.org.uk/</a></li>
</ul>
</section>

<section class="mb5">
	<h3 id="vw">Gwirfoddoli Cymru</h3>
	
	<p>Mae ein holl gyfleoedd gwirfoddoli ar gael ar wefan <a href="https://gwirfoddolicymru.net/vk/volunteers/index-covid.htm">gwirfoddoli Cymru</a> ac mae hyn yn rhoi nifer enfawr o wahanol opsiynau i chi dros y sir ac hefyd dros Gymru.</p>
	
	<p>Ebost: <a href="mailto:volunteering-wales@wcva.org.uk">volunteering-wales@wcva.org.uk</a></p>
</section>


</main>

<footer class="footer">
<?php include("inc/footer_cy.php"); ?>
</footer>

</div>

<script src="js/scripts.min.js"></script>
</body>
</html>	