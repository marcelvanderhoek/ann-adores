<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Ann_Adores
 */

get_header(); ?>

<article id="404" class="bericht">
    
    <header class="bericht-header">
		<h1 class="page-title">Oeps! De pagina die je zoekt bestaat niet (meer).</h1>
	</header><!-- .bericht-header -->

	<div class="entry-content">
		<p>Op het adres dat je hebt ingetikt of aangeklikt is niets (meer) te vinden. Hieronder staat een lijstje met mijn laatste berichten. Hopelijk vind je daar iets leuks tussen!</p>
		<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

	</div><!-- .entry-content -->

</article>

<?php get_footer(); ?>
