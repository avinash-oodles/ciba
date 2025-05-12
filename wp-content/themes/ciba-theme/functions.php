

<?php
register_nav_menus(
    array('primary-menu' => 'Header Menu')
);

function load_custom_scripts()
{
	$page_id = get_the_ID();
	$home_page_id = 10;
	//common csss
	wp_enqueue_style(
		'common-css',
		get_template_directory_uri() . '/assets/css/style.css',
		array(),
		'all',
		'all'
	);

	// if ($page_id == $home_page_id) {
		wp_enqueue_style(
			'home-css',
			get_template_directory_uri() . '/assets/css/home-page.css',
			array(),
			'all',
			'all'
		); 
	// }	

}
add_action('wp_enqueue_scripts', 'load_custom_scripts');

?>