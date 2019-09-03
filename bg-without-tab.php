<?php
/**
 * Template Name: BG Without Tab
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wirix
 */

get_header('custom');
?>

<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
<section class="slider-area tab-page"> 
    <div class="container-fluid ">
        <div class="row">
              <div class="col-md-12 p-l-r-0">
			  <div id="demo" class="carousel slide" data-ride="carousel">
						  <ul class="carousel-indicators">
							<li data-target="#demo" data-slide-to="0" class="active"></li>
						  </ul>
						  <div class="carousel-inner">
							 <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

						echo '<div class="carousel-item active" style="background: url('. $url.')">'?>
				
							  <div class="carousel-caption">
                  <div class="caption-skew-left"></div>
								<h3>DE RIJSCHOOL <br/>
                  IN LIMBURG
                  </h3>		
                  <div class="caption-skew-right"></div>
							  </div>   
							</div>
						  </div>
  
						</div>
              </div>
        </div>
      </div>
</section>

<section class="inner-page">
	<div class="container">
		<div class="row bg-without-tab">
			<div class="col-md-12">
		
							
							<?php the_content(); ?>
						<?php endwhile; ?>

					
			</div>
		</div>
	</div>
</section>
  	<?php else : ?>
							<h3><?php _e('404 Error&#58; Not Found', 'bilanti'); ?></h3>
<?php endif; ?>	
<?php
get_footer();
