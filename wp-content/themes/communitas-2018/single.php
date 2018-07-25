<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Communitas_2018
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div
                class="page-headline"
                style="background-image:url('<?php
                    $headerImage = get_field('header_image');
                    if ($headerImage){
                        echo $headerImage;
                    } else {
                        echo esc_url( home_url( '/wp-content/themes/communitas-2018/static/home_newsprint.jpg' ) );
                    }
                ?>');"
            >
                <div class="headline">
					<h2><?php echo get_the_title() ?></h2>
					<?php while ( have_posts() ) : the_post(); ?>
					<div class="meta">
						<?php communitas_2018_posted_on(); echo '&nbsp;&nbsp;|&nbsp;&nbsp;'; communitas_2018_posted_by(); ?>
					</div>
                </div>
			</div>				

		<?php
			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
