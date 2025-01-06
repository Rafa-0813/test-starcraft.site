<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<!-- meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta property="og:locale" content="ja_JP">
	<meta property="og:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>">
	<meta property="og:description" content="<?php bloginfo('description'); ?>">
	<meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
	<meta property="og:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ogp.webp">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">
	<meta property="og:image:type" content="image/webp">
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
	<meta property="og:type" content="website">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ogp.webp">
	<!-- favicon -->
	<link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/favicon.ico" sizes="any">
	<link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/favicon.svg" type="image/svg+xml">
	<link rel="apple-touch-icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/apple-touch-icon.png">
	<link rel="manifest" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/manifest.webmanifest">
	<!-- css -->
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="l-header js-header">
		<p class="l-header__logo">
			<a href="<?php echo esc_url(home_url('/')); ?>">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo-header.svg" alt="<?php bloginfo('name'); ?>">
			</a>
		</p>
	</header>
