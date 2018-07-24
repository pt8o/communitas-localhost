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
            // "Our Story" section
            // Simple title and text
            if (have_rows('our_story')): the_row();
                ?>
                    <section>
                        <h3><?php echo get_sub_field('title'); ?></h3>
                        <p><?php echo get_sub_field('description'); ?></p>
                    </section>
                <?php
            endif;

            // "Our Team" section
            // Two loops (staff & board)
            if (have_rows('our_team')): the_row();
                ?>
                    <section>
                        <h3><?php echo get_sub_field('title'); ?></h3><br/>

                        <!-- Staff members -->
                        <?php $staff = get_sub_field('staff'); ?>
                        <div class="subsection staff">
                            <h4><?php echo $staff['title']; ?></h4><br/>
                            <?php foreach($staff['staff_members'] as $val) { ?>
                                <div class="person">
                                    <span
                                        class="portrait"
                                        style="background-image:url('<?php
                                            if ($val['image']) {
                                                echo $val['image'];
                                            } else {
                                                echo 'default';
                                            }
                                        ?>');"
                                    ></span>
                                    <span class="name"><?php echo $val['name']; ?></span>
                                </div>
                            <?php } ?>
                        </div>

                        <!-- Board members -->
                        <div class="subsection board">
                            <?php $board = get_sub_field('board'); ?>
                            <h4><?php echo $board['title']; ?></h4><br/>
                            <?php foreach($board['board_members'] as $val) { ?>
                                <div class="person">
                                    <span
                                        class="portrait"
                                        style="background-image:url('<?php
                                            if ($val['image']) {
                                                echo $val['image'];
                                            } else {
                                                echo 'default';
                                            }
                                        ?>');"
                                    ></span>
                                    <span class="name"><?php echo $val['name']; ?></span>
                                </div>
                            <?php } ?>
                        </div>
                    </section>
                <?php
            endif;
            
            ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
