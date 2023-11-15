<?php
	$download = get_sub_field( 'download' );
	$faq = get_sub_field( 'faq' );
?>
<section class="faq">
	<div class="container faq__container">
		<?php if ( $download ) : ?>
			<a href="<?php echo $download['file']; ?>" class="faq__link" download>
				<div class="faq__link-text">
					<?php echo $download['text']; ?>

					<button class="faq__link-button" type="button">
						<svg width="16" height="30"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-bottom"></use></svg>
					</button>
				</div>

				<?php
					if ( $download['img'] ) {
						echo wp_get_attachment_image( $download['img'], 'full', false, array(
							'class' => 'faq__img'
						) );
					} else {
						echo wp_get_attachment_image( 174, 'full', false, array(
							'class' => 'faq__img'
						) );
					}
				?>
			</a>
		<?php endif; ?>

		<div class="faq__wrapper">
			<?php get_template_part('/layouts/partials/title', null, array(
				'class' => 'faq__title',
				'title' => get_sub_field('title')
			)); ?>

			<?php if ( $faq ) : ?>
				<ul class="reset-list faq__list">
					<?php foreach ( $faq as $item ) : ?>
						<li class="faq__item">
							<button class="faq__button" type="button">
								<?php echo $item['question']; ?>

								<span><svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri();?>/assets/images/sprite.svg#icon-arrow-thic"></use></svg></span>
							</button>

							<div class="faq__answer"><?php echo $item['answer']; ?></div>
						</li>
					<?php endforeach;?>
				</ul>
			<?php endif; ?>
		</div>
	</div>
</section>
