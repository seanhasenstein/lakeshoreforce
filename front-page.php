<?php get_header(); ?>
<div class="page-wrapper">
  <div class="flex-container">
  <!-- <div class="row-1 row"> -->

    <div class="item-1 flex-item">

      <!-- FEATURED SLIDER -->
      <div id="featuredSlider" class="carousel slide" data-ride="carousel" data-interval="6000" data-pause="false">

        <div class="overlay">
          <h2>Welcome to Lakeshore Force</h2>
          <p>An AAU Basketball Program based in Southeastern Wisconsin.</p>
          <!-- <a href=""><h3 class="mission-link">See Our Mission</h3></a> -->
          <!-- <a href=""><h3>Contact Us</h3></a> -->
          <div class="social">
            <a href="https://www.facebook.com/LakeshoreForce.Sheboygan/?fref=ts" target="_blank" class="fb"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/lakeshore_force" target="_blank" class="tw"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/lakeshoreforce" target="_blank" class="insta"><i class="fa fa-instagram"></i></a>
          </div>
        </div>

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#featuredSlider" data-slide-to="0" class="active"></li>
          <li data-target="#featuredSlider" data-slide-to="1"></li>
          <li data-target="#featuredSlider" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

          <div class="item slide-1 active">
            <img src="<?php bloginfo('template_directory'); ?>/images/slide1.jpg" alt="Welcome to Lakeshore Force">
           <div class="carousel-caption">
           </div>
          </div>
          <div class="item">
            <img src="<?php bloginfo('template_directory'); ?>/images/slide2.jpg" alt="Welcome to Lakeshore Force">
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <img src="<?php bloginfo('template_directory'); ?>/images/slide3.jpg" alt="Welcome to Lakeshore Force">
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <img src="<?php bloginfo('template_directory'); ?>/images/slide9.jpg" alt="Welcome to Lakeshore Force">
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <img src="<?php bloginfo('template_directory'); ?>/images/slide6.jpg" alt="Welcome to Lakeshore Force">
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <img src="<?php bloginfo('template_directory'); ?>/images/slide4.jpg" alt="Welcome to Lakeshore Force">
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <img src="<?php bloginfo('template_directory'); ?>/images/slide8.jpg" alt="Welcome to Lakeshore Force">
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <img src="<?php bloginfo('template_directory'); ?>/images/slide5.jpg" alt="Welcome to Lakeshore Force">
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <img src="<?php bloginfo('template_directory'); ?>/images/slide7.jpg" alt="Welcome to Lakeshore Force">
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <img src="<?php bloginfo('template_directory'); ?>/images/slide10.jpg" alt="Welcome to Lakeshore Force">
            <div class="carousel-caption">
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#featuredSlider" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#featuredSlider" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- END FEATURED SLIDER SECTION -->

      <!-- MISSION SECTION -->
        <div class="mission">
          <h2>Our Mission</h2>
          <p>The Lakeshore Force AAU Basketball Club is for boys and girls ages 9-18 and focuses on advancing players through fundamentals, skill development, and teaching valuable life lessons while playing in competitive tournaments throughout Wisconsin and the Midwest during the months of March through July. We educate our players on teamwork, commitment, and sportsmanship while emphasizing the importance of leadership and relationship building.</p> 
          <p>Lakeshore Force provides an atmosphere where families can observe their kids growing socially, emotionally, and intellectually through competition and the game of basketball.</p>
        </div>
      <!-- END MISSION SECTION -->

    </div> <!-- END ITEM-1 -->

    <div class="item-2 flex-item">

       <!-- UPDATES SECTION -->
        <div class="headlines-section">
          <h2>News &amp; Headlines<i class="fa fa-newspaper-o"></i></h2>
          <div class="inner">

            <!-- <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> -->

            <ul>
              <?php
                foreach( ( get_the_category() ) as $category ) {
                  $the_query = new WP_Query('category_name=' . $category->category_nicename . '&showposts=6');
                  while ($the_query->have_posts()) : $the_query->the_post();
                  ?>
                        <li>
                          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                        </li>
                  <?php endwhile; ?>
                  <?php
                }
              ?>
          </ul>

           <!-- <ul>
              <a href=""><li>Filing: Vols coach scolded WR after aiding woman</li></a>
              <a href=""><li>Source: Orioles, Gallardo agree to revised deal</li></a>
              <a href=""><li>Curry ties record with 3 in 127th straight game</li></a>
              <a href=""><li>Ex-Auburn RB: Went pro because mom homeless</li></a>
              <a href=""><li>McGregor on Diaz fight: Opponent doesn't matter</li></a>
              <a href=""><li>U.K. pols urge NFL to change Washington name</li></a>
            </ul>-->
          </div>
        </div>
      <!-- END UPDATES SECTION -->

       <!-- TWITTER SECTION -->
        <div class="twitter-section">
          <h2>Follow us on <a href="https://twitter.com/lakeshore_force" target="_blank">Twitter</a><span class="scrollIcon"><i class="fa fa-angle-up"></i><i class="fa fa-angle-down"></i></span></h2>
          <div class="inner">
            <div id="tw-widget1">
            </div>
          </div>
        </div>
      <!-- END TWITTER SECTION -->
      
    </div> <!-- END ITEM-2 -->

  </div> <!-- END FLEX CONTAINER -->

  <!-- INSTAGRAM SECTIONS -->
    <div class="insta-large">
        <h2>Follow us on <a href="https://www.instagram.com/lakeshoreforce" target="_blank">Instagram</a><i class="fa fa-instagram"></i></h2>
        <div class="inner">
         <script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/193c7f591fed5315bfaee7d8394502d9.html" id="lightwidget_193c7f591f" name="lightwidget_193c7f591f"  scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
       </div>
    </div> <!-- END INSTA-LARGE -->
      <div class="insta-small">
        <h2>Follow us on <a href="https://www.instagram.com/lakeshoreforce" target="_blank">Instagram</a><i class="fa fa-instagram"></i></h2>
        <div class="inner">
          <script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/8e31b775e3815a2ba3e900c516ecfb53.html" id="lightwidget_8e31b775e3" name="lightwidget_8e31b775e3"  scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
        </div>
    </div> <!-- END INSTA-SMALL -->
  <!-- END INSTAGRAM SECTIONS -->
</div>
<?php get_footer (); ?>