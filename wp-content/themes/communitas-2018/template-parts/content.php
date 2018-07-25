<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Communitas_2018
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			if ( 'post' === get_post_type() ) :
				?>
				<div class="meta">
				<?php communitas_2018_posted_on(); echo '&nbsp;&nbsp;|&nbsp;&nbsp;'; communitas_2018_posted_by(); ?>
				</div>
			<?php endif;
		endif;

		?>
	</header>
	<!-- .entry-header -->

	<!-- <?php communitas_2018_post_thumbnail(); ?> -->

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( '&rarr; <span class="screen-reader-text">Continue reading "%s"</span>', 'communitas-2018' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'communitas-2018' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<!-- <footer class="entry-footer">
		<?php communitas_2018_entry_footer(); ?>
	</footer> -->
	<!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
