<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo (! empty($this->title)) ? $this->title ." | " .$this->siteConfig["title"] : $this->siteConfig["title"]; ?></title>

	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/normalize.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/default/general.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/default/page-grid.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/default/header.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/default/main-grid.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/default/main.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/default/footer.css">

	<!-- <?php #if (file_exists("assets/css/" .$viewName .".css")) : ?>
	<link rel="stylesheet" href="<?php #echo BASE_URL ."assets/css/" .$viewName; ?>.css">
	<?php #endif; ?> -->

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	
	<!-- Mobile specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="darkslategray">
</head>
<body>
	<div class="page-wrapper">
		<!-- Header -->
		<header class="header card-style">
			<div class="logo-bar container">
				<a id="logo" href="<?php echo BASE_URL; ?>"><?php echo $this->siteConfig["title"]; ?></a>
				<button id="menu-btn" class="btn round-btn"><i class="fas fa-bars"></i></button>
			</div>

			<nav class="nav-bar"><?php $this->loadMenu(); ?></nav>
		</header>

		<!-- Main -->
		<section class="main container">
			<div class="banner">
				<div class="banner-img" style="background-image: url('<?php echo BASE_URL ."assets/img/" .$this->siteConfig["home_banner"]; ?>')">
				</div>
				
				<div class="home-welcome">
					<p><?php echo $this->siteConfig["home_welcome"]; ?></p>
				</div>
			</div>			

			<section class="content">
				<?php $this->loadViewIntoTemplate($viewName, $viewData); ?>
			</section>

			<aside class="sidebar">
				<span>Sidebar</span>
			</aside>
		</section>

		<!-- Footer -->
		<footer class="footer container">
			<p class="copyright">
				© 2019 - <a href="https://github.com/ivanfilho21">Ivan Filho</a>
			</p>
			<p class="license">
				Licensed under the MIT License.
			</p>
		</footer>
	</div>
</body>
</html>