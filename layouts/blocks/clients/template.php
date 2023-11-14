<section class="clients">
	<div class="container clients__container">
		<?php get_template_part('/layouts/partials/title', null, array(
            'class' => 'clients__title',
            'title' => get_sub_field('title')
        )); ?>

		<?php
			$clients = get_sub_field( 'clients' );
			if ( $clients ) :
		?>
			<div class="clients__slider swiper">
				<ul class="reset-list clients__list swiper-wrapper">
					<?php foreach ( $clients as $item ) : ?>
						<li class="clients__item swiper-slide">
							<?php
								if ( $item['img'] ) {
									echo wp_get_attachment_image( $item['img'], 'large', false, array(
										'class' => 'clients__img'
									) );
								} else {
									echo wp_get_attachment_image( 174, 'large', false, array(
										'class' => 'clients__img'
									) );
								}
							?>

							<?php if ( $item['year'] ) : ?>
								<div class="clients__year"><?php echo $item['year']; ?></div>
							<?php endif; ?>

							<?php if ( $item['place'] ) : ?>
								<div class="clients__place"><?php echo $item['place']; ?></div>
							<?php endif; ?>

							<?php if ( $item['label'] ) : ?>
								<div class="clients__label"><?php echo $item['label']; ?></div>
							<?php endif; ?>

							<?php if ( $item['desc'] ) : ?>
								<div class="clients__desc"><?php echo $item['desc']; ?></div>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>

				<div class="slider-panel clients__panel">
					<div class="slider-panel__prev">
						<svg width="49" height="16"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-left"></use></svg>
					</div>

					<div class="slider-panel__next">
						<svg width="50" height="17"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-right"></use></svg>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>
