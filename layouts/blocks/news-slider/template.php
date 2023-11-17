<section class="news-slider">
    <div class="container">
		<?php get_template_part('/layouts/partials/title', null, array(
			'class' => 'news-slider__title',
			'title' => get_sub_field('title')
		)); ?>

		<?php
			$news = get_sub_field( 'news' );
			if ( $news ) :
		?>
			<div class="news-slider__slider swiper">
				<ul class="reset-list news-slider__list swiper-wrapper">
					<?php
						$args = [
							'post_type' => 'post',
							'posts_per_page' => -1,
							'post__in' => $news,
							'post_status' => 'any',
							'orderby' => 'post__in',
						];

						$query = new WP_Query($args);
						$posts = $query->posts;

						if ( $query->have_posts() ) {
							if ( is_archive() ) {
								foreach ( $posts as $post ) {
									get_template_part('layouts/partials/cards/news', null, array(
										'class' => 'news-slider__item swiper-slide'
									));
								}
							} else {
								while ( $query->have_posts() ) {
									$query->the_post();

									get_template_part('layouts/partials/cards/news', null, array(
										'class' => 'news-slider__item swiper-slide'
									));
								}

								wp_reset_postdata();
							}
						}
					?>
				</ul>

				<div class="slider-panel news-slider__panel">
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
