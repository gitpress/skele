<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
</div> <!-- div to kill container -->

 <!-- CAROUSELLA -->
  <div id="mimp-carousel">
    

              <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class=""></li>
              <li data-target="#myCarousel" data-slide-to="1" class=""></li>
              <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="3" class=""></li>
            </ol>
            <div class="carousel-inner">
              <div class="item">
                <img src="<?php echo get_site_url() . "/wp-content/uploads/2014/10/blue.png"; ?>"
                alt="First slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1 class="mimp-carousel-header">Example headline</h1>
                    <p class="mimp-carousel-paragraph">Note: If you're viewing this page via a <code>file://</code> URL,
                      the "next" and "previous" Glyphicon buttons on the left and
                      right might not load/display properly due to web browser security
                      rules.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <img src="<?php echo get_site_url() . "/wp-content/uploads/2014/10/blue.png"; ?>"
                alt="Second slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1 class="mimp-carousel-header">Medical Physics headline</h1>
                    <p class="mimp-carousel-paragraph">Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                      Donec id elit non mi porta gravida at eget metus. Nullam id
                      dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="item active">
                <img src="<?php echo get_site_url() . "/wp-content/uploads/2014/10/blue.png"; ?>"
                alt="Third slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1 class="mimp-carousel-header">Medical Imaging headline</h1>
                    <p class="mimp-carousel-paragraph">Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                      Donec id elit non mi porta gravida at eget metus. Nullam id
                      dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <img src="<?php echo get_site_url() . "/wp-content/uploads/2014/10/blue.png"; ?>"
                alt="Fourth slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1 class="mimp-carousel-header">Training and Consultation</h1>
                    <p class="mimp-carousel-paragraph">Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                      Donec id elit non mi porta gravida at eget metus. Nullam id
                      dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>
   </div>

<div id="mimp-search-bar">
    <div class="container">
      <div class="row">
<div class="col-lg-8 col-lg-offset-2 mimp-search-box">
						<form class="" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
							<div class="form-group">
								<input name="s" id="s" type="text" class="search-query form-control" autocomplete="on" placeholder="<?php _e('Search','wpbootstrap'); ?>" data-provide="typeahead" data-items="4" data-source='<?php echo $typeahead_data; ?>'>
							</div>
						</form>
          </div>
        <!-- /.col-lg-6 -->
      </div>
    </div>
  </div>


			
<div id="mimp-nav-blocks">
    <div class="container">
      <div class="row">

        <div class="col-md-3 col-sm-6">
          <a href="<?php echo get_site_url() . "/departments/"; ?>">
            <div class="mimp-branded-block" id="find-us">
              <h4>Our Departments</h4>
              <footer><em>Find out more about our three world-class departments</em>
              </footer>
            </div>
          </a>
        </div>

        <div class="col-md-3 col-sm-6">
          <a href="<?php echo get_site_url() . "/services/commercial-services/"; ?>">
            <div class="mimp-branded-block" id="find-us">
              <h4>Professional Services</h4>
              <footer><em>Locate the right professional service for you</em>
              </footer>
            </div>
          </a>
        </div>

        <div class="col-md-3 col-sm-6">
          <a href="<?php echo get_site_url() . "/training/"; ?>">
            <div class="mimp-branded-block" id="find-us">
              <h4>Training &amp; Careers</h4>
              <footer><em>Upgrade your skills with our training courses</em>
              </footer>
            </div>
          </a>
        </div>

        <div class="col-md-3 col-sm-6">
          <a href="<?php echo get_site_url() . "/patient-information/"; ?>">
            <div class="mimp-branded-block" id="find-us">
              <h4>Patient Information</h4>
              <footer><em>Learn more about your patient journey and our services.</em>
              </footer>
            </div>
          </a>
        </div>

        <div class="col-md-3 col-sm-6">
          <a href="<?php echo get_site_url() . "/services/#A-Z"; ?>">
            <div class="mimp-branded-block" id="find-us">
              <h4>A-Z of Services</h4>
              <footer><em>Explore our commercial and patient services</em>
              </footer>
            </div>
          </a>
        </div>

        <div class="col-md-3 col-sm-6">
          <a href="<?php echo get_site_url() . "/referrals/"; ?>">
            <div class="mimp-branded-block" id="find-us">
              <h4>Referral Information</h4>
              <footer><em>Find out how to make a referral to our service</em>
              </footer>
            </div>
          </a>
        </div>

        <div class="col-md-3 col-sm-6">
          <a href="<?php echo get_site_url() . "/services/commercial-services/consultation/"; ?>">
            <div class="mimp-branded-block" id="find-us">
              <h4>On-site Consultation</h4>
              <footer><em>Find a world-leading expert for your business or service</em>
              </footer>
            </div>
          </a>
        </div>

        <div class="col-md-3 col-sm-6">
          <a href="<?php echo get_site_url() . "/news/"; ?>">
            <div class="mimp-branded-block" id="find-us">
              <h4>News &amp; Information</h4>
              <footer><em>Keep up to date with our news and events</em>
              </footer>
            </div>
          </a>
        </div>

      </div>
    </div>
  </div>

<?php get_footer(); ?>