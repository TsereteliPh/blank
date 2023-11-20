<section class="catalog">
	<div class="container">
		<?php get_template_part('/layouts/partials/title', null, array(
			'class' => 'catalog__title',
			'title' => get_sub_field('title')
		)); ?>

        <ul class="reset-list catalog__list js-show-more-container">
			<?php if ( get_sub_field( 'text' ) ) : ?>
				<li class="catalog__item--text"><?php the_sub_field( 'text' ); ?></li>
			<?php endif; ?>

            <?php
                $query = new WP_Query([
                    'post_type' => 'products',
                    'orderby' => 'post_date',
                    'posts_per_page' => 4,
                    'paged' => 1
                ]);
				$posts = $query->posts;

				if ( $query->have_posts() ) {
					if ( is_archive() ) {
						foreach ($posts as $post) {

							get_template_part('layouts/partials/cards/product', null, array(
								'class' => 'catalog__item'
							));
						}
					} else {
						while ( $query->have_posts() ) {
							$query->the_post();

							get_template_part('layouts/partials/cards/product', null, array(
								'class' => 'catalog__item'
							));
						}

						wp_reset_postdata();
					}
				}
            ?>

			<?php if ( $query->max_num_pages > 1) : ?>
				<li class="catalog__item--show-more">
					<button class="catalog__button js-show-more" type="button">
						Показать еще
						<svg width="28" height="28"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-thic"></use></svg>
					</button>
				</li>

				<script>
					let posts = '<?php echo json_encode($query->query_vars); ?>';
					let current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
					let max_pages = <?php echo $query->max_num_pages; ?>;
				</script>
			<?php endif; ?>
        </ul>
	</div>
</section>
