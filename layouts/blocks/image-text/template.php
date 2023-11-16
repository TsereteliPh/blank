<section class="image-text">
	<div class="container image-text__container">
		<?php get_template_part('/layouts/partials/title', null, array(
			'class' => 'image-text__title',
			'title' => get_sub_field('title')
		)); ?>

		<?php if ( get_sub_field( 'text' ) ) : ?>
			<div class="image-text__text"><?php the_sub_field( 'text' ); ?></div>
		<?php endif; ?>
	</div>

	<?php if ( get_sub_field( 'img' ) ) : ?>
		<div class="image-text__image" style="background-image: url('<?php the_sub_field( 'img' ); ?>');"></div>
	<?php endif; ?>
</section>
