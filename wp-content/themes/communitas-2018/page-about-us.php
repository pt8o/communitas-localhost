<?php
/**
 * "About Us" page template
 * @package Communitas_2018
 */

get_header();

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="page-headline">
                <div class="headline">
                    <h2><?php echo get_the_title() ?></h2>
                </div>
            </div>

            <?php
            if (have_rows('our_story')): the_row();
                ?>
                    <section>
                        <h3><?php echo get_sub_field('title'); ?></h3>
                        <p><?php echo get_sub_field('description'); ?></p>
                    </section>
                <?php
            endif;
            ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
