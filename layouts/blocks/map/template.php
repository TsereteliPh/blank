<section class="map">
	<div class="map__ticker">
		<div class="map__ticker-box">
			<svg width="200" height="25"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#logo-main"></use></svg>

			<svg width="200" height="25"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#logo-main"></use></svg>

			<svg width="200" height="25"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#logo-main"></use></svg>

			<svg width="200" height="25"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#logo-main"></use></svg>

			<svg width="200" height="25"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#logo-main"></use></svg>

			<svg width="200" height="25"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#logo-main"></use></svg>
		</div>
	</div>

	<div class="map__holder" id="map"></div>

	<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
    <?php $map = get_field('map', 'options'); ?>
    <script>
        document.addEventListener("DOMContentLoaded", function (e) {
			function init(){
				<?php if ($map) : ?>
					<?php $map = json_decode($map, true); ?>
					const map = new ymaps.Map('map', {
						center: [<?php echo $map['center_lat'] ?>,<?php echo $map['center_lng'] ?>],
						zoom: <?php echo $map['zoom']; ?>
					});

					<?php foreach ($map['marks'] as $mark): ?>
						map.geoObjects.add(
							new ymaps.Placemark([<?php echo $mark['coords'][0]; ?>, <?php echo $mark['coords'][1]; ?>], {
									balloonContent: '<?php echo $mark['content'] ?>'
								},
								{
									iconLayout: 'default#image',
									iconImageHref: '<?php echo get_template_directory_uri(); ?>/assets/images/icon-pin.png',
									iconImageSize: [30, 45],
									iconImageOffset: [-15, -45]
								})
						);
					<?php endforeach; ?>

					map.controls.remove('geolocationControl'); // удаляем геолокацию
					map.controls.remove('searchControl'); // удаляем поиск
					map.controls.remove('trafficControl'); // удаляем контроль трафика
					map.controls.remove('typeSelector'); // удаляем тип
					map.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
					// map.controls.remove('zoomControl'); // удаляем контрол зуммирования
					map.controls.remove('rulerControl'); // удаляем контрол правил
					map.behaviors.disable(['scrollZoom']); // отключаем скролл карты (опционально)
				<?php endif; ?>
			}

			ymaps.ready(init);
        });
    </script>
</section>
