<?php
/**
 * Template Name: Blog Page
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

get_header();
?>
<section class="slider-area"> 
    <div class="container-fluid ">
        <div class="row">
              <div class="col-md-12 p-l-r-0">
			  <div id="demo" class="carousel slide" data-ride="carousel">
						  <ul class="carousel-indicators">
							<li data-target="#demo" data-slide-to="0" class="active"></li>
						  </ul>
						  <div class="carousel-inner">
							<div class="carousel-item active">
				<img src="http://dev.rivr.be/wirix-wp/wp-content/uploads/2019/07/h9-1.jpg" class="img-fluid">
							  <div class="carousel-caption">
                  <div class="caption-skew-left"></div>
								<h3>Wirix <br/>Latest Blog 
                
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
		<div class="row page-bg-color blog-page">
		
		<?php
					$argsPoems = array( 
					'category_name' => 'blog', 
					'posts_per_page' => -1 
					 );
					$myposts = get_posts( $argsPoems );
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<div class="col-md-4">
				<article id="post-<?php the_ID(); ?>" <?php post_class();?>>
					<div class="post-image-content">
						<figure class="post-featured-image home-page">
							<?php the_post_thumbnail('img-fluid'); ?>
						</figure>
					</div><!-- end.post-image-content -->
	            <div class="blog-content">
					<h2 class="page-title"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 5 ); ?></a></h2>
					<div class="entry-content">
					  <?php    echo wp_trim_words( get_the_content(), 20, '...' );?>
					</div> <!-- entry-content clearfix-->
					<a href="<?php the_permalink(); ?>" class="btn btn-sm read-more-blog-page">MEER LEZEN</a>
				</div>
			    </article>
			</div>
			<?php endforeach; 
			wp_reset_postdata();?>
		</div>
	</div>
</section>

<?php
get_footer();
