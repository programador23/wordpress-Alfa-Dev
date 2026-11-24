<?php

function alfa_dev_data_sync_pages() {
	$content_version = '1';
	if ( (string) get_option( 'alfa_dev_data_pages_version', '' ) === $content_version ) {
		return;
	}

	$pages_file = get_theme_file_path( 'data/pages.json' );
	if ( ! is_readable( $pages_file ) ) {
		wp_die( esc_html__( 'No se pudo leer el contenido de páginas del tema Alfa Dev & Data.', 'alfa-dev-data' ) );
	}

	$pages_json = file_get_contents( $pages_file );
	$pages      = false === $pages_json ? null : json_decode( $pages_json, true );
	if ( ! is_array( $pages ) || JSON_ERROR_NONE !== json_last_error() ) {
		wp_die( esc_html__( 'El archivo de páginas del tema Alfa Dev & Data no contiene JSON válido.', 'alfa-dev-data' ) );
	}

	$page_ids = array();
	foreach ( $pages as $page ) {
		if ( ! is_array( $page ) || empty( $page['slug'] ) || ! isset( $page['title'], $page['content'], $page['status'] ) ) {
			wp_die( esc_html__( 'Hay una página incompleta en los datos del tema Alfa Dev & Data.', 'alfa-dev-data' ) );
		}

		$content = str_replace(
			array( '{{contact_url}}', '{{theme_uri}}', '{{site_url}}' ),
			array( home_url( '/contacto/' ), trailingslashit( get_stylesheet_directory_uri() ), home_url( '/' ) ),
			$page['content']
		);

		$post_data = array(
			'post_type'    => 'page',
			'post_status'  => $page['status'],
			'post_title'   => $page['title'],
			'post_name'    => $page['slug'],
			'post_content' => $content,
			'menu_order'   => isset( $page['menu_order'] ) ? (int) $page['menu_order'] : 0,
		);

		$existing_page = get_page_by_path( $page['slug'], OBJECT, 'page' );
		if ( $existing_page ) {
			$post_data['ID'] = $existing_page->ID;
		}

		$page_id = wp_insert_post( wp_slash( $post_data ), true );
		if ( is_wp_error( $page_id ) || ! $page_id ) {
			$error = is_wp_error( $page_id ) ? $page_id->get_error_message() : __( 'No se pudo guardar una página.', 'alfa-dev-data' );
			wp_die( esc_html( $error ) );
		}

		if ( ! empty( $page['is_solution'] ) ) {
			update_post_meta( $page_id, 'alfa_solution_page', '1' );
		} else {
			delete_post_meta( $page_id, 'alfa_solution_page' );
		}

		$page_ids[ $page['slug'] ] = $page_id;
	}

	if ( isset( $page_ids['inicio'] ) ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', (int) $page_ids['inicio'] );
	}

	if ( isset( $page_ids['politica-de-privacidad'] ) ) {
		update_option( 'wp_page_for_privacy_policy', (int) $page_ids['politica-de-privacidad'] );
	}

	update_option( 'alfa_dev_data_pages_version', $content_version );
	flush_rewrite_rules( false );
}
add_action( 'after_setup_theme', 'alfa_dev_data_sync_pages' );
