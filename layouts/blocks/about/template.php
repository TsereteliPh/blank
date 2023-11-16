<?php
	$video = get_sub_field( 'video' );
	if ( !$video['file'] && !$video['link'] ) $video = false;
	$about = get_sub_field( 'about' );
?>
<section class="about<?php echo $video ? '' : ' about--no-video'; ?>">
	<div class="container about__container">
		<?php get_template_part('/layouts/partials/title', null, array(
			'class' => 'about__title',
			'title' => get_sub_field('title')
		)); ?>

		<?php if ( $video ) : ?>
			<a href="<?php echo $video[$video['type']]; ?>" class="about__video" data-fancybox>
				<?php
					if ( $video['img'] ) {
						echo wp_get_attachment_image( $video['img'], 'full', false );
					} else {
						echo wp_get_attachment_image( 174, 'full', false );
					};
				?>

				<button class="about__video-play" type="button"></button>
			</a>
		<?php endif; ?>

		<ul class="reset-list about__list">
			<?php foreach ( $about as $key => $item ) : ?>
				<li class="about__item<?php echo ($key % 2) ? ' about__item--right' : ''; ?>">
					<div class="about__item-content">
						<h2 class="about__item-label"><?php echo $item['title']; ?></h2>

						<div class="about__item-separator"></div>

						<div class="about__item-text"><?php echo $item['text']; ?></div>
					</div>

					<div class="about__item-img">
						<?php echo wp_get_attachment_image( $item['img'], 'full', false ); ?>
					</div>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>
