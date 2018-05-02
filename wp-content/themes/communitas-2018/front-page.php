<?php
/**
 * Custom template for front page only
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

      <div id="slideshow">
        <?php
    		  if (have_rows('slideshow_content')):
            while (have_rows('slideshow_content')) : the_row();
              $content_type = get_sub_field('content_type');

              ?>
                <div class="entry">
              <?php

              if ($content_type == 'image'):
                $image_url = get_sub_field('image');
                ?>
                  <img src=<?php echo $image_url ?> alt="" />
                <?php
                echo '<br/>';

              else:
                $vimeo_id = get_sub_field('vimeo_id');
                ?>
                  <div style="padding:56.25% 0 0 0;position:relative;">
                    <iframe
                      src="https://player.vimeo.com/video/<?php echo $vimeo_id ?>?title=0&byline=0&portrait=0"
                      style="position:absolute;top:0;left:0;width:100%;height:100%;"
                      frameborder="0"
                      webkitallowfullscreen
                      mozallowfullscreen
                      allowfullscreen
                    ></iframe>
                  </div>
                  <script src="https://player.vimeo.com/api/player.js"></script>
                <?php
              endif;

              $caption = get_sub_field('caption');
              if ($caption != ''):
                ?>
                  <div class="caption">
                    <?php echo $caption ?>
                  </div>
                <?php
              endif;

              ?>
                </div>
              <?php

            endwhile;
          endif;
    		?>
        <button id="slide-left" class="slideshow-control">&lt;</button>
        <button id="slide-right" class="slideshow-control">&gt;</button>
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
