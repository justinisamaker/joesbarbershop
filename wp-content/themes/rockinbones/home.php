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
        <ul id="shop-prices">
          <li><span>Haircut:</span> $25</li>
          <li><span>Shave:</span> $30</li>
          <li><span>Sunday Services:</span> $30</li>
          <li><span>Any service after posted shop hours:</span> $50</li>
        </ul>

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
            <div id="event-info">
              <h3><?php the_title(); ?></h3>
              <?php if( get_field('event_date') ): ?>
                <h5>
                  <?php the_field('event_date'); ?>
                </h5>
              <?php endif; ?>

              <?php if( get_field('event_time') ): ?>
                <h6>
                  <?php the_field('event_time'); ?>
                </h6>
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
            <div id="event-photo">
              <?php 
              if ( has_post_thumbnail() ) {
                the_post_thumbnail();
              } 
              ?>
            </div>
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
      </section>

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