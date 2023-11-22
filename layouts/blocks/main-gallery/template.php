<?php
	$gallery = get_sub_field( 'gallery' );
	if ( $gallery ) :
?>
	<section class="main-gallery">
		<div class="container">
			<?php get_template_part('/layouts/partials/title', null, array(
				'class' => 'main-gallery__title',
				'title' => get_sub_field( 'title' )
			)); ?>

			<div class="main-gallery__wrapper">
				<?php foreach ( $gallery as $item ) : ?>
					<a href="<?php echo $item['url']; ?>" class="main-gallery__link" data-fancybox="gallery_<?php echo $args['block_id']; ?>">
						<?php echo wp_get_attachment_image( $item['id'], 'large', false, array(
							'class' => 'main-gallery__img'
						) ); ?>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php endif; ?>
