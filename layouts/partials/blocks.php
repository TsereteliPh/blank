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
		else if (get_row_layout() == 'image-link') get_template_part('layouts/blocks/image-link/template');
		else if (get_row_layout() == 'product-desc') get_template_part('layouts/blocks/product-desc/template');
	}
}
