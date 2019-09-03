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
 * @package wirix
 */

get_header();
?>
<section class="inner-page-without-tab">
	<div class="container">
		<div class="row page-bg-color">
			<div class="col-md-12">
			<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
							
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
