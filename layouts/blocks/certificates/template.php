<section class="certificates">
	<div class="container certificates__container">
		<div class="certificates__content">
			<?php get_template_part('/layouts/partials/title', null, array(
				'class' => 'certificates__title',
				'title' => get_sub_field('title')
			)); ?>

			<?php if ( get_sub_field( 'text' ) ) : ?>
				<div class="certificates__text"><?php the_sub_field( 'text' ); ?></div>
			<?php endif; ?>
		</div>

		<?php
			$certificates = get_sub_field( 'certificates' );
			if ( $certificates ) :
		?>
			<ul class="reset-list certificates__list">
				<?php foreach ( $certificates as $sertificate ) : ?>
					<li class="certificates__item">
						<a href="<?php echo $sertificate['certificate']; ?>" class="certificates__link" download>
							<svg width="110" height="110"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-pdf"></use></svg>

							<div class="certificates__label"><?php echo $sertificate['name']; ?></div>

							<button class="btn-download certificates__download">
								<svg width="10" height="17"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-bottom"></use></svg>
							</button>
                        </a>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
</section>
