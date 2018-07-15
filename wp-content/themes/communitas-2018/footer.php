<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Communitas_2018
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<!-- <div class="site-info"> -->
			<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'communitas-2018' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'communitas-2018' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'communitas-2018' ), 'communitas-2018', '<a href="http://superko.org">Lucas Huang</a>' );
				?> -->
		<!-- </div> -->
    <!-- .site-info -->

    <div class="responsive half site-branding">
      <img class="logo" src="<?php echo esc_url( home_url( '/wp-content/themes/communitas-2018/static/logo_inverted.jpg' ) ); ?>" alt="Communitas logo" />
      <div class="address">
        3974 Notre Dame Street West, Suite B<br/>
        Montreal, QC H4C 1R1<br/>
        +1 514 244 6147<br/>
        info@communitasmontreal.org
      </div>
    </div><div class="responsive half contacts-container">
      <a class="responsive" href="mailto:info@communitasmontreal.org">
        <img class="icon" src="<?php echo esc_url( home_url( '/wp-content/themes/communitas-2018/static/icon-mail.png' ) ); ?>" alt="Email"/>
      </a><a class="responsive" href="https://twitter.com/Communitas_MTL">
        <img class="icon" src="<?php echo esc_url( home_url( '/wp-content/themes/communitas-2018/static/icon-twitter.png' ) ); ?>" alt="Twitter"/>
      </a><a class="responsive" href="https://www.facebook.com/communitasmontreal/">
        <img class="icon" src="<?php echo esc_url( home_url( '/wp-content/themes/communitas-2018/static/icon-facebook.png' ) ); ?>" alt="Facebook"/>
      </a><a class="button-square inverted" href="http://www.canadahelps.org/CharityProfilePage.aspx?CharityID=d10867">
        Donate
      </a>
    </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
