<footer id="colophon" class="site-footer site-footer-standard">

	<?php do_action ( 'avant_hook_before_footer' ); ?>
	
	<div class="site-footer-widgets">
        <div class="site-container">
            <?php if ( is_active_sidebar( 'avant-site-footer-standard' ) ) : ?>
	            <ul>
	                <?php dynamic_sidebar( 'avant-site-footer-standard' ); ?>
	            </ul>
	        <?php else : ?>
	        	<div class="site-footer-no-widgets">
                    <?php
                    if ( is_user_logged_in() ) :
                        if ( current_user_can( 'edit_theme_options' ) ) :
                            printf( __( 'Add your own <a href="%s">widgets here</a>', 'avant' ) , admin_url( 'widgets.php' ) );
                        endif;
                    endif; ?>
	        	</div>
	    	<?php endif; ?>
            <div class="clearboth"></div>
        </div>
	</div>
	
	<?php do_action ( 'avant_hook_after_footer' ); ?>
	
</footer>
<div class="site-footer-bottom-bar <?php echo ( get_theme_mod( 'avant-bottombar-switch' ) ) ? sanitize_html_class( 'site-bottombar-switch' ) : ''; ?>">
	<?php printf( __( '<div class="site-container"><div class="site-footer-bottom-bar-left">Theme: %1$s by %2$s</div><div class="site-footer-bottom-bar-right">', 'avant' ), 'Avant', '<a href="https://kairaweb.com/">Kaira</a>' ); ?>
			<?php if ( get_theme_mod( 'avant-footer-privacy-link' ) ) : ?>
        		<?php if ( function_exists( 'the_privacy_policy_link' ) ) { the_privacy_policy_link(); } ?>
        	<?php endif; ?>
            <?php wp_nav_menu( array( 'theme_location' => 'footer-bar', 'container' => false, 'fallback_cb' => false, 'depth'  => 1 ) ); ?>
    <?php get_template_part( '/templates/social-links' ); ?></div></div><div class="clearboth"></div>
</div>