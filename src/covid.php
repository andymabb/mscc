<?php
$page = basename($_SERVER["PHP_SELF"]);
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
<meta charset="utf-8">
<title>Manordeilo And Salem Community Council: Covid-19</title>
<meta name="description" content="Minutes of Community Councils regular meetimg and AGM's">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
</head>
<body class="page-covid">

<?php include("inc/svgs.php"); ?>
<div class="wrapper">
	
<header class="header">
<?php include("inc/header.php"); ?>
</header>

<div class="full-width banner-holder">
    <div class="banner"></div>
</div>

<div class="nav-wrap">
	<ul class="mainnav nav">
	<?php include("inc/mainnav.php"); ?>
	<li class="switch"><a href="covid_cy.php">Cymraeg</a></li>
	</ul>
</div>

<main class="main" id="main">

<h2 class="page-title">Covid-19</h2>

<!-- <?php include("covid/local.php"); ?>Help -->
<!-- <?php include("covid/help.php"); ?>Help -->
<!-- <?php include("covid/business.php"); ?>Business -->
<!-- <?php include("covid/education.php"); ?>Education & Families -->
<!-- <?php include("covid/health.php"); ?>Health -->
<!-- <?php include("covid/housing.php"); ?>housing -->

<div class="js-accordion">
 <h3 class="js-accordion__header"data-accordion-opened="true">Local Information</h3>
 <div class="js-accordion__panel">
   <?php include("covid/local.php"); ?>
 </div>
 <h3 class="js-accordion__header">Help & Information</h3>
 <div class="js-accordion__panel">
   <?php include("covid/help.php"); ?>
 </div>
 <h3 class="js-accordion__header">Business & Finance</h3>
 <div class="js-accordion__panel">
   <?php include("covid/business.php"); ?>
 </div>
 <h3 class="js-accordion__header">Education & Families</h3>
 <div class="js-accordion__panel">
   <?php include("covid/education.php"); ?>
 </div>
 <h3 class="js-accordion__header">Health Information</h3>
 <div class="js-accordion__panel">
   <?php include("covid/health.php"); ?>
 </div>
 <h3 class="js-accordion__header">Housing</h3>
 <div class="js-accordion__panel">
   <?php include("covid/housing.php"); ?>
 </div>
</div>


</main>

<footer class="footer">
<?php include("inc/footer.php"); ?>
</footer>

</div>

<script src="js/scripts.min.js"></script>
</body>
</html>	