<?php
get_header();
$contact_status = isset( $_GET['contacto'] ) ? sanitize_key( wp_unslash( $_GET['contacto'] ) ) : '';
?>
<main id="contenido" class="contact-section">
	<div class="container contact-grid">
		<div class="contact-intro">
			<p class="eyebrow">Hablemos</p>
			<h1>Cuéntanos qué quieres construir.</h1>
			<p>Déjanos los detalles de tu idea o desafío. El equipo de Alfa Dev &amp; Data podrá revisarlo y ponerse en contacto contigo.</p>
			<div class="contact-details">
				<div class="contact-detail"><span class="float-icon" aria-hidden="true">↗</span><span><b>Conversemos sobre tu proyecto</b>Cuéntanos tus objetivos y qué solución tienes en mente.</span></div>
				<div class="contact-detail"><span class="float-icon" aria-hidden="true">◈</span><span><b>Una solución a tu medida</b>Revisaremos cuál de nuestras áreas puede ayudarte.</span></div>
			</div>
		</div>
		<div>
			<?php if ( 'sent' === $contact_status ) : ?>
				<div class="form-alert" role="status">¡Gracias por escribirnos! Tu mensaje fue enviado correctamente.</div>
			<?php elseif ( 'invalid' === $contact_status ) : ?>
				<div class="form-alert form-alert-error" role="alert">Revisa tu nombre, correo y mensaje; luego vuelve a intentarlo.</div>
			<?php elseif ( 'error' === $contact_status ) : ?>
				<div class="form-alert form-alert-error" role="alert">No se pudo enviar el mensaje. Inténtalo más tarde o avisa al administrador del sitio para configurar el correo.</div>
			<?php endif; ?>
			<form class="contact-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
				<input type="hidden" name="action" value="alfa_contact">
				<?php wp_nonce_field( 'alfa_contact_form', 'alfa_nonce' ); ?>
				<div class="honeypot" aria-hidden="true">
					<label for="alfa-website">Deja este campo vacío</label>
					<input type="text" id="alfa-website" name="alfa_website" tabindex="-1" autocomplete="off">
				</div>
				<div class="form-grid">
					<div class="form-field">
						<label for="alfa-name">Nombre *</label>
						<input type="text" id="alfa-name" name="alfa_name" autocomplete="name" required>
					</div>
					<div class="form-field">
						<label for="alfa-email">Correo electrónico *</label>
						<input type="email" id="alfa-email" name="alfa_email" autocomplete="email" required>
					</div>
					<div class="form-field">
						<label for="alfa-phone">Teléfono</label>
						<input type="tel" id="alfa-phone" name="alfa_phone" autocomplete="tel" inputmode="tel">
					</div>
					<div class="form-field">
						<label for="alfa-company">Empresa</label>
						<input type="text" id="alfa-company" name="alfa_company" autocomplete="organization">
					</div>
					<div class="form-field form-field-full">
						<label for="alfa-service">Solución de interés</label>
						<select id="alfa-service" name="alfa_service">
							<option value="">Selecciona una solución</option>
							<option>Páginas web</option>
							<option>Tiendas web</option>
							<option>Puntos de venta</option>
							<option>Marketing digital</option>
							<option>Software a medida</option>
							<option>Aplicaciones móviles</option>
							<option>Análisis de datos</option>
							<option>Otra consulta</option>
						</select>
					</div>
					<div class="form-field form-field-full">
						<label for="alfa-message">¿Cómo podemos ayudarte? *</label>
						<textarea id="alfa-message" name="alfa_message" required></textarea>
					</div>
				</div>
				<button class="button" type="submit">Enviar mensaje <span aria-hidden="true">→</span></button>
				<p class="form-note">Los campos marcados con * son obligatorios. Usaremos tus datos únicamente para responder a esta consulta.</p>
			</form>
		</div>
	</div>
</main>
<?php get_footer(); ?>
