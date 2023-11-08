<?php
	$text = get_sub_field( 'text' );
	$link = get_sub_field( 'link' );
?>

<section class="image-link">
	<div class="container">
		<div class="image-link__wrapper">
			<?php get_template_part('/layouts/partials/title', null, array(
				'class' => 'image-link__title',
				'title' => get_sub_field('title')
			)); ?>

			<?php if ( $text ) : ?>
				<div class="image-link__text"><?php echo $text; ?></div>
			<?php endif; ?>

			<?php if ( $link ) : ?>
				<a href="<?php echo $link['url']; ?>" class="btn-arrow image-link__link" target="<?php echo $link['target']; ?>">
					<?php echo $link['title'] ? $link['title'] : 'Узнать больше'; ?>
					<svg width="28" height="28"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-thic"></use></svg>
				</a>
			<?php endif; ?>
		</div>
	</div>
</section>
