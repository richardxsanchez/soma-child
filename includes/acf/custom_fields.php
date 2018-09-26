<?php 

if (get_theme_mod('custom_fields_panel', '2') != '1') {
	define('ACF_LITE', true);
}

add_action('acf/create_fields', 'soma_acf_loader', 0);
function soma_acf_loader() {
	echo '<div class="acf-loader">
		<div class="spinner-icon"></div>
	</div>';
}

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_product-settings',
		'title' => 'Product Settings',
		'fields' => array (
			array (
				'key' => 'field_5aa925cc3b3bf',
				'label' => 'General',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5aa925e78f415',
				'label' => 'General',
				'name' => '',
				'type' => 'message',
				'message' => '<h3>General</h3>',
			),
			array (
				'key' => 'field_5aa91365b6b67',
				'label' => 'Second Thumbnail',
				'name' => 'product_second_thumbnail',
				'type' => 'select',
				'instructions' => 'Enable the second thumbnail, it will be displayed on the hover of product(In Shop Page). The image that will be displayed, will be the first one in the product gallery.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Show',
					3 => 'Hide',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5ac0f2628c7bb',
				'label' => 'Related Products',
				'name' => 'product_related_products',
				'type' => 'select',
				'instructions' => 'Show or hide the related products which appear below the product description.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Show',
					3 => 'Hide',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5ac0d4e1277fb',
				'label' => 'Container',
				'name' => 'product_container',
				'type' => 'select',
				'instructions' => 'Enable or disable the container, if enabled the elements will be centered in 1170 pixel width.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Enable',
					3 => 'Disable',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5ac35c86a11e4',
				'label' => 'Navigation',
				'name' => 'product_navigation',
				'type' => 'select',
				'instructions' => 'Show or hide the navigation in product.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Show',
					3 => 'Hide',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5ac35ca6a11e5',
				'label' => 'Navigation Category',
				'name' => 'product_navigation_category',
				'type' => 'select',
				'instructions' => 'Switch on if you want the products to be navigated only in the same category.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'On',
					3 => 'Off',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5ad4a40fd9397',
				'label' => 'Metro Column',
				'name' => 'product_metro_column',
				'type' => 'select',
				'instructions' => 'Select the metro column.
	<small>Note: This will work only if metro option is activated in shop settings.</small>',
				'choices' => array (
					1 => '3 Column',
					2 => '4 Column',
					3 => '5 Column',
					4 => '6 Column',
					5 => '7 Column',
					6 => '8 Column',
					7 => '9 Column',
					8 => '10 Column',
					9 => '11 Column',
					10 => '12 Column',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5ac35d08a11e6',
				'label' => 'Content',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5ac0d4d2625b4',
				'label' => 'Content',
				'name' => '',
				'type' => 'message',
				'message' => '<h3>Content</h3>',
			),
			array (
				'key' => 'field_5ac0d5c0277fc',
				'label' => 'Alignment',
				'name' => 'product_content_alignment',
				'type' => 'select',
				'instructions' => 'Select the alignment of content, if selected left the gallery will move to right and so on.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Left',
					3 => 'Right',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5ac35d16a11e7',
				'label' => 'Animation',
				'name' => 'product_content_animation',
				'type' => 'select',
				'instructions' => 'Select the initial loading animation for the content.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'None',
					3 => 'Fade In',
					4 => 'Fade In Up',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5ac35e56a11e8',
				'label' => 'Sticky',
				'name' => 'product_content_sticky',
				'type' => 'select',
				'instructions' => 'Enable or disable the sticky content, the content will stay fixed when scrolling down.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Enable',
					3 => 'Disable',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5ac0d5f2d03c9',
				'label' => 'Gallery',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5ac0d5f9d03ca',
				'label' => 'Gallery',
				'name' => '',
				'type' => 'message',
				'message' => '<h3>Gallery</h3>',
			),
			array (
				'key' => 'field_5ac35ec9a11e9',
				'label' => 'Thumbnail',
				'name' => 'product_thumbnail',
				'type' => 'select',
				'instructions' => 'Show or hide the thumbnail in product. <br />
	<small>Note: You can\'t hide thumbnail in default gallery type.</small>',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Show',
					3 => 'Hide',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5ac0d63dd03cb',
				'label' => 'Type',
				'name' => 'product_gallery_type',
				'type' => 'select',
				'instructions' => 'Select the gallery type.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Default',
					3 => 'Masonry',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5ac35f0aa11ea',
				'label' => 'Columns',
				'name' => 'product_gallery_columns',
				'type' => 'select',
				'instructions' => 'Select the gallery columns. <br />
	<small>Note: This option works only with Masonry as gallery type.</small>
	',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'One Column',
					3 => '2 Columns',
					4 => '3 Columns',
					5 => '4 Columns',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5ac11ee2746d2',
				'label' => 'Animation',
				'name' => 'product_gallery_animation',
				'type' => 'select',
				'instructions' => 'Select the initial loading animation for gallery images.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'None',
					3 => 'Fade In',
					4 => 'Fade In (with delay)',
					5 => 'Fade In Up',
					6 => 'Fade In Up (with delay)',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5ac35f59a11eb',
				'label' => 'Spacing',
				'name' => 'product_spacing',
				'type' => 'select',
				'instructions' => 'Enable custom spacing in shop, if custom is selected a new field will appear below.
	<small>Note: It works only in masonry type.</small>',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Custom',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5ac35f7ca11ec',
				'label' => 'Custom Spacing ',
				'name' => 'product_custom_spacing',
				'type' => 'number',
				'instructions' => 'Add spacing to gallery images, measurement is in pixel. ',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5ac35f59a11eb',
							'operator' => '==',
							'value' => '2',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => 'px',
				'min' => 0,
				'max' => 100,
				'step' => 1,
			)
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'product',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_product-taxonomy-settings',
		'title' => 'Product Taxonomy Settings',
		'fields' => array (
			array (
				'key' => 'field_5aa6b29b29e89',
				'label' => 'Type',
				'name' => 'product_taxonomy_type',
				'type' => 'select',
				'instructions' => 'Select the type you want to show your products.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Basic',
					3 => 'Creative',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5aa6ba054dc52',
				'label' => 'Columns',
				'name' => 'product_taxonomy_columns',
				'type' => 'select',
				'instructions' => 'Select the columns of this taxonomy, default is 3 columns.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => '2 Columns',
					3 => '3 Columns',
					4 => '4 Columns',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5aa6c0b0f02ba',
				'label' => 'Sidebar',
				'name' => 'product_taxonomy_sidebar',
				'type' => 'select',
				'instructions' => 'Show or hide the sidebar in this taxonomy.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Show',
					3 => 'Hide',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5aafda9a269df',
				'label' => 'Breadcrumb',
				'name' => 'product_taxonomy_breadcrumb',
				'type' => 'select',
				'instructions' => 'Show or hide the breadcrumb in this taxonomy.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Show',
					3 => 'Hide',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5aafdaae269e0',
				'label' => 'Result Count',
				'name' => 'product_taxonomy_result_count',
				'type' => 'select',
				'instructions' => 'Show or hide the result count paragraph in this taxonomy.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Show',
					3 => 'Hide',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5aafdadb269e1',
				'label' => 'Order By',
				'name' => 'product_taxonomy_orderby',
				'type' => 'select',
				'instructions' => 'Show or hide the order by in this taxonomy.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Show',
					3 => 'Hide',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5ab257049fc3b',
				'label' => 'Offset',
				'name' => 'product_taxonomy_offset',
				'type' => 'select',
				'instructions' => 'Enable or disable the offset layout, first and third item will get top spacing.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Enable',
					3 => 'Disable',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5ab257139fc3c',
				'label' => 'Shadow',
				'name' => 'product_taxonomy_shadow',
				'type' => 'select',
				'instructions' => 'Show or hide products shadow in this taxonomy.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Show',
					3 => 'Hide',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5aafdafe269e2',
				'label' => 'Spacing',
				'name' => 'product_taxonomy_spacing',
				'type' => 'select',
				'instructions' => 'Inherit the spacing from theme options or enter it manually.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Custom',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5aafdb17269e3',
				'label' => 'Custom Spacing ',
				'name' => 'product_taxonomy_custom_spacing',
				'type' => 'number',
				'instructions' => 'Add spacing to shop products, measurement is in pixel.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5aafdafe269e2',
							'operator' => '==',
							'value' => '2',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => 'px',
				'min' => '',
				'max' => '',
				'step' => 1,
			),
			array (
				'key' => 'field_5aa6c14c25727',
				'label' => 'Initial Loading Animation',
				'name' => 'product_taxonomy_animation',
				'type' => 'select',
				'instructions' => 'Select initial loading animation for products.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'None',
					3 => 'Fade In',
					4 => 'Fade In (with delay)',
					5 => 'Fade In Up',
					6 => 'Fade In Up (with delay)',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5aafdb4f269e4',
				'label' => 'Pagination',
				'name' => 'product_taxonomy_pagination',
				'type' => 'select',
				'instructions' => 'Select the pagination type of this taxonomy.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Normal',
					3 => 'Show More',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'ef_taxonomy',
					'operator' => '==',
					'value' => 'product_cat',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_settings',
		'title' => 'Settings',
		'fields' => array (
			array (
				'key' => 'field_5a95762746d78',
				'label' => 'Header ',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5a95763b957e3',
				'label' => 'Custom Logo',
				'name' => '',
				'type' => 'message',
				'message' => '<h3>Custom Logo</h3>',
			),
			array (
				'key' => 'field_5a9576edd15d2',
				'label' => 'Custom Logo',
				'name' => 'custom_logo',
				'type' => 'image',
				'instructions' => 'Upload a custom logo for this page only.',
				'save_format' => 'object',
				'preview_size' => 'medium',
				'library' => 'all',
			),
			array (
				'key' => 'field_5a957716d15d3',
				'label' => 'Custom Logo Width',
				'name' => 'custom_logo_width',
				'type' => 'number',
				'instructions' => 'Enter the number to change the logo image width. <br />
	<small>Note: Enter only the number without {px}.</small>',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => 'px',
				'min' => 1,
				'max' => '',
				'step' => 1,
			),
			array (
				'key' => 'field_5a957733c86b1',
				'label' => 'Custom Logo Height',
				'name' => 'custom_logo_height',
				'type' => 'number',
				'instructions' => 'Enter the number to change the logo image height, incase you don\'t add value, the height will be auto.<br />
	<small>Note: Enter only the number without {px}.</small>',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => 'px',
				'min' => 1,
				'max' => '',
				'step' => 1,
			),
			array (
				'key' => 'field_5a95786cf096d',
				'label' => 'Layout',
				'name' => '',
				'type' => 'message',
				'message' => '<h3>Layout</h3>',
			),
			array (
				'key' => 'field_5a95788405269',
				'label' => 'Position',
				'name' => 'header_position',
				'type' => 'select',
				'instructions' => 'Select the header position, default is static. <br />
	<small>Note: Absolute header will push the content to the top of page.</small>',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Static',
					3 => 'Absolute',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5a9578b70526a',
				'label' => 'Sticky',
				'name' => 'header_sticky',
				'type' => 'select',
				'instructions' => 'Make the header sticky, in scroll the header will stick to the top of page.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Enable',
					3 => 'Disable',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5a9578e70526c',
				'label' => 'Search',
				'name' => 'header_search',
				'type' => 'select',
				'instructions' => 'Show or hide the search in header.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Show',
					3 => 'Hide',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5a9579050526d',
				'label' => 'Social Media',
				'name' => '',
				'type' => 'message',
				'message' => '<h3>Social Media</h3>',
			),
			array (
				'key' => 'field_5a9579170526e',
				'label' => 'Social Media Visibility',
				'name' => 'header_social_media_visibility',
				'type' => 'select',
				'instructions' => 'Show or hide the social media in header, don\'t forget to add the URL\'s in Theme Options > Social Media. <br />
	<small>Note: Only the social medias with URL inserted will be displayed.</small>',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Show',
					3 => 'Hide',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5a95795b0526f',
				'label' => 'Social Media Type',
				'name' => 'header_social_media_type',
				'type' => 'select',
				'instructions' => 'Select if you want the icons to be plain text or icons.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Icons',
					3 => 'Text',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5a95797805270',
				'label' => 'Social Media Style',
				'name' => 'header_social_media_style',
				'type' => 'select',
				'instructions' => 'Select the style of social media.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Colorful',
					3 => 'Dark',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5aa13aa0b5cda',
				'label' => 'Footer',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5aa13b1649586',
				'label' => 'Widgets',
				'name' => '',
				'type' => 'message',
				'message' => '<h3>Widgets</h3>',
			),
			array (
				'key' => 'field_5aa13ab9b5cdb',
				'label' => 'Widgets',
				'name' => 'footer_widgets',
				'type' => 'select',
				'instructions' => 'Show or hide the widgets in footer.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Show',
					3 => 'Hide',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5aa13ad644934',
				'label' => 'Widgets Columns',
				'name' => 'footer_widgets_columns',
				'type' => 'select',
				'instructions' => 'Select the columns of widgets.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => '2 Columns',
					3 => '3 Columns',
					4 => '4 Columns',
					5 => '6 Columns',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5aa13b0b49585',
				'label' => 'Social Media ',
				'name' => '',
				'type' => 'message',
				'message' => '<h3>Social Media</h3>',
			),
			array (
				'key' => 'field_5aa13b0649584',
				'label' => 'Social Media Visibility',
				'name' => 'footer_social_media_visibility',
				'type' => 'select',
				'instructions' => 'Show or hide the social media in footer, don\'t forget to add the URL\'s in Theme Options > Social Media. <br />
	<small>Note: Only the social medias with URL inserted will be displayed.</small>',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Show',
					3 => 'Hide',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5aa13b3749587',
				'label' => 'Social Media Type ',
				'name' => 'footer_social_media_type',
				'type' => 'select',
				'instructions' => 'Select if you want the icons to be plain text or icons.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Icons',
					3 => 'Text',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5aa13b3a49588',
				'label' => 'Social Media Style',
				'name' => 'footer_social_media_style',
				'type' => 'select',
				'instructions' => 'Select the style of social media.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Colorful',
					3 => 'Dark',
					4 => 'Light',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'product',
					'order_no' => 0,
					'group_no' => 2,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_taxonomy-settings',
		'title' => 'Taxonomy Settings',
		'fields' => array (
			array (
				'key' => 'field_5aa69eb5b18af',
				'label' => 'Columns',
				'name' => 'taxonomy_columns',
				'type' => 'select',
				'instructions' => 'Select the columns of this taxonomy, default is two columns.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'One Column',
					3 => 'Two Columns',
					4 => 'Three Columns',
					5 => 'Four Columns',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5aa69f02b18b0',
				'label' => 'Sidebar',
				'name' => 'taxonomy_sidebar',
				'type' => 'select',
				'instructions' => 'Select the alignment of sidebar or hide it.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Left',
					3 => 'Right',
					4 => 'Hide',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5ad26c64ebbc9',
				'label' => 'Offset',
				'name' => 'taxonomy_offset',
				'type' => 'select',
				'instructions' => 'Enable or disable the offset layout, first and third post will get top spacing.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Enable',
					3 => 'Disable',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5ab26781d479b',
				'label' => 'Shadow',
				'name' => 'taxonomy_shadow',
				'type' => 'select',
				'instructions' => 'Show or hide posts shadow in this taxonomy.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Show',
					3 => 'Hide',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5aa69f38b18b1',
				'label' => 'Pagination',
				'name' => 'taxonomy_pagination',
				'type' => 'select',
				'instructions' => 'Select the pagination type, default is normal.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'Normal',
					3 => 'Show More',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5aa69f57b18b2',
				'label' => 'Animation',
				'name' => 'taxonomy_animation',
				'type' => 'select',
				'instructions' => 'Select initial loading animation for posts.',
				'choices' => array (
					1 => 'Inherit from Theme Options',
					2 => 'None',
					3 => 'Fade In',
					4 => 'Fade In (with delay)',
					5 => 'Fade In Up',
					6 => 'Fade In Up (with delay)',
				),
				'default_value' => 1,
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'ef_taxonomy',
					'operator' => '==',
					'value' => 'category',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
