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
		<li class="switch"><a href="services.php">English</a></li>
	</ul>
</div>

<main class="main" id="main">
<h2 class="page-title">Local Services (CY)</h2>
<p>details to follow</p>


</main>

<footer class="footer">
<?php include("inc/footer_cy.php"); ?>
</footer>

</div>

<script src="js/scripts.min.js"></script>
</body>
</html>	