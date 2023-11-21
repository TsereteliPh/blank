<?php get_header(); ?>

<section class="product<?php echo ( !get_the_post_thumbnail_url() ) ? ' product--no-image' : ''; ?>">
	<div class="container">
		<div class="product__content">
			<div class="product__info">
				<div class="title product__title">
					<h1 class="title__text"><?php the_title(); ?></h1>
				</div>

				<?php if ( get_field( 'desc' ) ) : ?>
					<div class="product__desc">
						<div class="product__desc-label">Описание продукта</div>

						<div class="product__desc-text"><?php the_field( 'desc' ); ?></div>
					</div>
				<?php endif; ?>

				<?php if ( get_field( 'area' ) ) : ?>
					<div class="product__desc">
						<div class="product__desc-label">Область применения</div>

						<div class="product__desc-text"><?php the_field( 'area' ); ?></div>
					</div>
				<?php endif; ?>

				<?php
					$video = get_field( 'video' );
					if ( $video['link'] || $video['file'] ) :
				?>
					<a href="<?php echo $video[$video['type']]; ?>" class="video product__video" data-fancybox>
						<?php
							if ( $video['img'] ) {
								echo wp_get_attachment_image( $video['img'], 'large', false );
							} else {
								echo wp_get_attachment_image( 174, 'large', false );
							}
						?>

						<button class="btn-play" type="button"></button>
					</a>
				<?php endif; ?>
			</div>

			<div class="product__media">
				<?php
					if ( get_the_post_thumbnail_url() ) {
						the_post_thumbnail( '700x640', array(
							'class' => 'product__img'
						) );
					}
				?>

				<?php if ( get_field( 'regulations' ) ) : ?>
					<a href="<?php the_field( 'regulations' ); ?>" class="product__regulations" download>
						Скачать технический регламент
						<svg width="28" height="28"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-thic"></use></svg>
					</a>
				<?php endif; ?>
			</div>
		</div>

		<?php
			$characteristics = get_field( 'characteristics' );
			$conditions = get_field( 'conditions' );
			$thickness = get_field( 'thickness' );
			if ( $characteristics || $conditions || $thickness ) :
		?>
			<div class="product__characteristics">
				<div class="title product__characteristics-title">
					<h2 class="title__text">Характеристики продукта</h2>
				</div>

				<?php if ( $characteristics ) : ?>
					<ul class="reset-list product__list">
						<?php foreach ( $characteristics as $characteristic ) : ?>
							<?php if ( $characteristic['several'] ) : ?>
								<li class="product__item product__item--several">
									<?php echo $characteristic['label']; ?>

									<ul class="reset-list st-ul product__item-list">
										<?php foreach ( $characteristic['values'] as $item ) : ?>
											<li class="product__item-item">
												<?php echo $item['item']; ?>

												<span><?php echo $item['value']; ?></span>
											</li>
										<?php endforeach; ?>
									</ul>
								</li>
							<?php else : ?>
								<li class="product__item">
									<?php echo $characteristic['label']; ?>

									<span><?php echo $characteristic['value']; ?></span>
								</li>
							<?php endif; ?>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>

				<?php if ( $conditions ) : ?>
					<div class="product__conditions">
						<div class="product__border-title">Нанесение грунт - эмали</div>

						<div class="product__conditions-wrapper product__item--several">
							Допустимые условия окружающей среды

							<ul class="reset-list st-ul product__item-list">
								<?php foreach ( $conditions as $item ) : ?>
									<li class="product__item-item">
										<?php echo $item['condition']; ?>

										<span><?php echo $item['value']; ?></span>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				<?php endif; ?>

				<?php if ( $thickness ) : ?>
					<div class="product__thickness">
						<div class="product__border-title">Рекомендуемый диапазон толщин</div>

						<ul class="reset-list product__item-list product__thickness-list">
							<?php foreach ( $thickness as $item ) : ?>
								<li class="product__item-item">
									<?php echo $item['item']; ?>

									<span><?php echo $item['value']; ?></span>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php get_template_part('layouts/partials/blocks'); ?>

<?php get_footer(); ?>
