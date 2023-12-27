<li class="product-card <?php echo $args['class']; ?>">
	<a href="<?php the_permalink( $post->ID, true ); ?>" class="product-card__title"><?php the_title(); ?></a>

	<?php
		$desc =  get_field( 'desc' );
		$small_desc = get_field( 'small_desc' );
		if ( $desc || $small_desc ) :
	?>
		<div class="product-card__desc"><?php echo $small_desc ? $small_desc : $desc; ?></div>
	<?php endif; ?>

	<?php
		if ( get_the_post_thumbnail() ) {
			the_post_thumbnail( '700x640', array(
				'class' => 'product-card__img',
				'fetchpriority' => 'low'
			) );
		} else {
			echo wp_get_attachment_image( 174, '700x640', false, array(
				'class' => 'product-card__img',
				'fetchpriority' => 'low'
			) );
		}
	?>
</li>
