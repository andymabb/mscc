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
<link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
<link rel="manifest" href="images/favicons/site.webmanifest">
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

<nav class="nav-wrap">
	<ul class="mainnav nav">
	<?php include("inc/mainnav.php"); ?>
	<li class="switch"><a href="covid_cy.php">Cymraeg</a></li>
	</ul>
</nav>

<main class="main" id="main">

<h2 class="page-title">Covid-19</h2>

<!-- <?php include("covid/local.php"); ?>Help -->
<!-- <?php include("covid/help.php"); ?>Help -->
<!-- <?php include("covid/business.php"); ?>Business -->
<!-- <?php include("covid/education.php"); ?>Education & Families -->
<!-- <?php include("covid/health.php"); ?>Health -->
<!-- <?php include("covid/housing.php"); ?>housing -->

<div data-accordion="1">
  <details>
  <summary>Local Information</summary> 
      <?php include("covid/local.php"); ?>
  </details>

  <details>
    <summary>Help & Information</summary> 
      <?php include("covid/help.php"); ?>
  </details>

  <details>
    <summary>Business & Finance</summary> 
      <?php include("covid/business.php"); ?>
  </details>

  <details>
    <summary>Education & Families</summary> 
      <?php include("covid/education.php"); ?>
  </details>

  <details>
    <summary>Health Information</summary> 
      <?php include("covid/health.php"); ?>
  </details>

  <details>
    <summary>Housing</summary> 
      <?php include("covid/housing.php"); ?>
  </details>
 </div>


</main>

<footer class="footer">
<?php include("inc/footer.php"); ?>
</footer>

</div>

<script src="js/scripts.min.js"></script>

</body>
</html>	