<?php 
/* 
Template Name: Portfolio 
*/ 
?>

   <?php get_header(); ?>

   <!-- Page Title
   ================================================== -->
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1>Our Amazing Works<span>.</span></h1>

            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
            enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
         </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row portfolio">

         <section class="entry cf">

            <div id="secondary"  class="four columns entry-details">

               <h1>Our Portfolio.</h1>

               <p class="lead">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
               nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh.</p>

               <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
               nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
               cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a
               ornare odio.</p>

            </div> <!-- Secondary End-->

            <div id="primary" class="eight columns portfolio-list">
               <div id="portfolio-wrapper" class="bgrid-halves cf">

                  <?php
                     $args = array(
                        'numberposts'      => 4,
                        'category'         => 0,
                        'orderby'          => 'date',
                        'post_type'        => 'portfolio',
                        'suppress_filters' => true,
                     );
                  
                     $posts = get_posts($args);
                  
                     foreach($posts as $post){setup_postdata($post);
                  ?>
                           
                  <div class="columns portfolio-item">
                     <div class="item-wrap">
                           <a href="<?php the_permalink(); ?>">
                           <?php the_post_thumbnail(); ?>
                           <div class="overlay"></div>
                           <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
                           <div class="portfolio-item-meta">
                              <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                           <p><?php the_excerpt(); ?></p>
                           </div>
                     </div>
                  </div>

                  <?php
                     }
                     wp_reset_postdata();
                  ?>

               </div>
               <!-- <div id="portfolio-wrapper" class="bgrid-halves cf"> -->

          		   <!-- <div class="columns portfolio-item first">
                     <div class="item-wrap">
          				   <a href="portfolio.html">
                           <img alt="" src="images/portfolio/geometrics.jpg">
                           <div class="overlay"></div>
                           <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
          					<div class="portfolio-item-meta">
          					   <h5><a href="portfolio.html">Geometrics</a></h5>
                           <p>Illustrration</p>
          					</div>
                     </div>
          			</div> -->

                  <!-- <div class="columns portfolio-item">
                     <div class="item-wrap">
          				   <a href="portfolio.html">
                           <img alt="" src="images/portfolio/console.jpg">
                           <div class="overlay"></div>
                           <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
          					<div class="portfolio-item-meta">
          					   <h5><a href="portfolio.html">Console</a></h5>
                           <p>Web Development</p>
          					</div>
                     </div>
          			</div>

                  <div class="columns portfolio-item first">
                     <div class="item-wrap">
          				   <a href="portfolio.html">
                           <img alt="" src="images/portfolio/camera-man.jpg">
                           <div class="overlay"></div>
                           <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
          					<div class="portfolio-item-meta">
          					   <h5><a href="portfolio.html">Camera Man</a></h5>
                           <p>Photography</p>
          					</div>
                     </div>
          			</div>

                  <div class="columns portfolio-item">
                     <div class="item-wrap">
          				   <a href="portfolio.html">
                           <img alt="" src="images/portfolio/into-the-light.jpg">
                           <div class="overlay"></div>
                           <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
          					<div class="portfolio-item-meta">
          					   <h5><a href="portfolio.html">Into The Light</a></h5>
                           <p>Photography</p>
          					</div>
                     </div>
          			</div>

                  <div class="columns portfolio-item first">
                     <div class="item-wrap">
          				   <a href="portfolio.html">
                           <img alt="" src="images/portfolio/farmerboy.jpg">
                           <div class="overlay"></div>
                           <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
          					<div class="portfolio-item-meta">
          					   <h5><a href="portfolio.html">Farmer Boy</a></h5>
                           <p>Branding</p>
          					</div>
                     </div>
          			</div>

                  <div class="columns portfolio-item">
                     <div class="item-wrap">
          				   <a href="portfolio.html">
                           <img alt="" src="images/portfolio/coffee-cup.jpg">
                           <div class="overlay"></div>
                           <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
          					<div class="portfolio-item-meta">
          					   <h5><a href="portfolio.html">Coffee Cup</a></h5>
                           <p>Web Design</p>
          					</div>
                     </div>
          			</div> -->

               <!-- </div> -->

            </div> <!-- primary end-->

         </section> <!-- end section -->

      </div> <!-- #page-content end-->

   </div> <!-- content End-->

   <!-- Tweets Section
   ================================================== -->
   <section id="tweets">

      <div class="row">

         <div class="tweeter-icon align-center">
            <i class="fa fa-twitter"></i>
         </div>

         <ul id="twitter" class="align-center">
            <li>
               <span>
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
               <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">2 Days Ago</a></b>
            </li>
            <!--
            <li>
               <span>
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
               <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">3 Days Ago</a></b>
            </li>
            -->
         </ul>

         <p class="align-center"><a href="#" class="button">Follow us</a></p>

      </div>

   </section> <!-- Tweet Section End-->

   <!-- footer
   ================================================== -->
   
   <?php get_footer(); ?>