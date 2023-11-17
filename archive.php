<?php get_header(); ?>

<section class="news">
	<div class="container">
		<h1 class="title news__title">
			<div class="title__text">Новости</div>
		</h1>

		<?php
			$args = [
				'post_type' => 'post',
				'cat' => 4,
				'posts_per_page' => 8,
				'orderby' => 'post_date',
			];

			$query = new WP_Query($args);
			$posts = $query->posts;

			if ( $query->have_posts() ) :
		?>
			<ul class="reset-list news__list js-show-more-container">
				<?php
					if ( is_archive() ) {
						foreach ( $posts as $post ) {
							get_template_part('layouts/partials/cards/news', null, array(
								'class' => 'news__item'
							));
						}
					} else {
						while ( $query->have_posts() ) {
							$query->the_post();

							get_template_part('layouts/partials/cards/news', null, array(
								'class' => 'news__item'
							));
						}

						wp_reset_postdata();
					}
				?>
			</ul>

			<?php if ( $query->max_num_pages > 1 ) : ?>
				<button class="btn-show-more news__button js-show-more" type="button">Показать еще</button>

				<script>
					let posts = '<?php echo json_encode($query->query_vars); ?>';
					let current_page = <?php echo ( get_query_var('paged') ) ? get_query_var('paged') : 1; ?>;
					let max_pages = <?php echo $query->max_num_pages; ?>;
				</script>
			<?php endif; ?>
		<?php endif; ?>
	</div>
</section>

<?php get_template_part('layouts/partials/blocks', null, array(
	'id' => $acfPostID
)); ?>

<?php get_footer(); ?>
