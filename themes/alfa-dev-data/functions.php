<?php

function alfa_dev_data_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	register_nav_menus( array( 'primary' => __( 'Menú principal', 'alfa-dev-data' ) ) );
}
add_action( 'after_setup_theme', 'alfa_dev_data_setup' );

function alfa_dev_data_enqueue_styles() {
	$style_path = get_stylesheet_directory() . '/style.css';
	wp_enqueue_style( 'alfa-dev-data-style', get_stylesheet_uri(), array(), file_exists( $style_path ) ? (string) filemtime( $style_path ) : '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'alfa_dev_data_enqueue_styles' );

function alfa_dev_data_solution_url( $slug ) {
	$solution_page = get_page_by_path( $slug );
	return $solution_page ? get_permalink( $solution_page ) : home_url( '/#' . sanitize_html_class( $slug ) );
}

function alfa_dev_data_contact_url() {
	$contact_page = get_page_by_path( 'contacto' );
	return $contact_page ? get_permalink( $contact_page ) : home_url( '/contacto/' );
}

function alfa_dev_data_contact_redirect( $status ) {
	wp_safe_redirect( add_query_arg( 'contacto', $status, alfa_dev_data_contact_url() ) );
	exit;
}

function alfa_dev_data_handle_contact() {
	if ( ! isset( $_POST['alfa_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['alfa_nonce'] ) ), 'alfa_contact_form' ) ) {
		alfa_dev_data_contact_redirect( 'invalid' );
	}

	if ( ! empty( $_POST['alfa_website'] ) ) {
		alfa_dev_data_contact_redirect( 'sent' );
	}

	$name    = isset( $_POST['alfa_name'] ) ? sanitize_text_field( wp_unslash( $_POST['alfa_name'] ) ) : '';
	$email   = isset( $_POST['alfa_email'] ) ? sanitize_email( wp_unslash( $_POST['alfa_email'] ) ) : '';
	$phone   = isset( $_POST['alfa_phone'] ) ? sanitize_text_field( wp_unslash( $_POST['alfa_phone'] ) ) : '';
	$company = isset( $_POST['alfa_company'] ) ? sanitize_text_field( wp_unslash( $_POST['alfa_company'] ) ) : '';
	$service = isset( $_POST['alfa_service'] ) ? sanitize_text_field( wp_unslash( $_POST['alfa_service'] ) ) : '';
	$message = isset( $_POST['alfa_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['alfa_message'] ) ) : '';

	if ( '' === $name || ! is_email( $email ) || '' === $message ) {
		alfa_dev_data_contact_redirect( 'invalid' );
	}

	$body = implode(
		"\n",
		array(
			'Nombre: ' . $name,
			'Correo: ' . $email,
			'Teléfono: ' . $phone,
			'Empresa: ' . $company,
			'Solución de interés: ' . $service,
			'',
			'Mensaje:',
			$message,
		)
	);
	$sent = wp_mail( 'christianguloprogramador@gmail.com', 'Nuevo contacto - Alfa Dev & Data', $body, array( 'Reply-To: ' . $email ) );

	alfa_dev_data_contact_redirect( $sent ? 'sent' : 'error' );
}
add_action( 'admin_post_nopriv_alfa_contact', 'alfa_dev_data_handle_contact' );
add_action( 'admin_post_alfa_contact', 'alfa_dev_data_handle_contact' );
