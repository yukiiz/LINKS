<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php bloginfo('name'); ?></title>
<meta charset="utf-8">
<meta name="keywords" content="<?php bloginfo('keywords'); ?>">
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.typekit.net/acz1oen.css">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;400&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<!--[if lt IE 9]>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header id="header">
		<div class="container-xl">
			<nav class="navbar navbar-expand-lg navbar-light px-0">
				<h1 class="mr-5 logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-logo.png" alt="Karf"></a></h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item en"><a class="nav-link" href="<?php echo home_url(); ?>">Home</a></li>
						<li class="nav-item en"><a class="nav-link" href="<?php echo home_url(); ?>/news/">News</a></li>
						<li class="nav-item en"><a class="nav-link" href="<?php echo home_url(); ?>/products/">Products</a></li>
						<li class="nav-item en"><a class="nav-link" href="<?php echo home_url(); ?>/contact/">Contact</a></li>
						<li class="nav-item en"><a class="nav-link" href="#">Store</a></li>
						<li class="nav-item en"><a class="nav-link" href="<?php echo home_url(); ?>/message/">Message</a></li>
					</ul>
					<ul class="navbar-nav">
						<li class="nav-item en"><a class="nav-link" href="<?php echo home_url(); ?>/about-us/">About us</a></li>
						<li class="nav-item en"><a class="nav-link" href="#">onlinestore</a></li>
						<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="nav-item mr-lg-0"><a class="nav-link pr-lg-0" href="#"><i class="fab fa-facebook-f"></i></a></li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<?php if (  is_front_page() ||  is_home() ) : ?>
		<main>
	<?php else:?>
		<main class="layerpage-main">
	<?php endif;?>   
