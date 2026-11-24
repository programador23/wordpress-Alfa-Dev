<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="screen-reader-text" href="#contenido">Saltar al contenido</a>
<?php $home_url = home_url( '/' ); ?>
<?php
$solution_links = array(
	'Páginas web'          => 'paginas-web',
	'Tiendas web'          => 'tiendas-web',
	'Puntos de venta'      => 'puntos-de-venta',
	'Marketing digital'    => 'marketing-digital',
	'Software a medida'    => 'software-a-medida',
	'Aplicaciones móviles' => 'apps-moviles',
	'Análisis de datos'    => 'analisis-de-datos',
);
?>
<header class="site-header">
	<div class="header-inner">
		<a class="brand" href="<?php echo esc_url( $home_url ); ?>" aria-label="Alfa Dev & Data, inicio">
			<span class="brand-mark" aria-hidden="true">A</span>
			<span class="brand-name">Alfa <span>Dev</span> &amp; Data</span>
		</a>
		<nav class="main-nav" aria-label="Menú principal">
			<a href="<?php echo esc_url( $home_url ); ?>">Inicio</a>
			<details class="nav-solutions">
				<summary>Soluciones</summary>
				<div class="solutions-menu">
					<?php foreach ( $solution_links as $label => $slug ) : ?>
						<a href="<?php echo esc_url( alfa_dev_data_solution_url( $slug ) ); ?>"><?php echo esc_html( $label ); ?></a>
					<?php endforeach; ?>
				</div>
			</details>
			<a href="<?php echo esc_url( alfa_dev_data_contact_url() ); ?>">Contacto</a>
		</nav>
		<a class="button header-cta" href="<?php echo esc_url( alfa_dev_data_contact_url() ); ?>">Hablemos <span aria-hidden="true">→</span></a>
	</div>
</header>
