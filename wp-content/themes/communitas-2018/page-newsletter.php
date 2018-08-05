<?php
/**
 * "Newsletter" page template
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
		// Description text comes from regular WP page content
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );
		endwhile;

		// Newsletters themselves		
		?>
		<article class="page"><div class="entry-content newsletter-container">
		
		<?php if (have_rows('newsletters')):
			while (have_rows('newsletters')) : the_row(); ?><a class="newsletter-edition responsive third" href="<?php echo get_sub_field('file'); ?>" target="_blank"><div class="newsletter-title"><?php echo get_sub_field('title');?></div><img src="<?php echo get_sub_field('thumbnail');?>" /><div class="overlay">Click to view/download</div></a><?php endwhile; ?>
		<?php endif;?>
		</div></article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
