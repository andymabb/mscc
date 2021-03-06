<?php
$page = basename($_SERVER["PHP_SELF"]);
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
<meta charset="utf-8">
<title>Manordeilo And Salem Community Council</title>
<meta name="description" content="Minutes of Community Councils regular meetimg and AGM's">
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
		<?php include("inc/header.php"); ?>
	</header>
<div class="full-width banner-holder">
    <div class="banner"></div>
</div>
	
<nav class="nav-wrap">
	<ul class="mainnav nav">
	<?php include("inc/mainnav.php"); ?>
	<li class="switch"><a href="services_cy.php">Cymraeg</a></li>
	</ul>
</nav>

	<main class="main" id="main">
		<h2 class="page-title">Local Services</h2>
<p class="mb0">On this page:</p>
<ul class="nav inline-nav">
	<li><a href="#local">Local Activities & News</a></li>
	<li><a href="#older">Older People's Services</a></li>
	<li><a href="#v">Volunteering</a></li>
	<li><a href="#vw">Volunteering Wales</a></li>
</ul>

<section class="bb mb5">
	<h3 id="local">Local Activities & News</h3>
	<p><a href="http://www.salemvillage.org.uk/ ">Salem Village Hall</a></p>
</section>	

<section class="bb mb5">
	<h3 id="older">Older People's Services</h3>	
	<p><a href="https://www.ageuk.org.uk/cymru/sirgar/">Age Cymru Sir Gar</a></p>
	
	<p>Address:<br>
		Units 5-11<br>
		LEC Workshops<br>
		100 Trostre Road<br>
		Llanelli<br>
		SA15 2EA
	</p>
	
	<ul>
		<li>Website: <a href="https://www.ageuk.org.uk/cymru/sirgar/">https://www.ageuk.org.uk/cymru/sirgar/</a></li>
		<li>Email: <a href="mailto:info@agecymrusirgar.org.uk">info@agecymrusirgar.org.uk</a></li>
		<li>Tel. No: 01554 784080</li>
	</ul>
</section>

<section class="bb mb5">
<h3 id="v">Volunteering</h3>
<p><a href="http://www.cavs.org.uk/">Carmarthenshire Association of Voluntary Services (CAVS)</a></p>

<div class="js-tabs">
	<ul class="js-tablist">
		<li class="js-tablist__item">
			<a href="#id_first" class="js-tablist__link" lang="cy">Cymraeg</a>
		</li>
		<li class="js-tablist__item">
			<a href="#id_second" class="js-tablist__link">English</a>
		</li>
	</ul>
	<div id="id_first" class="js-tabcontent" lang="cy">
		<p>CGGSG - Cymdeithas Gwasanaethau Gwirfoddol Sir Gâr - Corff ymbarél ar gyfer y trydydd sector, gan gynnig arweiniad, cymorth a chefnogaeth I fudiadau a grwpiau cymunedol, gan eu galluogi I ddod yn gynaliadwy ac yn effeithiol.</p>
		<p>Canolfan gwirfoddoli CGGSG –Rydyn yn darparu gwasanaeth I unigolion sydd â diddordeb mewn gwirfoddoli, ac i fudiadau sy’n cynnwys gwirfoddolwyr yn eu gwaith.</p>
	</div>
	<div id="id_second" class="js-tabcontent">
		<p>Cavs – Carmarthenshire Association of Voluntary Services - is the umbrella body for the third sector, providing guidance, help and support to organisations and community groups enabling them to become sustainable and effective.</p>
		<p>Cavs volunteer centre - We provide a service to individuals with an interest in volunteering and to organsiations that use volunteers.</p>
	</div>
</div>
	
	<p>
		Address:<br>
		Carmarthen Office<br>
		18 Queen Street<br>
		Carmarthen<br>
		SA31 1JT
	</p>
	
	<ul>
		<li>Telephone Number: 01267 245555</li>
		<li>Email Address: <a href="mailto:admin@cavs.org.uk">admin@cavs.org.uk</a></li>
		<li>Website: <a href="http://www.cavs.org.uk/">www.cavs.org.uk/</a></li>
	</ul>
</section>

<section class="mb5">
	<h3 id="vw">Volunteering Wales</h3>
	
	<p lang="cy">Mae ein holl gyfleoedd gwirfoddoli ar gael ar wefan <a href="https://gwirfoddolicymru.net/vk/volunteers/index-covid.htm">gwirfoddoli Cymru</a> ac mae hyn yn rhoi nifer enfawr o wahanol opsiynau i chi dros y sir ac hefyd dros Gymru.</p>
	
	<p>All of our volunteering opportunities can be found on the <a href="https://volunteering-wales.net/vk/volunteers/index-covid.htm">Volunteering Wales website</a> and as a pan-Wales platform will provide the county with a plethora of volunteering options.</p>
	
	<p>Email Address: <a href="mailto:volunteering-wales@wcva.org.uk">volunteering-wales@wcva.org.uk</a></p>
</section>

</main>

<footer class="footer">
<?php include("inc/footer.php"); ?>
</footer>

</div>
<script src="js/scripts.min.js"></script>
</body>
</html>	