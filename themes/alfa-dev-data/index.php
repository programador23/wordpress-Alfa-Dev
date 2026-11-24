<?php
get_header();
?>
<main id="contenido" class="content-page">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class(); ?>>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<div class="entry-content"><?php the_excerpt(); ?></div>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<h1>Alfa Dev &amp; Data</h1>
			<p>Estamos preparando nuevos contenidos.</p>
		<?php endif; ?>
	</div>
</main>
<?php
get_footer();
