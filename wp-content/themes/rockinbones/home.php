<!-- HOME TEMPLATE -->

<?php get_header(); ?>

    <main role="main" class="main-content">

      <section id="hero">
        <div id="intro-copy">
          <h2>ESTABLISHED 1968</h2>
          <p>
            Joe’s Barbershop has been serving Chicago’s Logan Square neighborhood with classic cuts, hot lather straight razor shaves, and great conversation since 1968. We have eight Illinois-licensed Barbers, not cosmetologists acting as barbers, on-call six days a week to get you looking and feeling your best. If you are looking for an simple and authentic traditional barbershop, look no further.
          </p>
        </div>
      </section>

      <section id="rundown" class="home-mid-section">
        <h2>First-come, first-served. Walk-in only. Last customer seated a half-hour before close.</h2>
      </section>

      <section id="shop-info" class="home-mid-section">
        <div id="prices" class="info-section">
          <h3>Prices</h3>
          <div class="underline"></div>
          <ul id="shop-prices">
            <li><span>Haircut:</span> $25</li>
            <li><span>Shave:</span> $30</li>
            <li><span>Sunday Services:</span> $30</li>
            <li><span>Any service after posted shop hours:</span> $50</li>
          </ul>
        </div>

        <div id="hours" class="info-section">
          <h3>Hours</h3>
          <div class="underline"></div>
          <ul id="shop-hours">
            <li><span>Monday:</span> Shop Closed</li>
            <li><span>Tuesday:</span> 9:00 AM - 5:30 PM</li>
            <li><span>Wednesday:</span> 9:00 AM - 5:30 PM</li>
            <li><span>Thursday:</span> 9:00 AM - 7:30 PM</li>
            <li><span>Friday:</span> 9:00 AM - 5:30 PM</li>
            <li><span>Saturday:</span> 9:00 AM - 3:00 PM</li>
            <li><span>Sunday:</span> 10:00 AM - 2:00 PM</li>
          </ul>
        </div>

        <!-- Contact
        773-252-3980
        ShopInfo@joesBarberShopChicago.com

        Address
        2641 W Fullerton Avenue
        Chicago, IL 60647

        Hours
        Monday: Shop Closed
        Tuesday: 9:00am - 5:30pm
        Wednesday: 9:00am - 5:30pm
        Thursday: 9:00am - 7:30pm
        Friday: 9:00am - 5:30pm
        Saturday: 9:00am - 3:00pm
        Sunday: 10:00am - 2:00pm -->
      </section>

      <section id="events">
        <div id="events-container">
          <?php
            $args = array(
              'post_type' => 'event'
            );
            $query = new WP_Query( $args );
          ?>

          <?php
            if( $query->have_posts() ): while( $query->have_posts() ): $query->the_post();
          ?>
            <div class="event-info">
              <h3><?php the_title(); ?></h3>
              <?php if( get_field('event_date') ): ?>
                <h5 class="event-date">
                  <?php the_field('event_date'); ?>
                </h5>
              <?php endif; ?>

              <?php if( get_field('event_time') ): ?>
                <h5 class="event-time">
                  <?php the_field('event_time'); ?>
                </h5>
              <?php endif; ?>

              <?php if( get_field('event_description') ): ?>
                <p>
                  <?php the_field('event_description'); ?>
                </p>
              <?php endif; ?>

              <?php if( get_field('event_link') ): ?>
                <a href="<?php the_field('event_link'); ?>" target="_blank">
                  <?php the_field('event_link_title'); ?>
                </a>
              <?php endif; ?>
            </div> <!-- END EVENT INFO -->
            <div class="event-photo">
              <?php
              if ( has_post_thumbnail() ) {
                the_post_thumbnail();
              }
              ?>
            </div>
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
      </section>

      <section id="location">
        <div id="location-container">
          <a href="https://www.google.com/maps/place/Joe's+Barbershop+Chicago/@41.92464,-87.694206,17z/data=!3m1!4b1!4m2!3m1!1s0x880fd29cebe3d04f:0x189bb8818adecec3" target="_blank">2641 W Fullerton, Chicago, IL 60647</a>

          <a href="mailto:shopinfo@joesbarbershopchicago.com" target="_blank">shopinfo@joesbarbershopchicago.com</a>

          <a href="tel:7732523980" target="_blank">773-252-3980</a>
        </div>
      </section>

      <section id="home-social">
        <div id="home-social-container">
          <a href="http://www.facebook.com/pages/Joes-Barber-Shop-Chicago/178010742775" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/facebook.png" width="50" height="50" border="0" alt="Joe's Barbershop Chicago on Facebook" />
          </a>

          <a href="http://instagram.com/joesbarbershopchicago1" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/instagram.png" width="50" height="50" border="0" alt="Joe's Barbershop Chicago on Instagram" />
          </a>

          <a href="http://twitter.com/JoesBarberShopp" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/twitter.png" width="50" height="50" border="0" alt="Joe's Barbershop Chicago on Twitter" />
          </a>

          <a href="http://www.yelp.com/biz/joes-barbershop-chicago-2" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/yelp.png" width="50" height="50" border="0" alt="Joe's Barbershop Chicago on Yelp" />
          </a>

          <a href="http://joesbarbershopchicago.tumblr.com/" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/tumblr.png" width="50" height="50" border="0" alt="Joe's Barbershop Chicago on Tumblr" />
          </a>

          <a href="https://foursquare.com/v/joes-barbershop-chicago/4b8d2ca3f964a5208feb32e3?ref=atw" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/foursquare.png" width="50" height="50" border="0" alt="Joe's Barbershop Chicago on Foursquare" />
          </a>

          <a href="http://www.youtube.com/user/JoesBarbershopChi1" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/youtube.png" width="50" height="50" border="0" alt="Joe's Barbershop Chicago on YouTube" />
          </a>
        </div>
      </section> <!-- END SOCIAL -->

      <!--
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>

      <?php endwhile; else : ?>

        <h2>No posts found.</h2>

      <?php endif; ?>
      -->

    </main>

<?php get_footer(); ?>