<?php
/**
 * Custom template for front page only
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

      <!-- start slideshow -->
      <div class="slideshow">
        <?php
    		  if (have_rows('slideshow_content')):
            while (have_rows('slideshow_content')) : the_row();
              $content_type = get_sub_field('content_type');

              ?>
                <div class="entry" id="entry-<?php echo get_row_index(); ?>">
              <?php

              if ($content_type == 'image'):
                $image_url = get_sub_field('image');
                ?>
                  <div class="image" style="background-image:url('<?php echo $image_url ?>')"></div>
                <?php
                echo '<br/>';

              else:
                $vimeo_id = get_sub_field('vimeo_id');
                $video_thumbnail = get_sub_field('video_thumbnail');
                ?>
                  <div class="image video-thumbnail" style="background-image:url('<?php echo $video_thumbnail ?>')">
                    <button class="video-play button-round large">&#9658;</button>
                  </div>
                  <div class="video-container">
                    <div class="video-overlay">
                      <button class="close transparent">&#10006;</button>
                    </div>
                    <iframe
                      src="https://player.vimeo.com/video/<?php echo $vimeo_id ?>?title=0&byline=0&portrait=0"
                      style="position:absolute;top:10%;left:10%;width:80%;height:80%;border-radius:8px;"
                      frameborder="0"
                      webkitallowfullscreen mozallowfullscreen allowfullscreen
                    ></iframe>
                  </div>
                  <script src="https://player.vimeo.com/api/player.js"></script>
                <?php
              endif;

              $caption = get_sub_field('caption');
              if ($caption != ''):
                ?>
                  <div class="caption">
                    <span><?php echo $caption ?></span>
                  </div>
                <?php
              endif;

              ?>
                </div>
              <?php

            endwhile;
          endif;
        ?>
        <button id="slide-left" class="slideshow-control transparent hidden">&larr;</button>
        <button id="slide-right" class="slideshow-control transparent">&rarr;</button>

        <!-- <div id="slideshow-index">
          <?php
            if (have_rows('slideshow_content')):
              while (have_rows('slideshow_content')) : the_row();
                ?>
                  <button
                    class="slideshow-index button-round"
                    id="slideshow-index-<?php echo get_row_index() ?>"
                  ></button>
                <?php
              endwhile;
            endif;
          ?>
        </div> -->
      </div>

      <section id="about-communitas">
        <p class="hook"><?php the_field('about_communitas'); ?></p>
        <div class="card-container">
          <a href="#" class="card responsive third">
            <?php $why_it_matters = get_field('why_it_matters'); ?>
            <h4><?php echo $why_it_matters['title']; ?></h4>
            <p><?php echo $why_it_matters['text']; ?></p>
          </a><a href="#" class="card responsive third">
            <?php $how_we_work = get_field('how_we_work'); ?>
            <h4><?php echo $how_we_work['title']; ?></h4>
            <p><?php echo $how_we_work['text']; ?></p>
          </a><a href="#" class="card responsive third">
            <?php $how_contribute = get_field('how_contribute'); ?>
            <h4><?php echo $how_contribute['title']; ?></h4>
            <p><?php echo $how_contribute['text']; ?></p>
          </a>
        </div>
      </section>

      <section id="impact-news">
        <div class="card responsive half">
          <?php $our_impact = get_field('our_impact'); ?>
          <h4><?php echo $our_impact['title']?></h4>
          <p><?php echo $our_impact['text']?></p>
        </div><div class="news card responsive half">
          <?php $hear_the_latest = get_field('hear_the_latest'); ?>
          <h4><?php echo $hear_the_latest['title']?></h4>
          <p><?php echo $hear_the_latest['text']?></p>

          <form>
            <input type="text" placeholder="<?php echo $hear_the_latest['email_placeholder'] ?>"/>
            <button><?php echo $hear_the_latest['sign_up_button'] ?></button>
          </form>
        </div>
      </section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
