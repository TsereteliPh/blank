<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
	<div class="container header__container">
		<div class="header__panel">
			<button class="header__burger" type="button">
				<span></span>
			</button>

			<a href="<?php echo bloginfo( 'url' ); ?>" class="header__logo" aria-label="Логотип/ссылка компании Blank">
				<svg width="270" height="30"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#logo-main"></use></svg>
			</a>

			<?php wp_nav_menu(array(
				'theme_location' => 'menu_main',
				'container' => '',
				'menu_id' => 'menu-main',
				'menu_class' => 'reset-list header__menu'
			)); ?>

			<?php
				$tel = get_field( 'tel', 'options' );
				if ( $tel ) :
			?>
				<a href="tel:<?php echo preg_replace('/[^0-9,+]/', '', $tel); ?>" class="header__phone"><?php echo $tel; ?></a>
			<?php endif; ?>

			<button class="btn header__call" type="button" data-fancybox data-src="#callback">Заказать звонок</button>
		</div>

		<div class="header__drop">
			<?php //todo: drop menu ?>
		</div>
	</div>
</header>

<main class="main">
