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
<body class="page-covid">

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
  	<li class="switch"><a href="covid.php">English</a></li>
  </ul>
</nav>

<main class="main" id="main">
<h2 class="page-title">Covid (CY) - <span class="error">different content!</span></h2>
<p class="error">Some information is missing from the exsiting Welsh pages, some partial (4 scams vs 2) and some (Shops) content does not appear in English</p>
<div data-accordion="1">
  <details>
  <summary>Local Information</summary> 
      <?php include("covid/local_cy.php"); ?>
  </details>

  <details>
    <summary>Help & Information</summary> 
      <?php include("covid/help_cy.php"); ?>
  </details>

  <details>
    <summary>Business & Finance</summary> 
      <?php include("covid/business_cy.php"); ?>
  </details>

  <details>
    <summary>Education & Families</summary> 
      <?php include("covid/education_cy.php"); ?>
  </details>

  <details>
    <summary>Health Information</summary> 
      <?php include("covid/health_cy.php"); ?>
  </details>

  <details>
    <summary>Housing</summary> 
      <?php include("covid/housing_cy.php"); ?>
  </details>
 </div>

</main>

<footer class="footer">
<?php include("inc/footer_cy.php"); ?>
</footer>

</div>

<script src="js/scripts.min.js"></script>
</body>
</html>	