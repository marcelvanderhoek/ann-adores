<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ann_Adores
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<section id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>
	<header class="reacties-header">
    	<h2 class="reacties-titel">Reacties (<?php echo get_comments_number(); ?>)</h2>
    </header>
    
	<?php if ( have_comments() ) : ?>

		<section class="reacties">
			<ol>
			<?php
				wp_list_comments( array(
					'avatar_size'       => 100,
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
			</ol>
		</section<!-- .comment-list -->

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php esc_html_e( 'Reacties zijn gesloten.', 'ann-adores' ); ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>

</section><!-- .reacties -->
