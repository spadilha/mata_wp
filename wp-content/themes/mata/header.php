<!doctype html>

<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="utf-8">

	<title><?php wp_title('|'); ?></title>

	<!-- Google Chrome Frame for IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!-- mobile meta (hooray!) -->
	<meta name="HandheldFriendly" content="True">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1"/>

	<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
	<link rel="apple-touch-icon" href="<?= THEMEPATH ?>/images/apple-touch-icon.png">
	<link rel="icon" href="<?= THEMEPATH ?>/images/favicon.ico">
	<!--[if IE]>
		<link rel="shortcut icon" href="<?= THEMEPATH ?>/images/favicon.ico">
	<![endif]-->


	<!-- wordpress head functions -->
	<?php wp_head(); ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->

</head>

<body <?php body_class(); ?>>



<div id="header">
	<div class="wrapper">
		<nav id="menu" class="row">
			<ul>
				<li><a href="#o-filme">O FILME</a></li>
				<li><a href="#festivais">EXIBIÇÕES E FESTIVAIS</a></li>
				<li><a href="#reportagens">REPORTAGENS</a></li>
				<li><a href="#imprensa">IMPRENSA</a></li>
			</ul>
		</nav>

		<div id="menuIcon">
			<button class="hamburger hamburger-rotate fullscreen"><span>menu</span></button>
		</div>
	</div>

</div>