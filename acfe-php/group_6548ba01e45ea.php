<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_6548ba01e45ea',
	'title' => 'Блоки',
	'fields' => array(
		array(
			'key' => 'field_6548ba02acefd',
			'label' => 'Блоки',
			'name' => 'blocks',
			'aria-label' => '',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_flexible_advanced' => 1,
			'acfe_flexible_stylised_button' => 0,
			'acfe_flexible_hide_empty_message' => 0,
			'acfe_flexible_empty_message' => '',
			'acfe_flexible_layouts_templates' => 0,
			'acfe_flexible_layouts_placeholder' => 0,
			'acfe_flexible_layouts_thumbnails' => 1,
			'acfe_flexible_layouts_settings' => 0,
			'acfe_flexible_layouts_locations' => 0,
			'acfe_flexible_async' => array(
			),
			'acfe_flexible_add_actions' => array(
			),
			'acfe_flexible_remove_button' => array(
			),
			'acfe_flexible_layouts_state' => 'user',
			'acfe_flexible_modal_edit' => array(
				'acfe_flexible_modal_edit_enabled' => '0',
				'acfe_flexible_modal_edit_size' => 'large',
			),
			'acfe_flexible_modal' => array(
				'acfe_flexible_modal_enabled' => '1',
				'acfe_flexible_modal_title' => 'Заголовок',
				'acfe_flexible_modal_size' => 'full',
				'acfe_flexible_modal_col' => '3',
				'acfe_flexible_modal_categories' => '0',
			),
			'acfe_flexible_grid' => array(
				'acfe_flexible_grid_enabled' => '0',
				'acfe_flexible_grid_align' => 'center',
				'acfe_flexible_grid_valign' => 'stretch',
				'acfe_flexible_grid_wrap' => false,
			),
			'layouts' => array(
				'layout_6554a0e2bfb7f' => array(
					'key' => 'layout_6554a0e2bfb7f',
					'name' => 'faq',
					'label' => 'Вопрос - ответ',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_6554a0ecbfb82',
							'label' => '',
							'name' => '',
							'aria-label' => '',
							'type' => 'clone',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'clone' => array(
								0 => 'group_6554a00418afe',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_field_group_condition' => 0,
							'acfe_seamless_style' => 0,
							'acfe_clone_modal' => 0,
							'acfe_clone_modal_close' => 0,
							'acfe_clone_modal_button' => '',
							'acfe_clone_modal_size' => 'large',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => false,
					'acfe_flexible_settings_size' => 'medium',
					'acfe_layout_locations' => array(
					),
					'acfe_flexible_modal_edit_size' => false,
					'acfe_flexible_category' => false,
					'acfe_layout_col' => 'auto',
					'acfe_layout_allowed_col' => false,
				),
				'layout_65547572e32e8' => array(
					'key' => 'layout_65547572e32e8',
					'name' => 'geography',
					'label' => 'География продаж',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_65547588e32eb',
							'label' => '',
							'name' => '',
							'aria-label' => '',
							'type' => 'clone',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'clone' => array(
								0 => 'group_65547505aee5a',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_field_group_condition' => 0,
							'acfe_seamless_style' => 0,
							'acfe_clone_modal' => 0,
							'acfe_clone_modal_close' => 0,
							'acfe_clone_modal_button' => '',
							'acfe_clone_modal_size' => 'large',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => false,
					'acfe_flexible_settings_size' => 'medium',
					'acfe_layout_locations' => array(
					),
					'acfe_flexible_modal_edit_size' => false,
					'acfe_flexible_category' => false,
					'acfe_layout_col' => 'auto',
					'acfe_layout_allowed_col' => false,
				),
				'layout_654cc01adf76f' => array(
					'key' => 'layout_654cc01adf76f',
					'name' => 'helmet',
					'label' => 'Заголовок + Небольшой текст',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_654cc02edf772',
							'label' => '',
							'name' => '',
							'aria-label' => '',
							'type' => 'clone',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'clone' => array(
								0 => 'group_654cbf7168d2b',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_field_group_condition' => 0,
							'acfe_seamless_style' => 0,
							'acfe_clone_modal' => 0,
							'acfe_clone_modal_close' => 0,
							'acfe_clone_modal_button' => '',
							'acfe_clone_modal_size' => 'large',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => false,
					'acfe_flexible_settings_size' => 'medium',
					'acfe_layout_locations' => array(
					),
					'acfe_flexible_modal_edit_size' => false,
					'acfe_flexible_category' => false,
					'acfe_layout_col' => 'auto',
					'acfe_layout_allowed_col' => false,
				),
				'layout_6554bae9fcf7a' => array(
					'key' => 'layout_6554bae9fcf7a',
					'name' => 'map',
					'label' => 'Карта',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_6554baeffcf7d',
							'label' => '',
							'name' => '',
							'aria-label' => '',
							'type' => 'clone',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'clone' => array(
								0 => 'group_6554b86096e2f',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_field_group_condition' => 0,
							'acfe_seamless_style' => 0,
							'acfe_clone_modal' => 0,
							'acfe_clone_modal_close' => 0,
							'acfe_clone_modal_button' => '',
							'acfe_clone_modal_size' => 'large',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => false,
					'acfe_flexible_settings_size' => 'medium',
					'acfe_layout_locations' => array(
					),
					'acfe_flexible_modal_edit_size' => false,
					'acfe_flexible_category' => false,
					'acfe_layout_col' => 'auto',
					'acfe_layout_allowed_col' => false,
				),
				'layout_65533bab6f9f0' => array(
					'key' => 'layout_65533bab6f9f0',
					'name' => 'chimera',
					'label' => 'Описание + параметры + (Заголовок + Небольшой текст)',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_65533bee6f9f3',
							'label' => '',
							'name' => '',
							'aria-label' => '',
							'type' => 'clone',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'clone' => array(
								0 => 'group_65533afa9d00c',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_field_group_condition' => 0,
							'acfe_seamless_style' => 0,
							'acfe_clone_modal' => 0,
							'acfe_clone_modal_close' => 0,
							'acfe_clone_modal_button' => '',
							'acfe_clone_modal_size' => 'large',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => false,
					'acfe_flexible_settings_size' => 'medium',
					'acfe_layout_locations' => array(
					),
					'acfe_flexible_modal_edit_size' => false,
					'acfe_flexible_category' => false,
					'acfe_layout_col' => 'auto',
					'acfe_layout_allowed_col' => false,
				),
				'layout_654b50ab18b02' => array(
					'key' => 'layout_654b50ab18b02',
					'name' => 'product-desc',
					'label' => 'Описание',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_654b50c218b05',
							'label' => '',
							'name' => '',
							'aria-label' => '',
							'type' => 'clone',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'clone' => array(
								0 => 'group_654b4fa98d763',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_field_group_condition' => 0,
							'acfe_seamless_style' => 0,
							'acfe_clone_modal' => 0,
							'acfe_clone_modal_close' => 0,
							'acfe_clone_modal_button' => '',
							'acfe_clone_modal_size' => 'large',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => false,
					'acfe_flexible_settings_size' => 'medium',
					'acfe_layout_locations' => array(
					),
					'acfe_flexible_modal_edit_size' => false,
					'acfe_flexible_category' => false,
					'acfe_layout_col' => 'auto',
					'acfe_layout_allowed_col' => false,
				),
				'layout_654b71834f8b0' => array(
					'key' => 'layout_654b71834f8b0',
					'name' => 'parameters',
					'label' => 'Параметры',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_654b71924f8b3',
							'label' => '',
							'name' => '',
							'aria-label' => '',
							'type' => 'clone',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'clone' => array(
								0 => 'group_654b6b3cc7dc8',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_field_group_condition' => 0,
							'acfe_seamless_style' => 0,
							'acfe_clone_modal' => 0,
							'acfe_clone_modal_close' => 0,
							'acfe_clone_modal_button' => '',
							'acfe_clone_modal_size' => 'large',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => false,
					'acfe_flexible_settings_size' => 'medium',
					'acfe_layout_locations' => array(
					),
					'acfe_flexible_modal_edit_size' => false,
					'acfe_flexible_category' => false,
					'acfe_layout_col' => 'auto',
					'acfe_layout_allowed_col' => false,
				),
				'layout_655388ee6d41e' => array(
					'key' => 'layout_655388ee6d41e',
					'name' => 'clients',
					'label' => 'Слайдер клиентов',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_655388fe6d421',
							'label' => '',
							'name' => '',
							'aria-label' => '',
							'type' => 'clone',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'clone' => array(
								0 => 'group_65538739def5d',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_field_group_condition' => 0,
							'acfe_seamless_style' => 0,
							'acfe_clone_modal' => 0,
							'acfe_clone_modal_close' => 0,
							'acfe_clone_modal_button' => '',
							'acfe_clone_modal_size' => 'large',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => false,
					'acfe_flexible_settings_size' => 'medium',
					'acfe_layout_locations' => array(
					),
					'acfe_flexible_modal_edit_size' => false,
					'acfe_flexible_category' => false,
					'acfe_layout_col' => 'auto',
					'acfe_layout_allowed_col' => false,
				),
				'layout_654ce4c5115b2' => array(
					'key' => 'layout_654ce4c5115b2',
					'name' => 'application',
					'label' => 'Сферы применения',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_654ce4d1115b5',
							'label' => '',
							'name' => '',
							'aria-label' => '',
							'type' => 'clone',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'clone' => array(
								0 => 'group_654ce3a799868',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_field_group_condition' => 0,
							'acfe_seamless_style' => 0,
							'acfe_clone_modal' => 0,
							'acfe_clone_modal_close' => 0,
							'acfe_clone_modal_button' => '',
							'acfe_clone_modal_size' => 'large',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => false,
					'acfe_flexible_settings_size' => 'medium',
					'acfe_layout_locations' => array(
					),
					'acfe_flexible_modal_edit_size' => false,
					'acfe_flexible_category' => false,
					'acfe_layout_col' => 'auto',
					'acfe_layout_allowed_col' => false,
				),
				'layout_6548ba0b03a95' => array(
					'key' => 'layout_6548ba0b03a95',
					'name' => 'image-link',
					'label' => 'Текст + ссылка',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_654a57b6c46f2',
							'label' => '',
							'name' => '',
							'aria-label' => '',
							'type' => 'clone',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'clone' => array(
								0 => 'group_654a54212a5a5',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_field_group_condition' => 0,
							'acfe_seamless_style' => 0,
							'acfe_clone_modal' => 0,
							'acfe_clone_modal_close' => 0,
							'acfe_clone_modal_button' => '',
							'acfe_clone_modal_size' => 'large',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_settings' => false,
					'acfe_flexible_settings_size' => 'medium',
					'acfe_layout_locations' => array(
					),
					'acfe_flexible_modal_edit_size' => false,
					'acfe_flexible_category' => false,
					'acfe_layout_col' => 'auto',
					'acfe_layout_allowed_col' => false,
				),
			),
			'min' => '',
			'max' => '',
			'button_label' => 'Добавить блок',
			'acfe_field_group_condition' => 0,
			'acfe_flexible_layouts_previews' => false,
			'acfe_flexible_grid_container' => false,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'author',
		1 => 'comments',
		2 => 'discussion',
		3 => 'revisions',
		4 => 'the_content',
		5 => 'slug',
	),
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
	'acfe_autosync' => array(
		0 => 'php',
	),
	'acfe_form' => 0,
	'acfe_display_title' => '',
	'acfe_meta' => '',
	'acfe_note' => '',
	'modified' => 1700051707,
));

endif;