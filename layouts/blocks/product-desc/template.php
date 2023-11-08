<section class="product-desc">
	<div class="container">
		<div class="product-desc__wrapper">
			<?php get_template_part('/layouts/partials/title', null, array(
				'class' => 'title--colored product-desc__title',
				'title' => get_sub_field('title')
			)); ?>

			<?php
				$desc = get_sub_field( 'desc' );
				if ( $desc ) :
			?>
				<ul class="reset-list product-desc__list">
					<?php foreach ( $desc as $item ) : ?>
						<li class="product-desc__item">
							<span><?php echo $item['item']; ?></span>

							<div class="product-desc__item-text"><?php echo $item['text']; ?></div>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>
	</div>
</section>
