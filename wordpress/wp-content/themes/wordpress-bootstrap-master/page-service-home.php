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
      <div class="col-md-12">
        <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h1 class="section-header">A-Z Service Directory</h1>
                <hr class="brand-hr">
              </div>
        </div> 
        
        <script>
          jQuery(document).ready(function() {
            jQuery("section.sieve").sieve({ itemSelector: "article" });
            }); 
        </script>
        
        <section class="sieve">
          <article>
            <div class="row" id="mimp-service-link-header">
              <a role="button" data-toggle="collapse" data-target="#placeholder"> <h1 class="mimp-brand-heading"> Title of service <i class="fa fa-sort light-text pull-right"></i></h1>
              </a>
            </div>
    
            <div class="row">

            <div id="placeholder" class="in">
              <div class="col-md-8">
                <div class="panel panel-default">
                  <div class="panel-heading">Service Information</div>
                  <div class="panel-body">
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</p>
                  <a href="#" class="btn btn-mimp">Further Information about this service</a>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading">Treatments &amp; Services</div>
                  <div class="panel-body">
                    <a href="#" class="btn btn-info btn-sm">treatment</a>
                    <a href="#" class="btn btn-success btn-sm">procedure</a>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading">Our Team</div>
                  <div class="panel-body">
                    <p>Our team of staff somethingsomethings and dodad dodads are specially trained in ...  and ...</p>
                    <a href="#" class="btn btn-success btn-sm">Meet our team</a>
                  </div>
                </div>

              </div>

              <div class="col-md-4">
                <img src="http://placehold.it/370x370" alt="" class="img-responsive mimp-service-link-img invisible-xs">

                <div class="panel panel-default">
                  <div class="panel-heading">Contact</div>
                  <div class="panel-body">
                    <strong>Phone:</strong> placeholder<br>
                    <strong>Email:</strong> placeholder<br>
                    <strong>Address:</strong> placeholder<br>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>
      </section>


        
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