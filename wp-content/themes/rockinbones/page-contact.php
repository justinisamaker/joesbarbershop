<?php
/*
  Template Name: Contact
*/
?>

<?php get_header(); ?>

  <div id="main-container" class="container-fluid">
    <main role="main" class="main-content">

      <h1 class="page-title">Contact</h1>

      <section id="contact-info-container">
        <div id="contact-info">
          <ul>
            <li><a href="https://www.google.com/maps/place/Joe's+Barbershop+Chicago/@41.92464,-87.694206,15z/data=!4m2!3m1!1s0x0:0x189bb8818adecec3?sa=X&ved=0CHwQ_BIwCmoVChMIhNWM2sbRxwIVyaKACh3Q0Qq1" target="_blank">2641 W Fullerton, Chicago, IL 60647</a></li>
            <li><a href="mailto:shopinfo@joesbarbershopchicago.com">shopinfo@joesbarbershopchicago.com</a></li>
            <li><a href="tel:7732523980">773-252-3980</a></li>
          </ul>
        </div>

        <div id="contact-heads-up">
          <h5>First-come, first-served. Walk-in only.</h5>
          <h6>Last customer seated a half-hour before close.</h6>
        </div>

        <div id="contact-hours">
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
      </section>

      <div id="contact-form">
        <?php echo do_shortcode("[contact-form subject='[Joe%26#039;s Barbershop Chicago'][contact-field label='Name' type='name' required='1'/][contact-field label='Email' type='email' required='1'/][contact-field label='Comment' type='textarea' required='1'/][/contact-form]"); ?>
      </div> <!-- END CONTACT CONTAINER -->

    </main>
  </div> <!-- END MAIN CONTAINER -->

<?php get_footer(); ?>