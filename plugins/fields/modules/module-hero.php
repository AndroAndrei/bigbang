<?php
/**
 * Function to register custom fields.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bigbang
 */

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_module_hero',
		'title' => 'module-hero',
		'fields' => array(
			array(
				'placement' => 'top',
				'endpoint' => 0,
				'key' => 'module_hero_field_tab_options',
				'label' => 'Options',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
			),
			array(
				'clone' => array(
					0 => 'component_heading_field_headline_tag',
					1 => 'component_heading_field_tagline',
					2 => 'component_heading_field_headline',
					3 => 'component_heading_field_description',
					4 => 'group_component_button',
				),
				'prefix_label' => 0,
				'prefix_name' => 0,
				'display' => 'seamless',
				'layout' => 'block',
				'key' => 'module_hero_field_hero_options',
				'label' => 'Hero Options',
				'name' => 'hero_options',
				'type' => 'clone',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
			),
			array(
				'clone' => array(
					0 => 'group_component_background',
				),
				'prefix_label' => 0,
				'prefix_name' => 0,
				'display' => 'seamless',
				'layout' => 'block',
				'key' => 'module_newsletter_field_background',
				'label' => 'Background',
				'name' => 'background',
				'type' => 'clone',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
			),
			array(
				'clone' => array(
					0 => 'group_component_common_fields',
				),
				'prefix_label' => 0,
				'prefix_name' => 0,
				'display' => 'seamless',
				'layout' => 'block',
				'key' => 'module_hero_field_more',
				'label' => 'More',
				'name' => 'more',
				'type' => 'clone',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
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
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 0,
		'description' => '',
	));

	$module_hero = array(
		'key' => 'layout_hero_module',
		'name' => 'hero_module',
		'label' => 'Hero',
		'display' => 'block',
		'sub_fields' => array(
			array(
				'clone' => array(
					0 => 'group_module_hero',
				),
				'prefix_label' => 0,
				'prefix_name' => 0,
				'display' => 'seamless',
				'layout' => 'block',
				'key' => 'layout_hero_module_field_hero',
				'label' => 'Hero',
				'name' => 'hero',
				'type' => 'clone',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
			),
		),
		'min' => '',
		'max' => '',
	);

endif;