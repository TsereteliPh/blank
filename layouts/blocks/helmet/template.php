<section class="helmet">
	<div class="container helmet__container">
		<?php get_template_part('/layouts/partials/title', null, array(
			'class' => 'title--colored helmet__title',
			'title' => get_sub_field('title')
		)); ?>

		<div class="helmet__square"></div>

		<?php if ( get_sub_field( 'text' ) ) : ?>
			<div class="helmet__text"><?php the_sub_field( 'text' ); ?></div>
        <?php endif; ?>
	</div>

	<div class="helmet__light"></div>

	<img class="helmet__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/helmet-bg.png" alt="Изображение строительной каски" width="550" height="450">
</section>
