<?php
	$img = get_sub_field( 'img' );
	$text = get_sub_field( 'text' );
	$params = get_sub_field( 'params' );
?>
<section class="parameters">
	<div class="container parameters__container">
		<?php
            if ( $img ) {
				echo wp_get_attachment_image( get_sub_field( 'img' ), 'large', false, array(
					'class' => 'parameters__img'
				) );
			}
		?>

		<div class="parameters__wrapper">
			<?php get_template_part('/layouts/partials/title', null, array(
				'class' => 'title--colored parameters__title',
				'title' => get_sub_field('title')
			)); ?>

			<?php if ( $params ) : ?>
				<ul class="reset-list parameters__list">
					<?php foreach ( $params as $parameter ) : ?>
						<?php if ( $parameter['several'] ) : ?>
							<li class="parameters__item parameters__item--several">
								<?php echo $parameter['item']; ?>

								<ul class="reset-list parameters__item-list">
									<?php foreach ( $parameter['values'] as $item ) : ?>
										<li class="parameters__item-item">
											<?php echo $item['item']; ?>

											<span><?php echo $item['value']; ?></span>
										</li>
									<?php endforeach; ?>
								</ul>
							</li>
						<?php else : ?>
							<li class="parameters__item">
								<?php echo $parameter['item']; ?>

								<span><?php echo $parameter['value']; ?></span>
							</li>
						<?php endif; ?>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>

			<?php if ( $text ) : ?>
				<div class="parameters__text"><?php echo $text; ?></div>
			<?php endif; ?>
		</div>
	</div>
</section>
