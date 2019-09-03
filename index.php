<?php
/**
 * The main template file
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
							  <img src="<?php echo get_template_directory_uri();?>/assets/img/slider.jpg" alt="Los Angeles" width="100%" height="500">
							  <div class="carousel-caption">
                  <div class="caption-skew-left"></div>
								<h3>DE RIJSCHOOL <br/>
                  IN LIMBURG
                  </h3>		
                  <div class="caption-skew-right"></div>
							  </div>   
							</div>
						  </div>
              <!--
						  <a class="carousel-control-prev" href="#demo" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						  </a>
						  <a class="carousel-control-next" href="#demo" data-slide="next">
							<span class="carousel-control-next-icon"></span>
						  </a>-->
						</div>
              </div>
        </div>
      </div>
</section>
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
                          <p class="card-text">Lorem ipsum dolor sit amet, adipiscing elit. sed do eiusmod tempor incididunt</p>
                        
                        </div>
                         <button class="btn btn-service-icon">INSCHRIJVEN</button>
                      </div>
                      <div class="card">
                        <div class="service-icon-area">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/B.png" alt="Card image cap">
                      </div>
                        <div class="card-body">
                          <h5 class="card-title">B</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, adipiscing elit. sed do eiusmod tempor incididunt</p>
                         
                        </div>
                          <button class="btn btn-service-icon">INSCHRIJVEN</button>
                      </div>
                      <div class="card">
                        <div class="service-icon-area">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/BE.png" alt="Card image cap">
                      </div>
                        <div class="card-body">
                          <h5 class="card-title">BE</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, adipiscing elit. sed do eiusmod tempor incididunt.</p>
                        </div>
                          <button class="btn btn-service-icon">INSCHRIJVEN</button>
                      </div>
                      <div class="card">
                        <div class="service-icon-area">
                          <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/C.png" alt="Card image cap">
                        </div>
                          <div class="card-body">
                            <h5 class="card-title">C</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, adipiscing elit. sed do eiusmod tempor incididunt.</p>
                          </div>
                            <button class="btn btn-service-icon">INSCHRIJVEN</button>
                        </div>
                      <div class="card">
                        <div class="service-icon-area">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/CE.png" alt="Card image cap">
                          </div>
                            <div class="card-body">
                              <h5 class="card-title">CE</h5>
                              <p class="card-text">Lorem ipsum dolor sit amet, adipiscing elit. sed do eiusmod tempor incididunt.</p>
                            </div>
                              <button class="btn btn-service-icon">INSCHRIJVEN</button>
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
                  <div class="feauted-img-title-bg">
                      <h2>
                       <span class="border-skew-left"></span> 
                       VORMING 
                       <span class="border-skew-right"></span>
                     </h2>
                    </div>
                    <div class="VORMING">
                      <div class="left-skew"> </div>
                    </div>
                     
              </div>
              <div class="col-md-6 p-l-0-min">
                  <div class="feauted-img-title-bg">
                      <h2>
                           <span class="border-skew-left"></span> 
                           TKM
                           <span class="border-skew-right"></span>
                      </h2>
             </div>
                    <div class="TKM"></div>
                 
                  
                 
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
              <div class="col-md-6 m-b-40">
                   <div class="blog-img">
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/blog.jpg" class="img-fluid">
                      <div class="blog-skew"></div>
                   </div>
              </div>
              <div class="col-md-6">
                     <div class="blog-des">
                       <h2>Laatste nieuws</h2>
                       <p>Lorem ipsum dolor sit amet, adipiscing elit. sed do eiusmod tempor incididuntLorem ipsum dolor sit amet, adipiscing elit. sed do eiusmod tempor incididuntLorem ipsum dolor sit amet, adipiscing elit. sed do eiusmod tempor incididunt</p>
                       <button class="btn btn-sm read-more-btn">MEER LEZEN</button>
                     </div>
              </div>
        </div>
      </div>
</section>
<?php
get_footer();
