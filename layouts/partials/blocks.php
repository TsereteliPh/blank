<?php
$id = $args['id'] ?? false;
if (have_rows('blocks', $id)) {
	$counters = array();
	while (have_rows('blocks', $id)) {
		the_row();
		$layout = get_row_layout();
		if (!isset($counters[$layout])) {
			// initialize counter
			$counters[$layout] = 1;
		} else {
			// increase existing counter
			$counters[$layout]++;
		}

		if (get_row_layout() == 'about') get_template_part('layouts/blocks/about/template');
		else if (get_row_layout() == 'application') get_template_part('layouts/blocks/application/template');
		else if (get_row_layout() == 'catalog') get_template_part('layouts/blocks/catalog/template');
		else if (get_row_layout() == 'certificates') get_template_part('layouts/blocks/certificates/template');
		else if (get_row_layout() == 'chimera') get_template_part('layouts/blocks/chimera/template');
		else if (get_row_layout() == 'clients') get_template_part('layouts/blocks/clients/template');
		else if (get_row_layout() == 'contacts') get_template_part('layouts/blocks/contacts/template');
		else if (get_row_layout() == 'faq') get_template_part('layouts/blocks/faq/template');
		else if (get_row_layout() == 'geography') get_template_part('layouts/blocks/geography/template');
		else if (get_row_layout() == 'helmet') get_template_part('layouts/blocks/helmet/template');
		else if (get_row_layout() == 'image-link') get_template_part('layouts/blocks/image-link/template');
		else if (get_row_layout() == 'image-text') get_template_part('layouts/blocks/image-text/template');
		else if (get_row_layout() == 'main-text') get_template_part('layouts/blocks/main-text/template');
		else if (get_row_layout() == 'map') get_template_part('layouts/blocks/map/template');
		else if (get_row_layout() == 'news-slider') get_template_part('layouts/blocks/news-slider/template');
		else if (get_row_layout() == 'parameters') get_template_part('layouts/blocks/parameters/template');
		else if (get_row_layout() == 'product-desc') get_template_part('layouts/blocks/product-desc/template');
		else if (get_row_layout() == 'protection') get_template_part('layouts/blocks/protection/template');
		else if (get_row_layout() == 'tabs') get_template_part('layouts/blocks/tabs/template');
	}
}
