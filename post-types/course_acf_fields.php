<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_course-image',
		'title' => 'Course - Image',
		'fields' => array (
			array (
				'key' => 'field_53f4b52c5300e',
				'label' => 'Course Image',
				'name' => 'course_image',
				'type' => 'image_crop',
				'crop_type' => 'hard',
				'target_size' => 'blog-medium',
				'width' => '',
				'height' => '',
				'preview_size' => 'medium',
				'force_crop' => 'yes',
				'save_in_media_library' => 'yes',
				'retina_mode' => 'no',
				'save_format' => 'url',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'course',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_courses',
		'title' => 'Courses',
		'fields' => array (
			array (
				'key' => 'field_53eb40b3fbd92',
				'label' => 'Course Category',
				'name' => 'course_category',
				'type' => 'taxonomy',
				'required' => 1,
				'taxonomy' => 'category',
				'field_type' => 'radio',
				'allow_null' => 0,
				'load_save_terms' => 1,
				'return_format' => 'id',
				'multiple' => 0,
			),
			array (
				'key' => 'field_53f4701ea8bca',
				'label' => 'About The Course',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_53eb3e0e1b500',
				'label' => 'About the Course',
				'name' => 'about_the_course',
				'type' => 'textarea',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'none',
			),
			array (
				'key' => 'field_53f4704da8bcb',
				'label' => 'Course Content',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_53eb3f401b503',
				'label' => 'Course Content',
				'name' => 'course_content',
				'type' => 'textarea',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_53eb3f781b505',
				'label' => 'Who Should Attend',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_53eb3f621b504',
				'label' => 'Who Should Attend',
				'name' => 'who_should_attend',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'course',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'permalink',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'discussion',
				4 => 'revisions',
				5 => 'slug',
				6 => 'author',
				7 => 'format',
				8 => 'featured_image',
				9 => 'categories',
				10 => 'tags',
				11 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
}