<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ann_Adores
 */

?>

<article id="post-<?php the_ID(); ?>" class="bericht">
    
    <header class="bericht-header">
		<?php the_title( sprintf( '<h1 class="bericht-titel"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="bericht-meta">
			<span class="bericht-datum">
				<?php ann_adores_posted_on(); ?>
			</span>
			<span class="bericht-reacties">
          		<a href="<?php echo esc_url( get_permalink() ); ?>#comments">
          		<?php echo get_comments_number();
          			if (get_comments_number() == 1) {
          				echo " reactie";
          			} else {
          				echo " reacties";
          			}
          		 ?>
          		 </a>
        	</span>
		</div><!-- .bericht-meta -->
		<?php endif; ?>
	</header><!-- .bericht-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Lees verder in %s <span class="meta-nav">&rarr;</span>', 'ann-adores' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pagina\'s:', 'ann-adores' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
