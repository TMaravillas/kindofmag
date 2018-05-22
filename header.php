<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS" href="<?php bloginfo('rss2_url'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0" />
	<?php wp_head(); ?>
	<script src="https://use.typekit.net/zsw8kxa.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<link rel="shortcut icon" type="image/png" href="<?php echo esc_url( home_url() ); ?>/images/favicon.png"/>
</head>
<body <?php body_class(); ?> class="demo-3" style="-webkit-overflow-scrolling: touch;">

<div class="main demo-3" style="-webkit-overflow-scrolling: touch;">
  <div class="animsition" style="-webkit-overflow-scrolling: touch;">
		<div id="bee">
			<span class="cursor_follow"></span>
		</div>

	<header id="header" class="header yapiskan">
		<div class="header__wrap container flex">
			<a class="logo animsition-link" href="<?php echo esc_url( home_url() ); ?>">
				<svg id="logotype" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4704.22 946.06"><title>logo</title><path d="M528.64,924.4,234,488.2,140.1,583.53V924.4H0V21.67H140.1V485.31L593.64,21.67H696.19L329.32,392.87,699.08,924.4Z" style="fill:#181818"/><path d="M846.39,924.4V21.67H986.5V924.4Z" style="fill:#181818"/><path d="M2140.51,923V23.11l219.54-5.78c323.54-8.67,537.31,187.77,537.31,439.09,0,257.1-182,482.42-543.08,472.31Zm244.1-62.11c234,0,364-163.21,364-371.2,0-239.77-147.33-404.42-424.65-404.42h-43.33V860.85Z" style="fill:#181818"/><path d="M3047.54,479.53C3047.54,218.1,3254.09,0,3515.52,0c264.32,0,465.09,190.66,465.09,466.53,0,261.43-208,479.53-469.42,479.53C3246.87,946.06,3047.54,754,3047.54,479.53Zm784.29,2.89c0-258.54-148.77-418.87-322.1-418.87-171.88,0-314.87,145.88-314.87,398.65,0,260,148.77,420.31,320.65,420.31S3831.84,736.63,3831.84,482.42Z" style="fill:#181818"/><path d="M4156.8,924.4V21.67h547.42v93.89c-62.11-18.78-121.33-28.89-257.1-28.89H4295.46V440.53h303.32v65H4295.46V924.4Z" style="fill:#181818"/><polygon points="1832.88 21.66 1832.88 761.18 1822.77 761.18 1296.91 15.88 1149.58 27.45 1149.58 45.23 1217.58 143.17 1217.58 924.39 1294.13 924.39 1294.13 253.42 1765 931.62 1909.43 920.07 1909.43 21.66 1832.88 21.66" style="fill:#181818"/></svg>
			</a>
			<div id="opener" class="hamburger hamburger--demo-3 js-hover">
				<div class="opener">
          <a href="#anchor">
					<svg class="opener_img" id="dc825f64-e0b5-438a-b8e1-de966e02c083" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.5 16.51"><title>menu</title><path d="M0,0H2.5V2.5H0Z" fill-rule="evenodd"/><path d="M8,0h2.5V2.5H8Z" fill-rule="evenodd"/><path d="M16,0h2.5V2.5H16Z" fill-rule="evenodd"/><path d="M24,0h2.5V2.5H24Z" fill-rule="evenodd"/><path d="M0,7H2.5V9.5H0Z" fill-rule="evenodd"/><path d="M8,7h2.5V9.5H8Z" fill-rule="evenodd"/><path d="M16,7h2.5V9.5H16Z" fill-rule="evenodd"/><path d="M24,7h2.5V9.5H24Z" fill-rule="evenodd"/><path d="M0,14H2.5v2.5H0Z" fill-rule="evenodd"/><path d="M8,14h2.5v2.5H8Z" fill-rule="evenodd"/><path d="M16,14h2.5v2.5H16Z" fill-rule="evenodd"/><path d="M24,14h2.5v2.5H24Z" fill-rule="evenodd"/></svg>
          </a>
          </div>
					<span class="search"><?php get_search_form(); ?></span>
				<div class="hamburger__line hamburger__line--cross01">
					<div class="hamburger__line-in hamburger__line-in--cross01"></div>
				</div>
				<div class="hamburger__line hamburger__line--cross02">
					<div class="hamburger__line-in hamburger__line-in--cross02"></div>
				</div>
			</div>
		</div>
	</header>
	<div id="anchor">

	</div>
		<div class="content-overlay content--demo-3 " style="-webkit-overflow-scrolling: touch;">
			<div class="global-menu container">
				<div class="global-menu__wrap wrap">
						<nav class="header__nav global-menu__item global-menu__item--demo-3">
							<?php wp_nav_menu(array('theme_location' => 'main', 'container' => false )); ?>
						</nav>
				</div>
			</div>
			<svg class="shape-overlays" viewBox="0 0 100 100" preserveAspectRatio="none">
				<path class="shape-overlays__path"></path>
				<path class="shape-overlays__path"></path>
				<path class="shape-overlays__path"></path>
			</svg>
		</div>
	<?php get_template_part( 'components/page-header' ); ?>
