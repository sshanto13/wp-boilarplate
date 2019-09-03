<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wirix
 */

?>

<section class="footer-area"> 
    <div class="container ">
        <div class="row">
              <div class="col-md-3 footer-border-right">
                <h2>NIEUWSBRIEF</h2>
                  <div class="span12">
                      <div class="thumbnail center well well-small text-center">
<?php echo do_shortcode('[mc4wp_form id="169"]');?>                  
                      
                          <!--  <form action="" method="post">
                                  <div class="input">
                                      <input type="text" id="" name="" placeholder="E-mail">
                                  </div>
                                  <input type="submit" value="Verzenden" class="btn btn-large" />
                            </form>-->
                      </div>    
                  </div>
                  <?php   wp_nav_menu( array(
	'theme_location'  => 'footer-menu',
	'depth'	          => 1, // 1 = no dropdowns, 2 = with dropdowns.
	'menu_class'      => 'subscribe-menu',
	'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
	'walker'          => new WP_Bootstrap_Navwalker(),
) );?>
             
             <!--     <ul class="subscribe-menu">
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Regelment</a></li>
                    <li><a href="#">Evaluatie</a></li>
                  </ul>
                  -->
                  <p class="copy-right">Copyright@ 2019 : Rijschool Wirix</p>
              </div>
               <?php dynamic_sidebar('footer_locations'); ?>
                 <?php dynamic_sidebar('footer_contact'); ?>	
                    <!--  <div class="col-md-3 footer-border-right">
                  
        
                <h2>LOCATIES</h2>
                <ul class="location-menu">
                  <li><a>Lanaken</a></li>
                  <li><a>Bilzen</a></li>
                  <li><a>Hasselt</a></li>
                  <li><a>Breee</a></li>
                  <li><a>Oudsbergen</a></li>
                </ul>
              </div>-->
       
              
              
                       
                <!--
                <div class="col-md-3 footer-border-right">
               <div class="footer-contact">
                  <h3>Web en mail</h3>
                  <p>www.rijschoolwirix.be <br/>
                  rijschool_wirix@msn.com
                  </p>
                  <h3 class="m-t-40">Maatschappelijke Zetel</h3>
                  <p>Hoekstraat 20 <br/>
                  B-3670 Oudsbergen</p>
               </div>
               
                  </div>-->

           
              <div class="col-md-3">
                <div class="federdirev">
                <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'feder_drive') ) : ?>    
						<a href="#"><img src="<?php get_option_tree( 'feder_drive', '', 'true' ); ?>" alt=""/></a>
					<?php else : ?>
						
						<a href="<?php bloginfo('home'); ?>" >
						<img src="<?php echo get_template_directory_uri();?>/assets/img/federdrive-rijschool-wirix.jpg" alt="">
						</a> 
					<?php endif;  endif; ?> 

                  
                </div>
                <ul class="social-link">
                   <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/twitter-logo.png"></a></li>
                   <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/instagram-logo.png"></a></li>
                   <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/facebook-logo.png"></a></li>
                </ul>
                <br/>
                <p class="erk">Erk. Nummer Rijschool</p>
              </div>
        </div>
      </div>
</section>
<div class="design-credential">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="designed-by">
            <?php get_option_tree( 'copy_right', '', 'true' ); ?>
							  <a href="https://www.rivr.be/"><img src="<?php get_option_tree( 'copy_right_logo', '', 'true' ); ?>"></a> 
            </p></div>		
          </div>
      </div> 
  </div>


</div>

<?php wp_footer(); ?>

</body>
</html>
