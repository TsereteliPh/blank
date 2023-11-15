<section class="geography">
	<div class="container geography__container">
		<?php get_template_part('/layouts/partials/title', null, array(
			'class' => 'geography__title',
			'title' => get_sub_field('title')
		)); ?>

		<div class="geography__map"></div>

		<ul class="reset-list geography__list">
			<li class="geography__item">Москва</li>

			<li class="geography__item">Санкт-Петербург</li>

			<li class="geography__item">Саратов</li>

			<li class="geography__item">Екатеринбург</li>

			<li class="geography__item">Владивосток</li>

			<li class="geography__item">Салехард</li>
		</ul>
	</div>
</section>
