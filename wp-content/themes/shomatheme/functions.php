<?php

	function load_css() {
		wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
		wp_enqueue_style('bootstrap');

		wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
		wp_enqueue_style('main');
	}

	add_action('wp_enqueue_scripts', 'load_css');

    function load_js() {
        wp_enqueue_script('jquery');
		wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
		wp_enqueue_script('bootstrap');
	}

    add_action('wp_enqueue_scripts', 'load_js');

	add_theme_support('menus');

	register_nav_menus(
		array(
			'top-menu' => 'Top Menu Location',
			'mobile-menu' => 'Mobile Menu Location',
			'footer-menu' => 'Footer Menu Location',
		)
);

	add_theme_support('post-thumbnails');

	add_image_size('blog-large', 800, 400, true);

	add_image_size('blog-small', 300, 200, true);
	

	add_theme_support('widgets');

	
	function my_sidebars() {

		register_sidebar(
			array(
				'name' => 'Blog Sidebar',
				'id' => 'blog-sidebar',
				'before_title' => '<h4 class="widget-title">',
				'after_title' => '</h4>'
			)
		);

		register_sidebar(
			array(
				'name' => 'Home Sidebar',
				'id' => 'home-sidebar',
				'before_title' => '<h4 class="widget-title">',
				'after_title' => '</h4>'
			)
		);
	}

	add_action( 'widgets_init', 'my_sidebars' );

	add_action('wp_ajax_enquiry', 'enquiry_form');
	add_action('wp_ajax_nopriv_enquiry', 'enquiry_form');

function enquiry_form() {

	if(!wp_verify_nonce($_POST['nonce'], 'ajax-nonce')) {
		wp_send_json_error('Nonce is incorrect', 401);
		die();
	}

	$formdata = [];

	wp_parse_str($_POST['enquiry'], $formdata);

	// Admin email address
	$admin_email = get_option('admin_email');

	// Create email headers
	$headers[] = 'Content-Type: text/html; charset-UTF: 8';
	$headers[] = 'From: My Website <' . $admin_email . '>';
	$headers[] = 'Reply-to:' . $formdata['email'];

	// Who are we sending the email to?
	$send_to = $admin_email;

	// Subject
	$subject = 'Enquiry from:' . $formdata['fname'] . $formdata['lname'];

	// Message
	$message = '';

	foreach($formdata as $index => $field) {
		$message .=  '<strong>' . $index . '</strong>' . $field . '<br />';
	}

	try {
		if(wp_mail($send_to, $subject, $message, $headers)) {
			wp_send_json_success('Email sent!');
		} else {
		wp_send_json_error('Email error!');
		}
	} catch (Exception $e) {
		wp_send_json_error($e->getMessage());
	}

	wp_send_json_success($formdata['fname']);
}


	

	
?>