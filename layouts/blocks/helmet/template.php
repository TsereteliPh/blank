<?php
	$helmet = get_sub_field('helmet');
	if ( $helmet ) :
?>
	<section class="helmet">
		<div class="container helmet__container">
			<?php get_template_part('/layouts/partials/title', null, array(
				'class' => 'title--colored helmet__title',
				'title' => $helmet['title']
			)); ?>

			<div class="helmet__square"></div>

			<?php if ( $helmet['text'] ) : ?>
				<div class="helmet__text"><?php echo $helmet['text']; ?></div>
			<?php endif; ?>
		</div>

		<div class="helmet__light"></div>

		<img class="helmet__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/helmet-bg.png" alt="Изображение строительной каски" width="550" height="450">
	</section>
<?php endif; ?>
