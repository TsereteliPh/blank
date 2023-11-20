<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_6559efb6c0f33',
	'title' => 'Товар',
	'fields' => array(
		array(
			'key' => 'field_6559efb605304',
			'label' => 'Описание продукта',
			'name' => 'desc',
			'aria-label' => '',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'acfe_textarea_code' => 0,
			'maxlength' => '',
			'rows' => 4,
			'placeholder' => '',
			'new_lines' => 'br',
			'acfe_field_group_condition' => 0,
		),
		array(
			'key' => 'field_6559f01205305',
			'label' => 'Область применения',
			'name' => 'area',
			'aria-label' => '',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'acfe_textarea_code' => 0,
			'maxlength' => '',
			'rows' => 4,
			'placeholder' => '',
			'new_lines' => 'br',
			'acfe_field_group_condition' => 0,
		),
		array(
			'key' => 'field_6559f04405306',
			'label' => 'Характеристики',
			'name' => 'characterisrics',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_repeater_stylised_button' => 0,
			'layout' => 'table',
			'pagination' => 0,
			'min' => 0,
			'max' => 0,
			'collapsed' => '',
			'button_label' => 'Добавить пункт',
			'acfe_field_group_condition' => 0,
			'rows_per_page' => 20,
			'sub_fields' => array(
				array(
					'key' => 'field_6559f06705307',
					'label' => 'Пункт',
					'name' => 'label',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'acfe_field_group_condition' => 0,
					'parent_repeater' => 'field_6559f04405306',
				),
				array(
					'key' => 'field_6559f0c705308',
					'label' => 'Несколько значений?',
					'name' => 'several',
					'aria-label' => '',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '15',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
					'ui' => 1,
					'acfe_field_group_condition' => 0,
					'style' => '',
					'parent_repeater' => 'field_6559f04405306',
				),
				array(
					'key' => 'field_6559f12605309',
					'label' => 'Значение',
					'name' => 'value',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_6559f0c705308',
								'operator' => '!=',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'acfe_field_group_condition' => 0,
					'parent_repeater' => 'field_6559f04405306',
				),
				array(
					'key' => 'field_6559f1b90530a',
					'label' => 'Значения',
					'name' => 'values',
					'aria-label' => '',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_6559f0c705308',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_repeater_stylised_button' => 0,
					'layout' => 'table',
					'pagination' => 0,
					'min' => 0,
					'max' => 0,
					'collapsed' => '',
					'button_label' => 'Добавить значение',
					'acfe_field_group_condition' => 0,
					'rows_per_page' => 20,
					'sub_fields' => array(
						array(
							'key' => 'field_6559f1ee0530b',
							'label' => 'Пункт',
							'name' => 'item',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'acfe_field_group_condition' => 0,
							'default_value' => '',
							'maxlength' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'parent_repeater' => 'field_6559f1b90530a',
						),
						array(
							'key' => 'field_6559f1ff0530c',
							'label' => 'Значение',
							'name' => 'value',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'acfe_field_group_condition' => 0,
							'default_value' => '',
							'maxlength' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'parent_repeater' => 'field_6559f1b90530a',
						),
					),
					'parent_repeater' => 'field_6559f04405306',
				),
			),
		),
		array(
			'key' => 'field_6559f26f0530d',
			'label' => 'Допустимые условия окружающей среды',
			'name' => 'conditions',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_repeater_stylised_button' => 0,
			'layout' => 'table',
			'pagination' => 0,
			'min' => 0,
			'max' => 0,
			'collapsed' => '',
			'button_label' => 'Добавить условие',
			'acfe_field_group_condition' => 0,
			'rows_per_page' => 20,
			'sub_fields' => array(
				array(
					'key' => 'field_6559f2b30530e',
					'label' => 'Условие',
					'name' => 'condition',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'acfe_field_group_condition' => 0,
					'parent_repeater' => 'field_6559f26f0530d',
				),
				array(
					'key' => 'field_6559f2d30530f',
					'label' => 'Значение',
					'name' => 'value',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'acfe_field_group_condition' => 0,
					'parent_repeater' => 'field_6559f26f0530d',
				),
			),
		),
		array(
			'key' => 'field_6559f2e105310',
			'label' => 'Рекомендуемый диапазон толщин',
			'name' => 'thickness',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_repeater_stylised_button' => 0,
			'layout' => 'table',
			'pagination' => 0,
			'min' => 0,
			'max' => 0,
			'collapsed' => '',
			'button_label' => 'Добавить диапазон',
			'acfe_field_group_condition' => 0,
			'rows_per_page' => 20,
			'sub_fields' => array(
				array(
					'key' => 'field_6559f36e05311',
					'label' => 'Пункт',
					'name' => 'item',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'acfe_field_group_condition' => 0,
					'parent_repeater' => 'field_6559f2e105310',
				),
				array(
					'key' => 'field_6559f38f05312',
					'label' => 'Значение',
					'name' => 'value',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'acfe_field_group_condition' => 0,
					'parent_repeater' => 'field_6559f2e105310',
				),
			),
		),
		array(
			'key' => 'field_6559f3c805313',
			'label' => 'Видео',
			'name' => 'video',
			'aria-label' => '',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'table',
			'acfe_seamless_style' => 0,
			'acfe_group_modal' => 0,
			'acfe_field_group_condition' => 0,
			'sub_fields' => array(
				array(
					'key' => 'field_6559f3db05314',
					'label' => 'Изображение',
					'name' => 'img',
					'aria-label' => '',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'uploader' => '',
					'acfe_thumbnail' => 0,
					'return_format' => 'id',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
					'preview_size' => 'medium',
					'acfe_field_group_condition' => 0,
					'library' => 'all',
				),
				array(
					'key' => 'field_6559f3f905315',
					'label' => 'Тип',
					'name' => 'type',
					'aria-label' => '',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '15',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'file' => 'Файл',
						'link' => 'Ссылка',
					),
					'default_value' => false,
					'return_format' => 'value',
					'multiple' => 0,
					'max' => '',
					'allow_custom' => 0,
					'search_placeholder' => '',
					'prepend' => '',
					'append' => '',
					'allow_null' => 0,
					'ui' => 0,
					'acfe_field_group_condition' => 0,
					'ajax' => 0,
					'placeholder' => '',
					'min' => '',
				),
				array(
					'key' => 'field_6559f41705316',
					'label' => 'Файл',
					'name' => 'file',
					'aria-label' => '',
					'type' => 'file',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_6559f3f905315',
								'operator' => '==',
								'value' => 'file',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'uploader' => '',
					'return_format' => 'url',
					'upload_folder' => '',
					'multiple' => 0,
					'max' => '',
					'min_size' => '',
					'max_size' => '',
					'mime_types' => '',
					'acfe_field_group_condition' => 0,
					'library' => 'all',
					'preview_style' => 'default',
					'placeholder' => 'Select',
					'button_label' => 'Добавить файл',
					'stylised_button' => 0,
					'file_count' => 0,
					'min' => '',
				),
				array(
					'key' => 'field_6559f43405317',
					'label' => 'Ссылка',
					'name' => 'link',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_6559f3f905315',
								'operator' => '==',
								'value' => 'link',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'acfe_field_group_condition' => 0,
				),
			),
			'acfe_group_modal_close' => 0,
			'acfe_group_modal_button' => '',
			'acfe_group_modal_size' => 'large',
		),
		array(
			'key' => 'field_6559f46405318',
			'label' => 'Файл технического регламента',
			'name' => 'regulations',
			'aria-label' => '',
			'type' => 'file',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'uploader' => '',
			'return_format' => 'url',
			'upload_folder' => '',
			'multiple' => 0,
			'max' => '',
			'min_size' => '',
			'max_size' => '',
			'mime_types' => '',
			'acfe_field_group_condition' => 0,
			'library' => 'all',
			'preview_style' => 'default',
			'placeholder' => 'Select',
			'button_label' => 'Добавить файл',
			'stylised_button' => 0,
			'file_count' => 0,
			'min' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'products',
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
	'modified' => 1700405002,
));

endif;