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
<body class="page-documents">

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
		<li class="switch"><a href="documents.php">English</a></li>
	</ul>
</nav>

<main class="main" id="main">
<h2 class="page-title">Dogfennau</h2>
<p class="mb0">Ar y dudalen hon</p>
		<ul class="nav inline-nav">
			<li><a href="#s-minutes">Cofnodion</a></li>
			<li><a href="#s-annual">Adroddiadau Blynyddol</a></li>
			<li><a href="#s-accounts">Cyfrifon</a></li>
			<li><a href="#s-payments">Taliadau i Aelodau</a></li>
			<li><a href="#s-standing">Rheolau Sefydlog</a></li>
			<li><a href="#s-policies">Polisïau</a></li>
		</ul>


<section id="s-minutes" class="bb mb5">
	<h3>Agendau a Chofnodion</h3><!-- Minutes --> 
	<p>Noder y bydd cofnodion ar gael ar lein cyn gynted â’u bod wedi’u harwyddo a chytuno eu bod yn gywir yn y cyfarfod dilynol.</p>
	<ul class="minutes-archive-list">
		<li>
			<a href="?minutes-holder=minutes/minutes_2020-09_cy.php" class="ajax">9/9/2020</a>
		</li>
		<li>
			<a href="?minutes-holder=minutes/minutes_20-07-08_cy.php" class="ajax">8/7/2020</a>
		</li>
		<li>
			<a href="?minutes-holder=minutes/minutes_20-06-10_cy.php" class="ajax">10/6/2020</a>
		</li>
		<li>
			<a href="?minutes-holder=minutes/minutes_20-03-11_cy.php" class="ajax">11/3/2020</a>
		</li>
		<li>
			<a href="?minutes-holder=minutes/minutes_20-02-12_cy.php" class="ajax">12/2/2020</a>
		</li>
		<li>
			<a href="?minutes-holder=minutes/minutes_20-01-08_cy.php" class="ajax">8/1/2020</a>
		</li>
	</ul>

	<div id="minutes-holder">
	</div>

	<details>
		<summary>Cofnodion hŷn <small>(PDF)</small></summary>
		<?php include("minutes/archive-menu_cy.php"); ?>
	</details>
</section>

<section id="s-annual" class="bb mb5">
		<h3>Adroddiadau Blynyddol</h3>
		<details>
			<summary>Gweld yr Adroddiad Blynyddol 2018 - (Saesneg)</summary>
			<?php include("annual-reports/annual-report-2018.php"); ?>
		</details>
</section>

<section id="s-accounts" class="bb mb5">
	<h3>Cyfrifon</h3>
	<ul class="doc-links">
		<li><a href="?accounts-holder=accounts/ye2020.php" class="ajax">Ebrill 2019-2020 (Saesneg)</a></li>
		<li><a href="?accounts-holder=accounts/ye2019.php" class="ajax">Ebrill 2018-2019 (Saesneg)</a></li>
		<li><a href="?accounts-holder=accounts/ye2018.php" class="ajax">Ebrill 2017-2018 (Saesneg)</a></li>
		<li><a href="?accounts-holder=accounts/ye2017.php" class="ajax">Ebrill 2016-2017 (Saesneg)</a></li>
		<li><a href="?accounts-holder=accounts/ye2016.php" class="ajax">Ebrill 2015-2016 (Saesneg)</a></li>
		<li><a href="?accounts-holder=accounts/ye2015.php" class="ajax">Ebrill 2014-2015 (Saesneg)</a></li>
	</ul>

	<div id="accounts-holder">
	</div>
</section>

<section id="s-payments" class="bb mb5">
	<h3>Taliadau i Aelodau - <span class="error">Translation required/checked</span></h3>
	
	<table class="payments">
		<thead>
			<tr>
				<th>Blwyddyn</th>
				<th>Enw'r Cynghorydd</th>
				<th>Lwfans y Cadeirydd</th>
				<th>Arall - Taliad Gorfodol i Gynghorwyr</th>
				<th>Cyfanswm</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>2019/20</td>
				<td>Cyng. Owen Williams</td>
				<td>£220.00</td>
				<td>£150.00</td>
				<td>£370.00</td>
			</tr>
			<tr>
				<td>2018/9</td>
				<td>Cyng. Alun Davies</td>
				<td>£220.00</td>
				<td></td>
				<td>£220.00</td>
			</tr>
			<tr>
				<td>2017/8</td>
				<td>Cyng. Gwenfyl Evans</td>
				<td>£220.00</td>
				<td></td>
				<td>£220.00</td>
			</tr>
			<tr>
				<td>2016/17</td>
				<td>Cyng. Joseph Davies</td>
				<td>£220.00</td>
				<td></td>
				<td>£220.00</td>
			</tr>
			<tr>
				<td>2015/16</td>
				<td>Cyng. Joseph Davies</td>
				<td>£220.00</td>
				<td></td>
				<td>£220.00</td>
			</tr>
		</tbody>
	</table>
	<p>Yn unol ag Adran 151 o Fesur Llywodraeth Leol 2011, rhaid i Gynghorau Cymuned a Thref gyhoeddi yn eu hardal awdurdod y gydnabyddiaeth a gafodd eu haelodau erbyn 30 Medi yn dilyn diwedd y flwyddyn ariannol flaenorol. Dylai'r wybodaeth hon hefyd gael ei hanfon at Banel Taliadau Annibynnol Cymru erbyn yr un dyddiad. Mae angen ffurflenni dim hefyd. Cyfeiriwch at Atodiad 4 o adroddiad blynyddol y Panel am fanylion.</p>
</section>

<section id="s-standing" class="bb mb5">
		<h3>Rheolau Sefydlog (Saesneg)</h3>
		
		<details class="description">
			<summary data-open="Close Standing Orders" data-close="Show Standing Orders"></summary>
			<?php include("single-docs/standing-orders.php"); ?>
		</details>
	</section>

<p class="error">Since policies are in English perhaps they should not appear on this page?</p>

</main>

<footer class="footer">
<?php include("inc/footer_cy.php"); ?>
</footer>

</div>

<script src="js/scripts.min.js"></script>
<script>
function reloadThePage(){
    window.location.reload();
} 
</script>
</body>
</html>	