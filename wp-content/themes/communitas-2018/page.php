<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
                </div>
			</div>
			
		<?php		
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
