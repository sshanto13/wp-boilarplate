<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wirix
 */

get_header();
?>
<section class="inner-page-without-tab">
	<div class="container">
		<div class="row page-bg-color">
			<div class="col-md-12">
			<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
<?php the_post_thumbnail('post-thumbnail', ['class' => 'blog-thumnail', 'title' => 'Feature image']); ?>
							<h2 class="blog-inner-title"><?php the_title(); ?></h2>
							<div class="entry-meta">
			<?php echo get_avatar( get_the_author_meta( 'ID' ) , 32 ); ?>
 <span style="margin: 0px 10px; color:#777; blue; font-weight: 700">By: <?php the_author();?> </span> 
 <!--<span style="color:#777; blue; font-weight: 700;"> Category: </span><?php echo  get_the_category( $id )[0]->name;?> -->    
<span style="color: #777; font-weight: 700; margin-left: 10px;">On:</span> <?php echo the_date(); ?> 
 </p>


		</div>
							<?php the_content(); ?>
						<?php endwhile; ?>

						<?php else : ?>
							<h3><?php _e('404 Error&#58; Not Found', 'bilanti'); ?></h3>
						<?php endif; ?>	
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
