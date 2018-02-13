<?php
/**
 * @package Conica
 */
global $woocommerce; ?>
<header id="masthead" class="site-header site-header-three <?php echo ( get_theme_mod( 'conica-set-header-nav-center-align' ) ) ? sanitize_html_class( 'site-header-nav-center' ) : ''; ?> <?php echo ( get_theme_mod( 'conica-set-header-align-right' ) ) ? sanitize_html_class( 'site-header-align-right' ) : ''; ?> <?php echo ( get_theme_mod( 'conica-set-header-remove-topline' ) ) ? sanitize_html_class( 'no-border' ) : ''; ?> <?php echo ( get_theme_mod( 'conica-header-sticky' ) ) ? sanitize_html_class( 'site-sticky-header' ) : ''; ?> <?php echo ( get_theme_mod( 'conica-set-site-layout' ) == 'conica-site-boxed' ) ? sanitize_html_class( 'header-boxed-in' ) : ''; ?>">
    
    <?php if ( ! get_theme_mod( 'conica-set-header-remove-topbar' ) ) : ?>
        <div class="header-top-bar <?php echo ( get_theme_mod( 'conica-set-topbar-switch' ) ) ? sanitize_html_class( 'header-top-bar-switch' ) : ''; ?>">
            
            <div class="site-container">
                <div class="header-top-bar-left">
                    
                    <?php wp_nav_menu( array( 'theme_location' => 'conica-header-menu', 'fallback_cb' => false, 'depth'  => 1 ) ); ?>
                    
                    <?php if ( get_theme_mod( 'conica-set-text-header-custom' ) ) : ?>
                        <span class="header-top-bar-right-no">
                            <?php echo ( get_theme_mod( 'conica-set-text-header-custom-icon' ) ) ? '<i class="fa ' . sanitize_html_class( get_theme_mod( 'conica-set-text-header-custom-icon' ) ) . '"></i> ' : ''; ?>
                            <?php echo wp_kses_post( get_theme_mod( 'conica-set-text-header-custom' ) ); ?>
                        </span>
                    <?php endif; ?>
                    
                </div>
                <div class="header-top-bar-right">
                    
                    <?php if ( get_theme_mod( 'conica-set-text-header-add' ) ) : ?>
                        <span class="header-top-bar-right-ad"><i class="fa fa-map-marker"></i> <?php echo wp_kses_post( get_theme_mod( 'conica-set-text-header-add' ) ); ?></span>
                    <?php endif; ?>
                    
                    <?php if ( get_theme_mod( 'conica-set-text-header-phone' ) ) : ?>
                        <span class="header-top-bar-right-no"><i class="fa fa-phone"></i> <?php echo wp_kses_post( get_theme_mod( 'conica-set-text-header-phone' ) ); ?></span>
                    <?php endif; ?>
                    
                    <?php get_template_part( '/templates/social-links' ); ?>
                    
                    <?php if ( get_theme_mod( 'conica-set-show-search' ) ) : ?>
                        <div class="search-button">
                            <i class="fa fa-search"></i>
                        </div>
                    <?php endif; ?>
                    
                </div>
                <div class="clearboth"></div>
            </div>
            
        </div>
    <?php endif; ?>
    
    <div class="header-bar">
        
        <div class="site-container">
            
            <div class="header-bar-inner">
                
                <div class="site-branding">
                    <?php if ( has_custom_logo() ) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                    <?php endif; ?>
                </div>
                
                <div class="clearboth"></div>
            </div>
            
            <?php if ( get_theme_mod( 'conica-set-show-search' ) ) : ?>
                <div class="search-block">
                    <?php get_search_form(); ?>
                </div>
            <?php endif; ?>
            
        </div>
        
    </div>
    
    <?php if ( get_theme_mod( 'conica-plugin-mega-menu' ) ) : ?>
        <nav class="main-navigation-mm">
            <div class="site-container">
                <?php wp_nav_menu( array( 'theme_location' => 'conica-main-menu' ) ); ?>
            </div>
        </nav><!-- #site-navigation -->
    <?php else : ?>
        
        <nav id="site-navigation" class="main-navigation <?php echo ( get_theme_mod( 'conica-set-sticky-header' ) ) ? sanitize_html_class( 'stick-header' ) : ''; ?> <?php echo ( get_theme_mod( 'conica-set-navigation-style' ) ) ? sanitize_html_class( get_theme_mod( 'conica-set-navigation-style' ) ) : sanitize_html_class( 'conica-navigation-style-blocks' ); ?> conica-navigation-animation-none" role="navigation">
            
            <div class="site-container">
                
                <span class="header-menu-button"><i class="fa fa-bars"></i><span><?php echo esc_attr( get_theme_mod( 'conica-set-text-mobile-nav', __( 'MENU', 'conica' ) ) ); ?></span></span>
                <div id="main-menu" class="main-menu-container">
                    <span class="main-menu-close"><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></span>
                    <?php wp_nav_menu( array( 'theme_location' => 'conica-main-menu' ) ); ?>
                    
                    <?php if ( conica_is_woocommerce_activated() ) : ?>
                        <?php if ( !get_theme_mod( 'conica-set-header-cart' ) ) : ?>
                            <div class="header-cart">
                                
                                <a class="header-cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart', 'conica' ); ?>">
                                    <span class="header-cart-amount">
                                        <?php echo sprintf( _n( '(%d)', '(%d)', $woocommerce->cart->cart_contents_count, 'conica' ), $woocommerce->cart->cart_contents_count ); ?> <?php echo $woocommerce->cart->get_cart_total(); ?>
                                    </span>
                                    <span class="header-cart-checkout <?php echo ( $woocommerce->cart->cart_contents_count > 0 ) ? sanitize_html_class( 'cart-has-items' ) : ''; ?>">
                                        <i class="fa <?php echo ( get_theme_mod( 'conica-cart-icon' ) ) ? sanitize_html_class( get_theme_mod( 'conica-cart-icon' ) ) : sanitize_html_class( 'fa-shopping-cart' ); ?>"></i>
                                    </span>
                                </a>
                                
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    
                    <div class="clearboth"></div>
                </div>
                
            </div>
            
        </nav> <!-- #site-navigation -->
        
    <?php endif; ?>
    
    <div class="clearboth"></div>
</header><!-- #masthead -->
