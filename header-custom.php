<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wirix
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<section class="logo-area"> 
  <div class="container ">
    <div class="row">
          <div class="col-md-12">
              <div class="logo-img">
              <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'logo_uploader') ) : ?>
		        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		          	    <img src="<?php get_option_tree( 'logo_uploader', '', 'true' ); ?>"  class="img-fluid" alt="Wirix logo"/>
		          	</a>
					<?php else : ?>
		         <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						 <img src="<?php echo get_template_directory_uri();?>/assets/img/Wirix_wijst_logo.jpg" class="img-fluid" alt="wirix logo"/> 
						</a> 
					<?php endif;  endif; ?> 
              </div>
          </div>
    </div>
  </div>
</section>
<section class="menu-area"> 
    <div class="container-fluid ">
        <div class="row">
              <div class="col-md-12 p-l-r-0">
                  <nav class="navbar navbar-expand-lg navbar-light float-right-min p-l-r-0">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                      <?php   wp_nav_menu( array(
                            'theme_location'  => 'main-menu',
                            'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
                            'menu_class'      => 'navbar-nav float-right-min',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                          ) );?>
                        <div class="form-inline p-r-0">
                          <a class="btn btn-outline-success" href="http://dev.rivr.be/wirix-wp/inschrijven/" >INSCHRIJVEN</a>
                        </div>
                      </div>
                    </nav>
              </div>
        </div>
      </div>
</section>

