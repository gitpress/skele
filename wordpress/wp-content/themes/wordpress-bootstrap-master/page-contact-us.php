<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
</div> <!-- div to kill container -->

  <div id="mimp-service-header">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-8">
          <h1><?php the_title(); ?></h1>
          <?php echo '<p class="lead">' . get_post_meta($post->ID, 'page_desc', true) . '</p>'; ?>
        </div>
        <div class="col-md-4 col-sm-4" id="mimp-service-contact-form">
          <?php echo do_shortcode("[contact-form submit_button_text='Get a call back'][contact-field label='Name' type='name' required='1'/][contact-field label='Phone number' type='text' required='1'/][contact-field label='Email' type='email' required='1'/][/contact-form]"); ?>
        </div>
      </div>
    </div>
  </div>

<div id="mimp-contact-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
       
          <div class="row">
            <div class="col-md-6" id="">
              <h2 class="no-margin-header mimp-brand-heading">Find us</h2>
              <p>The Medical Imaging &amp; Medical Physics departments are based at the Royal Hallamshire Hospital. The Royal Hallamshire is situated a mile from the city on the Trust's central campus.</p>
              <address>
                  <a href="http://www.sth.nhs.uk/our-hospitals/royal-hallamshire-hospital/contact-us">Royal Hallamshire Hospital</a><br>
                  Glossop Road<br>
                  Sheffield<br>
                  S10 2JF<br>
              </address>
              
              <h2 class="mimp-brand-heading">Patient Information</h2>
              <p>If you have an appointment with us, or are looking for information about what to expect, please see our dedicated pages:</p>
<a href="#">How do I get a referral?</a><br>
<a href="#">How do I get there</a><br>
<a href="#">What happens at an appointment?</a><br>
<a href="#">What happens after an appointment?</a><br>


            </div>
            <div class="col-md-6" id="">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2380.0252728582786!2d-1.492584114025166!3d53.3785972830175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48798276f8fdde19%3A0x431cbeb702d1a974!2sRoyal+Hallamshire+Hospital!5e0!3m2!1sen!2suk!4v1416486453029" width="auto" height="400" frameborder="0" style="border:0;min-height:100%;min-width:100%;"></iframe>
            </div>
          </div>        
      </div>
    </div>
  </div>
  
</div>






<div id="mimp-nav-blocks">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="<?php echo get_site_url() . "/patient-information/"; ?>">
            <img class="mimp-nav-img hidden-xs" src="/wordpress/wp-content/uploads/2014/12/10913-2.jpg">
            <div class="mimp-branded-block" id="find-us">
              <h4>Patient Information</h4>
              <footer><em>Learn more about your patient journey and our services.</em>
              </footer>
            </div>
          </a>
        </div>
        
       <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="<?php echo get_site_url() . "/departments/"; ?>">
            <img class="mimp-nav-img hidden-xs" src="/wordpress/wp-content/uploads/2014/12/10912-2.jpg">
            <div class="mimp-branded-block" id="find-us">
              <h4>Our Departments</h4>
              <footer><em>Explore our commercial and patient services</em>
              </footer>
            </div>
          </a>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="<?php echo get_site_url() . "/commercial-services/"; ?>">
            <img class="mimp-nav-img hidden-xs" src="/wordpress/wp-content/uploads/2014/12/Amicus-Sheffield18.jpg">
            <div class="mimp-branded-block" id="find-us">
              <h4>Commercial Services</h4>
              <footer><em>Find out more about our three world-class departments</em>
              </footer>
            </div>
          </a>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="<?php echo get_site_url() . "/referrals/"; ?>">
            <img class="mimp-nav-img hidden-xs" src="/wordpress/wp-content/uploads/2014/12/IMG_6101Sheff.jpg">
            <div class="mimp-branded-block" id="find-us">
              <h4>Referral Information</h4>
              <footer><em>Find out how to make a referral to our service</em>
              </footer>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>


<?php get_footer(); ?>