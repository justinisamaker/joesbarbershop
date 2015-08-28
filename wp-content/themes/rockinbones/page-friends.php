<?php
/*
  Template Name: Friends
*/
?>

<?php get_header(); ?>

  <div id="main-container" class="container-fluid">
    <main role="main" class="main-content">

      <h1 class="page-title">Friends</h1>

      <?php
        $args = array(
          'post_type' => 'friend'
        );
        $query = new WP_Query( $args );
      ?>

      <div id="friends-container">
        <?php
          if( $query->have_posts() ): while( $query->have_posts() ): $query->the_post();
        ?>
          <div class="friend-listing">

            <div class="friend-photo">
              <?php if( get_field('friend_link') ): ?>
                <?php
                  if ( has_post_thumbnail() ): ?>
                    <a href="<?php the_field('friend_link'); ?>" target="_blank">
                      <?php the_post_thumbnail(); ?>
                    </a>
                  <?php endif; ?>
              <?php endif; ?>
            </div>

            <div class="friend-info">
              <h2><?php the_title(); ?></h2>

              <?php if( get_field('friend_description') ): ?>
                <p class="event-date">
                  <?php the_field('friend_description'); ?>
                </p>
              <?php endif; ?>

              <?php if( get_field('friend_link') ): ?>
                <a href="<?php the_field('friend_link'); ?>" target="_blank" class="friend-link">Visit <?php the_title(); ?>'s website »</a>
              <?php endif; ?>
            </div>

          </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div> <!-- END FRIENDS CONTAINER -->

    </main>
  </div> <!-- END MAIN CONTAINER -->

<?php get_footer(); ?>