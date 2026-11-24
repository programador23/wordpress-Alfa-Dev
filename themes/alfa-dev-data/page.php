<?php
get_header();
?>
<main id="contenido" class="content-page">
	<div class="container">
		<?php
		while ( have_posts() ) :
			the_post();
			$is_solution_page = (bool) get_post_meta( get_the_ID(), 'alfa_solution_page', true );
			?>
			<article <?php post_class( $is_solution_page ? 'solution-entry' : '' ); ?>>
				<?php if ( ! $is_solution_page ) : ?>
					<h1><?php the_title(); ?></h1>
				<?php endif; ?>
				<div class="entry-content"><?php the_content(); ?></div>
			</article>
		<?php endwhile; ?>
	</div>
</main>
<?php
get_footer();
