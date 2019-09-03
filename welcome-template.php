<?php
/**
 * Template Name: Welcome Template
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wirix
 */

get_header('home');
?>

<section class="service-area"> 
    <div class="container ">
        <div class="row">
              <div class="col-md-12">
                  <div class="card-deck">
                      <div class="card">
                       <div class="service-icon-area">
                         <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/A-AM.png" alt="Card image cap">
                       </div>
                        <div class="card-body">
                          <h5 class="card-title">A/AM</h5>
						  <a href="<?php echo get_home_url(); ?>/rijbewijs-am-bromfiets/" class="btn-law">  
							  <div class="law-name">
								 <h4>Rijbewijs AM</h4>
								 <p>bromfiets</p>
							  </div>
						 </a>
					    
						<a href="<?php echo get_home_url(); ?>/rijbewijs-a1-a2-a-motor/" class="btn-law">   
						  <div class="law-name">
							 <h4>Rijbewijs A1/A2/A</h4>
						     <p>motorfiets</p>
						  </div>					
                        </div>
						</a>
                         <a href="http://dev.rivr.be/wirix-wp/inschrijven/" class="btn btn-service-icon">INSCHRIJVEN</a>
                      </div>
                      <div class="card">
                        <div class="service-icon-area">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/B.png" alt="Card image cap">
                      </div>
                        <div class="card-body">
                          <h5 class="card-title">B</h5>  
                                <a href="<?php echo get_home_url(); ?>/rijbewijs-b-auto/" class="btn-law">   						  
									  <div class="law-name">
										 <h4>Rijbewijs B</h4>
										 <p>auto</p>
									  </div>	
								</a>	  
							     
								      <a href="<?php echo get_home_url(); ?>/wirix-wp/tkm/" class="btn-law">   
											<div class="law-name">
										<h4>Terugkommoment</h4>
										<p>beginnende bestuurders </p>
										</div>
									  </a>   
                        </div>
						
                            <a href="http://dev.rivr.be/wirix-wp/inschrijven/" class="btn btn-service-icon">INSCHRIJVEN</a>
                      </div>
                      <div class="card">
                        <div class="service-icon-area">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/BE.png" alt="Card image cap">
                      </div>
                        <div class="card-body">
                          <h5 class="card-title">BE</h5>
						       <a href="<?php echo get_home_url(); ?>/rijbewijs-be-aanhangwagen" class="btn-law">   
									<div class="law-name">
									 <h4>Rijbewijs BE</h4>
									 <p>auto met aanhangwagen </p>
								  </div>
								</a>
                        </div>
                       <a href="http://dev.rivr.be/wirix-wp/inschrijven/" class="btn btn-service-icon">INSCHRIJVEN</a>
                      </div>
                      <div class="card">
                        <div class="service-icon-area">
                          <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/C.png" alt="Card image cap">
                        </div>
                          <div class="card-body">
                            <h5 class="card-title">C</h5>
							     <a href="<?php echo get_home_url(); ?>/rijbewijs-c-vrachtwagen/" class="btn-law">   
									  <div class="law-name">
										 <h4>Rijbewijs C</h4>
										 <p>vrachtwagen</p>
									  </div>
								 </a>
                          </div>
                            <a href="http://dev.rivr.be/wirix-wp/inschrijven/" class="btn btn-service-icon">INSCHRIJVEN</a>
                        </div>
                      <div class="card">
                        <div class="service-icon-area">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/CE.png" alt="Card image cap">
                          </div>
                            <div class="card-body">
                              <h5 class="card-title">CE</h5>
							    <a href="<?php echo get_home_url(); ?>/rijbewijs-ce-vrachtwagen/" class="btn-law">   
                                  <div class="law-name">
									 <h4>Rijbewijs CE</h4>
									 <p>vrachtwagen met aanhangwagen</p>
								  </div>
								</a>
                            </div>
                               <a href="http://dev.rivr.be/wirix-wp/inschrijven/" class="btn btn-service-icon">INSCHRIJVEN</a>
                          </div>
                    </div>
                      
              </div>
        </div>
      </div>
</section>
<section class="featured-area"> 
    <div class="container ">
        <div class="row">
              <div class="col-md-6 p-r-0-min m-b-20">
                  <div class="feauted-img-title-bg" style="cursor: pointer;" onclick="window.location='<?php echo get_home_url(); ?>/vorming/';">
                      <h2>
                       <span class="border-skew-left"></span> 
                       VORMING 
                       <span class="border-skew-right"></span>
                     </h2>
                    </div>
                    <div class="VORMING" style="cursor: pointer;" onclick="window.location='<?php echo get_home_url(); ?>/vorming/';">
                      <div class="left-skew"> </div>
                    </div>
                     
              </div>
              <div class="col-md-6 p-l-0-min">
                    <div class="feauted-img-title-bg" style="cursor: pointer;" onclick="window.location='<?php echo get_home_url(); ?>/tkm/';" >
                      <h2>
                           <span class="border-skew-left"></span> 
                           TKM
                           <span class="border-skew-right"></span>
                      </h2>
                    </div>
                    <div class="TKM" style="cursor: pointer;" onclick="window.location='<?php echo get_home_url(); ?>/tkm/';"></div>
                 
                  
                 
              </div>
        </div>
      </div>
</section>
<section class="location-area"> 
    <div class="container ">
        <div class="row">
              <div class="col-md-12">
                
                <h2>
                  <span class="location-skew-left"></span> 
                    Locaties
                  <span class="location-skew-right"></span> 
                </h2>

                 <div class="card-deck">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title"><i class="fas fa-map-marker-alt"></i>Oefenterrein</h5>
                          <p class="location-text">
                            Industrieweg 52 <br/>
                            B-3620 Lanaken
                          </p>
                        </div>
                      </div>
                      <div class="card">
                           <div class="card-body">
                          <h5 class="card-title"><i class="fas fa-map-marker-alt"></i>Lanaken</h5>
                          <p class="card-text">
                             Kerkplein 28, <br/>
                              B-3620 Lanaken<br/>
                              Tel.: 089/72.22.46
                          </p>
                        </div>
                      </div>
                    <div class="card">
                          <div class="card-body">
                          <h5 class="card-title"><i class="fas fa-map-marker-alt"></i>Hasselt</h5>
                          <p class="card-text">
                            Maastrichtersteenweg 145/1<br/>
                            B-3500 Hasselt<br/>
                            Tel: 011/46.01.21
                          </p>
                        </div>
                      </div>
                  <div class="card">
                    
                           <div class="card-body">
                          <h5 class="card-title"><i class="fas fa-map-marker-alt"></i>Bilzen</h5>
                          <p class="card-text">
                             Munsterbilzenstraat 27/2<br/>
                              B-3740 Bilzen<br/>
                              Tel.: 089/72.22.46
                          </p>
                        </div>
                    
                      </div>
                    <div class="card">
                           <div class="card-body">
                          <h5 class="card-title"><i class="fas fa-map-marker-alt"></i>Bree</h5>
                          <p class="card-text">
                              Grauwe Torenwal 22<br/>
                              B-3960 Bree<br/>
                              Tel: 089/46.14.87
                        </p>
                        </div>
                      </div>
              </div>
        </div>
      </div>
</section>
<section class="blog-area"> 
    <div class="container ">
        <div class="row">

<?php query_posts('post_type=post&cat=latestnews&post_status=publish&posts_per_page=1&paged='. get_query_var('paged')); ?>
        <?php if(have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>        
        
              <div class="col-md-6 m-b-40">
                   <div class="blog-img">
                       
<?php    
the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'title' => 'Blog image']); ?>
                 
                    
                   </div>
              </div>
              <div class="col-md-6">
                     <div class="blog-des">
                       <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p>
					<?php    echo wp_trim_words( get_the_content(), 30, '...' );?>
						 </p>
                       <a href="<?php the_permalink(); ?>" class="btn btn-sm read-more-btn">MEER LEZEN</a>
                     </div>
              </div>
            

        <?php endwhile; ?>    
        <?php endif; ?>


              
        </div>
      </div>
</section>
<?php
get_footer();
