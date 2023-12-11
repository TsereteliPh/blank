<section class="application">
	<div class="container application__container">
		<?php get_template_part('/layouts/partials/title', null, array(
			'class' => 'application__title',
			'title' => get_sub_field('title')
		)); ?>

		<?php
			$application = get_sub_field( 'application' );
			if ( $application ) :
		?>
			<ul class="reset-list application__list">
				<?php foreach ( $application as $item ) : ?>
					<li class="application__item">
						<button class="application__button<?php echo $item['icon'] ? ' application__button--icon' : ''; ?>" type="button">
							<?php
								if ( $item['icon'] ) {
									echo wp_get_attachment_image( $item['icon'], 'thumbnail', false, array(
										'class' => 'application__icon'
									) );
								}

								echo $item['label'];
							?>
						</button>

						<div class="application__text">
							<?php
								if ( $item['text'] ) {
									echo $item['text'];
								}

								if ( $item['products'] ) :
							?>
								<div class="reset-list application__products">
									<?php
										foreach ( $item['products'] as $post ) :
											setup_postdata( $post );
									?>
										<a href="<?php the_permalink(); ?>" class="application__product"><?php the_title(); ?></a>
									<?php
											wp_reset_postdata();
										endforeach;
									?>
								</div>
							<?php endif; ?>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
</section>
