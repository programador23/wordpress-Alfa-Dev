<?php
get_header();
$contact_url = alfa_dev_data_contact_url();
?>
<main id="contenido">
	<section class="hero">
		<div class="container hero-grid">
			<div>
				<p class="eyebrow">Tecnología para avanzar</p>
				<h1>Ideas que se convierten en <span class="gradient-text">soluciones digitales.</span></h1>
				<p class="hero-copy">Impulsamos empresas con tecnología hecha a su medida: desde una presencia digital potente hasta software, aplicaciones y datos que ayudan a crecer.</p>
				<div class="hero-actions">
					<a class="button" href="<?php echo esc_url( $contact_url ); ?>">Hablemos de tu proyecto <span aria-hidden="true">→</span></a>
					<a class="button button-secondary" href="#soluciones">Explorar soluciones <span aria-hidden="true">↓</span></a>
				</div>
				<p class="hero-note"><span class="status-dot" aria-hidden="true"></span> Un equipo tecnológico para el próximo paso de tu empresa</p>
				<div class="trust-row" aria-label="Áreas de especialidad">
					<span class="trust-chip">Desarrollo digital</span>
					<span class="trust-chip">Software a medida</span>
					<span class="trust-chip">Datos e inteligencia</span>
				</div>
			</div>
			<div class="visual" aria-label="Áreas de servicio de Alfa Dev &amp; Data">
				<div class="visual-board">
					<div class="visual-board-top">
						<span class="visual-board-brand">ALFA / DEV &amp; DATA</span>
						<span class="visual-board-label">ÁREAS DE SERVICIO</span>
					</div>
					<h2 class="visual-board-title">Un equipo, múltiples capacidades</h2>
					<div class="visual-board-list">
						<div class="visual-board-item">
							<span class="visual-board-index">01</span>
							<div><strong>Desarrollo digital</strong><small>Sitios web y tiendas en línea</small></div>
						</div>
						<div class="visual-board-item">
							<span class="visual-board-index">02</span>
							<div><strong>Software y aplicaciones</strong><small>Herramientas para cada proceso</small></div>
						</div>
						<div class="visual-board-item">
							<span class="visual-board-index">03</span>
							<div><strong>Marketing y datos</strong><small>Estrategia e información útil</small></div>
						</div>
					</div>
					<div class="visual-board-footer"><span>ESTRATEGIA</span><span aria-hidden="true">/</span><span>DESARROLLO</span><span aria-hidden="true">/</span><span>DATOS</span></div>
				</div>
				<div class="visual-note">
					<span class="visual-note-mark" aria-hidden="true">α</span>
					<span><strong>Del análisis al producto</strong><small>Un equipo tecnológico a tu lado</small></span>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-alt" id="soluciones">
		<div class="container">
			<div class="section-heading">
				<p class="eyebrow">Lo que hacemos</p>
				<h2>La tecnología que tu empresa necesita, en un solo equipo.</h2>
				<p>Diseñamos y desarrollamos soluciones útiles, conectadas con tus objetivos y preparadas para evolucionar contigo.</p>
			</div>
			<div class="service-grid">
				<article class="service-card" id="paginas-web">
					<div class="service-card-top">
						<span class="service-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="2"></rect><path d="M3 9h18M7 6.5h.01M10 6.5h.01M7 13h5M7 16h10"></path></svg></span>
						<span class="service-number">01</span>
					</div>
					<h3><a class="service-title-link" href="<?php echo esc_url( alfa_dev_data_solution_url( 'paginas-web' ) ); ?>">Páginas web</a></h3>
					<p>Diseño y desarrollo web profesional, adaptable a cada pantalla y pensado para comunicar el valor de tu empresa.</p>
					<a class="service-more" href="<?php echo esc_url( alfa_dev_data_solution_url( 'paginas-web' ) ); ?>">Conocer solución <span aria-hidden="true">→</span></a>
				</article>
				<article class="service-card" id="tiendas-online">
					<div class="service-card-top">
						<span class="service-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M4 9h16l-1.2-5H5.2L4 9Z"></path><path d="M5 9v11h14V9M9 20v-6h6v6M4 9a2 2 0 0 0 4 0 2 2 0 0 0 4 0 2 2 0 0 0 4 0 2 2 0 0 0 4 0"></path></svg></span>
						<span class="service-number">02</span>
					</div>
					<h3><a class="service-title-link" href="<?php echo esc_url( alfa_dev_data_solution_url( 'tiendas-web' ) ); ?>">Tiendas web</a></h3>
					<p>Experiencias de comercio electrónico para mostrar tus productos, gestionar ventas y crecer en línea.</p>
					<a class="service-more" href="<?php echo esc_url( alfa_dev_data_solution_url( 'tiendas-web' ) ); ?>">Conocer solución <span aria-hidden="true">→</span></a>
				</article>
				<article class="service-card" id="marketing-digital">
					<div class="service-card-top">
						<span class="service-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M4 13V9a2 2 0 0 1 2-2h3l8-3v14l-8-3H6a2 2 0 0 1-2-2Z"></path><path d="m8 15 1.5 5H13l-2-5M20 8l2-1M20 15l2 1"></path></svg></span>
						<span class="service-number">03</span>
					</div>
					<h3><a class="service-title-link" href="<?php echo esc_url( alfa_dev_data_solution_url( 'marketing-digital' ) ); ?>">Marketing digital</a></h3>
					<p>Estrategia, contenidos y presencia digital para conectar con tus clientes y fortalecer tu marca.</p>
					<a class="service-more" href="<?php echo esc_url( alfa_dev_data_solution_url( 'marketing-digital' ) ); ?>">Conocer solución <span aria-hidden="true">→</span></a>
				</article>
				<article class="service-card" id="software-a-medida">
					<div class="service-card-top">
						<span class="service-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="m8 7-5 5 5 5m8-10 5 5-5 5m-3-12-2 14"></path></svg></span>
						<span class="service-number">04</span>
					</div>
					<h3><a class="service-title-link" href="<?php echo esc_url( alfa_dev_data_solution_url( 'software-a-medida' ) ); ?>">Software a medida</a></h3>
					<p>Aplicaciones y sistemas personalizados para simplificar procesos y responder a las necesidades de tu negocio.</p>
					<a class="service-more" href="<?php echo esc_url( alfa_dev_data_solution_url( 'software-a-medida' ) ); ?>">Conocer solución <span aria-hidden="true">→</span></a>
				</article>
				<article class="service-card" id="apps-moviles">
					<div class="service-card-top">
						<span class="service-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><rect x="7" y="2.5" width="10" height="19" rx="2"></rect><path d="M10 5h4m-3 13h2"></path></svg></span>
						<span class="service-number">05</span>
					</div>
					<h3><a class="service-title-link" href="<?php echo esc_url( alfa_dev_data_solution_url( 'apps-moviles' ) ); ?>">Aplicaciones móviles</a></h3>
					<p>Apps móviles para acercar tus servicios a las personas y acompañar sus tareas desde cualquier lugar.</p>
					<a class="service-more" href="<?php echo esc_url( alfa_dev_data_solution_url( 'apps-moviles' ) ); ?>">Conocer solución <span aria-hidden="true">→</span></a>
				</article>
				<article class="service-card" id="analisis-de-datos">
					<div class="service-card-top">
						<span class="service-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19V5m0 14h17"></path><path d="M8 16v-4h3v4m2 0V8h3v8m2 0v-6h3v6"></path></svg></span>
						<span class="service-number">06</span>
					</div>
					<h3><a class="service-title-link" href="<?php echo esc_url( alfa_dev_data_solution_url( 'analisis-de-datos' ) ); ?>">Análisis de datos</a></h3>
					<p>Organización, visualización y análisis de información para convertir datos en decisiones más claras.</p>
					<a class="service-more" href="<?php echo esc_url( alfa_dev_data_solution_url( 'analisis-de-datos' ) ); ?>">Conocer solución <span aria-hidden="true">→</span></a>
				</article>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container approach-grid">
			<div>
				<p class="eyebrow">Nuestra forma de trabajar</p>
				<h2 class="approach-title">De un desafío real a una solución que funciona.</h2>
			</div>
			<div class="approach-copy">
				<p>Combinamos estrategia, diseño y desarrollo para crear tecnología comprensible y útil. Escuchamos lo que tu negocio necesita y construimos contigo, paso a paso.</p>
				<div class="steps">
					<div class="step"><b>01 / ENTENDER</b><span>Conocemos tu desafío</span></div>
					<div class="step"><b>02 / DISEÑAR</b><span>Definimos la solución</span></div>
					<div class="step"><b>03 / CONSTRUIR</b><span>Desarrollamos contigo</span></div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-alt">
		<div class="container">
			<div class="cta-panel">
				<div>
					<h2>¿Tienes una idea o un reto por resolver?</h2>
					<p>Cuéntanos qué necesita tu empresa. Nos encantará conversar.</p>
				</div>
				<a class="button" href="<?php echo esc_url( $contact_url ); ?>">Empezar una conversación <span aria-hidden="true">→</span></a>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
