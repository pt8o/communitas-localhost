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

        <section>
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
              <div class="clear"><input type="submit" value="Sign Up"
          name="subscribe" id="mc-embedded-subscribe" class="button-square"></div>
              </div>
          </form>
          </div>
          <script type='text/javascript'
          src='<?php echo esc_url( home_url( '/wp-content/themes/communitas-2018/js/mc-validate.js' ) ); ?>'></script><script type='text/javascript'>(function($) {window.fnames
          = new Array(); window.ftypes = new
          Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='BIRTHDAY';ftypes[3]='birthday';}(jQuery));var
          $mcj = jQuery.noConflict(true);</script>
          <!--End mc_embed_signup-->
        </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
