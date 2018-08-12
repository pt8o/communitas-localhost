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
                    <button class="video-play button-round large transparent">&#9658;</button>
                  </div>
                  <div class="video-container">
                    <div class="video-overlay"></div>
                    <div class="video-content" data-url="<?php echo $vimeo_id ?>"></div>
                    <button class="close transparent"><img src="<?php echo esc_url( home_url( '/wp-content/themes/communitas-2018/static/icon-close-w.png' ) ); ?>"></button>
                  </div>
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
        <button id="slide-left" class="slideshow-control transparent disabled">&larr;</button>
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
          <a href="<?php echo esc_url( home_url( '/challenges' ) ); ?>" class="card responsive third">
            <?php $why_it_matters = get_field('why_it_matters'); ?>
            <h4><?php echo $why_it_matters['title']; ?></h4>
            <p><?php echo $why_it_matters['text']; ?></p>
          </a><a href="<?php echo esc_url( home_url( '/our-work' ) ); ?>" class="card responsive third">
            <?php $how_we_work = get_field('how_we_work'); ?>
            <h4><?php echo $how_we_work['title']; ?></h4>
            <p><?php echo $how_we_work['text']; ?></p>
          </a><a href="<?php echo esc_url( home_url( '/get-involved' ) ); ?>" class="card responsive third">
            <?php $how_contribute = get_field('how_contribute'); ?>
            <h4><?php echo $how_contribute['title']; ?></h4>
            <p><?php echo $how_contribute['text']; ?></p>
          </a>
        </div>
      </section>

      <section id="impact-news">
        <div class="card responsive half">
          <div class="card-title">
            <img class="icon-deco" src="<?php echo esc_url( home_url( '/wp-content/themes/communitas-2018/static/icon-handshake.png' ) ); ?>" alt="Communitas logo" /><br/>
            <?php $our_impact = get_field('our_impact'); ?>
            <h4><?php echo $our_impact['title']?></h4>
          </div>
          <p><?php echo $our_impact['text']?></p>
        </div><div class="news card responsive half">
          <div class="card-title">
            <img class="icon-deco" src="<?php echo esc_url( home_url( '/wp-content/themes/communitas-2018/static/icon-broadcast.png' ) ); ?>" alt="Communitas logo" /><br/>
            <?php $hear_the_latest = get_field('hear_the_latest'); ?>
            <h4><?php echo $hear_the_latest['title']?></h4>
          </div>
          <p><?php echo $hear_the_latest['text']?></p>

          <!-- Begin MailChimp Signup Form -->
          <div id="mc_embed_signup">
          <form
          action="https://CommunitasMontreal.us17.list-manage.com/subscribe/post?u=2ab61f58c41ab6ae02ba0498c&amp;id=d3ef49a43c"
          method="post" id="mc-embedded-subscribe-form"
          name="mc-embedded-subscribe-form" class="validate" target="_blank"
          novalidate>
              <div id="mc_embed_signup_scroll">
          <div class="indicates-required"><span class="asterisk">*</span>
           required</div>
          <div class="mc-field-group">
          <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
          </label>
          <input type="email" value="" name="EMAIL" class="required email"
          id="mce-EMAIL" placeholder="<?php echo $hear_the_latest['email_placeholder'] ?>">
          </div>
          <div class="mc-field-group">
          <label for="mce-FNAME">First Name </label>
          <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
          </div>
          <div class="mc-field-group">
          <label for="mce-LNAME">Last Name </label>
          <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
          </div>
          <div class="mc-field-group size1of2">
          <label for="mce-BIRTHDAY-month">Birthday </label>
          <div class="datefield">
          <span class="subfield monthfield"><input class="birthday " type="text"
          pattern="[0-9]*" value="" placeholder="MM" size="2" maxlength="2"
          name="BIRTHDAY[month]" id="mce-BIRTHDAY-month"></span> /
          <span class="subfield dayfield"><input class="birthday " type="text"
          pattern="[0-9]*" value="" placeholder="DD" size="2" maxlength="2"
          name="BIRTHDAY[day]" id="mce-BIRTHDAY-day"></span>
          <span class="small-meta nowrap">( mm / dd )</span>
          </div>
          </div> <div id="mce-responses" class="clear">
          <div class="response" id="mce-error-response"
          style="display:none"></div>
          <div class="response" id="mce-success-response"
          style="display:none"></div>
          </div>    <!-- real people should not fill this in and expect good
          things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;"
          aria-hidden="true"><input type="text"
          name="b_2ab61f58c41ab6ae02ba0498c_d3ef49a43c" tabindex="-1"
          value=""></div>
              <div class="clear"><input type="submit" value="<?php echo $hear_the_latest['sign_up_button'] ?>"
          name="subscribe" id="mc-embedded-subscribe" class="button-square"></div>
              </div>
          </form>
          </div>
          <script type='text/javascript'
          src='https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames
          = new Array(); window.ftypes = new
          Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='BIRTHDAY';ftypes[3]='birthday';}(jQuery));var
          $mcj = jQuery.noConflict(true);</script>
          <!--End mc_embed_signup-->
        </div>
      </section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
