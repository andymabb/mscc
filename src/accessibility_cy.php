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
<body class="page-accessibility">

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
		<li class="switch"><a href="accessibility.php">English</a></li>
	</ul>
</nav>

<main class="main" id="main">
<h2 class="page-title">Accessibility</h2>
<p class="error">Ready for checking and translation <em>A.M.</em></p>

<p>This website has been designed to be meet the Web Content Acccessibility Guidelines (WCAG) 2.1, level AA in line with the Public Sector Bodies (Websites & Mobile Applications)(No.2) Accessibility Regulations 2018. For more information see <a href="https://www.gov.uk/guidance/accessibility-requirements-for-public-sector-websites-and-apps">Understanding accessibility requirements for public sector bodies</a>.</p>

<p>This website is run by Manordeilo &amp; Salem Community Council. We want as many people as possible to be able to use this website. This means you can:</p>

    <ul>
    	<li>navigate the website using a keyboard or other input device</li>
    	<li>using a keyboard, screen reader or Braille pad skip straight to the main content of the page (i.e. skip over repetitive information such as the header and navigation links)</li>
    	<li>understand the meaning and context of images regardless of any visual impairment</li>
    	<li>navigate the website using speech recognition software</li>
    	<li>"listen" to the website using a screen reader (including the most recent versions of JAWS, NVDA and VoiceOver)</li>
    </ul>

<p>All text and links have a contrast ratio of at least 4.5:1 and the site has been checked for readability using simulations of Protanomaly, Deuteranomaly, Tritanomaly, Achromatopsia and contrast loss.</p>

<p>Where javascript or other technologies have been used to provide dynamic content or improved User Interaction (UI) elements <abbr title="Accessible Rich Internet Applications">ARIA</abbr> attributes have been employed to make our content more accessible to people with disabilities.  All content is available without javascript. <a href="https://www.w3.org/WAI/standards-guidelines/aria/">WAI-ARIA Overview</a>.</p>

<p>We’ve also made the website text as simple as possible to understand.</p>

<p>Some parts of this website are not fully accessible, such as older minutes of council meetings and legal documents provided to us which may not be structured accessibly for screen readers (<abbr title="Web Content Sccessibility Guidelines">WCAG</abbr> 2.1 success criterion 4.1.2). These historic documents have not been converted to HTML due to the amount and complexity of work this would require, however if you are unable to access the minutes of a specific meeting please contact us and we will endeavour convert them for you. Please note that all of these older minutes have been coverted to speech enabled PDFs.</p>

<p>If you cannot access parts of this website, need information in a different format such as large print, easy read, audio recording or Braille please email us or call us and we will do our best to help you.</p>

<p>We’re always looking to improve the accessibility of this website. If you find any problems not listed on this page or think we’re not meeting accessibility requirements, contact: <a href="mailto:andy@pontbren.com">andy@pontbren.com</a> giving the page title and the nature of the problem.</p>

<p>The Equality and Human Rights Commission (EHRC) is responsible for enforcing the Public Sector Bodies (Websites and Mobile Applications) (No. 2) Accessibility Regulations 2018 (the ‘accessibility regulations’). If you’re not happy with how we respond to your complaint, contact the <a href="https://www.equalityadvisoryservice.com/">Equality Advisory and Support Service (EASS)</a>.</p>

</main>

<footer class="footer">
<?php include("inc/footer_cy.php"); ?>
</footer>

</div>

<script src="js/scripts.min.js"></script>
</body>
</html>	