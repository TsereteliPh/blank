<?php $welcome = get_field( 'welcome' ); ?>
<section class="welcome">
	<div class="container welcome__container">
		<div class="welcome__text">
			<span>Антикоррозийные</span>
			составы для промышленности
		</div>

		<?php if ( $welcome['file'] || $welcome['link'] ) : ?>
			<a href="<?php echo $welcome[$welcome['type']]; ?>" class="welcome__link" data-fancybox>
				Видео о нашей продукции
				<button class="welcome__btn" type="button"></button>
			</a>
		<?php endif; ?>
	</div>
</section>
