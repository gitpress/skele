<?php
/*
Template Name: Service home page
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
        <div class="col-md-4 col-sm-4" id="mimp-service-buttons">
          
          <a href="<?php echo get_site_url() . "/patient-information/"; ?>" class="btn btn-default btn-lg btn-block" role="button">Patient Information</a>
          <a href="<?php echo get_site_url() . "/services/commercial-services/"; ?>" class="btn btn-default btn-lg btn-block" role="button">Commercial Services</a>
          <a href="#A-Z" class="btn btn-warning btn-lg btn-block" role="button">A-Z Service Directory</a>
        </div>
      </div>
    </div>
  </div>

<div id="mimp-service-sieve">
  <div class="container" id="A-Z">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h1 class="section-header">A-Z Service Directory</h1>
                <hr class="brand-hr">
              </div>
        </div> 
        
        <script>
          jQuery(document).ready(function() {
            jQuery("table.sieve").sieve();
            jQuery("#mimp-service-sieve > div > div > div > div").addClass('this-class');
            }); 
        </script>

          <!-- Table -->
          <table class="table sieve">
            <thead>
              <tr>
                <th><a href="#">Commercial Services</a></th>
                <th><a href="#">Imaging Services</a></th>
                <th><a href="#">Scientific Services</a></th>
                <th><a href="#">Departments</a></th>
              </tr>
            </thead>
            <tbody>
              <tr><td><a href="#">Zachary Taylor</a></td><td>Barboursville, Virginia</td><td>Richard Nixon</td><td>Yorba Linda, California</td></tr>
              <tr><td>Warren G. Harding</td><td>Blooming Grove, Ohio</td><td>Rutherford B. Hayes</td><td>Delaware, Ohio</td></tr>
              <tr><td>John Quincy Adams</td><td>Braintree, Massachusetts</td><td>Rutherford B. Hayes</td><td>Delaware, Ohio</td></tr>
              <tr><td>John F. Kennedy</td><td>Brookline, Massachusetts</td><td>Rutherford B. Hayes</td><td>Delaware, Ohio</td></tr>
              <tr><td>Grover Cleveland</td><td>Caldwell, New Jersey</td><td>Rutherford B. Hayes</td><td>Delaware, Ohio</td></tr>
            </tbody>
          </table>
        
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