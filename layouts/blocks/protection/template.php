<?php
	$protection = get_sub_field( 'protection' );
	if ( $protection ) :
?>
	<section class="protection">
		<div class="container">
			<?php get_template_part('/layouts/partials/title', null, array(
				'class' => 'protection__title',
				'title' => get_sub_field( 'title' )
			)); ?>

			<ul class="reset-list protection__list">
				<?php foreach ( $protection as $item ) : ?>
					<li class="protection__item">
						<?php if ( $item['title'] ) : ?>
							<div class="protection__item-title"><?php echo $item['title']; ?></div>
						<?php endif; ?>

						<div class="protection__item-content">
							<?php
								if ( $item['area-img'] ) {
									echo wp_get_attachment_image( $item['area-img'], 'large', false, array(
										'class' => 'protection__img protection__img--area'
									) );
								}
							?>

							<div class="protection__item-info">
								<?php if ( $item['label'] ) : ?>
									<div class="protection__item-label"><?php echo $item['label']; ?></div>
								<?php endif; ?>

								<?php if ( $item['text'] ) : ?>
									<div class="protection__item-text"><?php echo $item['text']; ?></div>
								<?php endif; ?>

								<?php if ( $item['area'] ) : ?>
									<div class="protection__item-area">
										Область применения

										<span><?php echo $item['area']; ?></span>
									</div>
								<?php endif; ?>

								<?php if ( $item['link'] ) : ?>
									<a href="<?php echo $item['link']; ?>" class="btn-arrow protection__item-link">
										Перейти на страницу продукции
										<svg width="28" height="28"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-thic"></use></svg>
									</a>
								<?php endif; ?>
							</div>

							<?php
								if ( $item['product-img'] ) {
									echo wp_get_attachment_image( $item['product-img'], 'large', false, array(
										'class' => 'protection__img protection__img--product'
									) );
								} else {
									echo wp_get_attachment_image( 174, 'large', false, array(
										'class' => 'protection__img protection__img--product'
									) );
								}
							?>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>
