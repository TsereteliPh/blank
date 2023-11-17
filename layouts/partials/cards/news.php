<li class="news-card <?php echo $args['class']; ?>">
	<?php
		if ( get_the_post_thumbnail() ) {
			the_post_thumbnail( 'large', array(
				'class' => 'news-card__img'
			) );
		} else {
			echo wp_get_attachment_image( 174, 'large', false, array(
				'class' => 'news-card__img'
			));
		}
	?>

	<time class="news-card__date" datetime="<?php echo get_the_date('Y-m-j'); ?>"><?php echo get_the_date('j.m.y')?></time>

	<a href="<?php the_permalink(); ?>" class="news-card__link"><?php the_title(); ?></a>

	<div class="news-card__text"><?php echo adem_excerpt(150); ?></div>
</li>
