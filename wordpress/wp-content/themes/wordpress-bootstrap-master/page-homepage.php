<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
</div> <!-- div to kill container -->
 <!-- CAROUSELLA -->


   <div id="mimp-carousel">
    <div class="container">

          <div id="myCarousel" class="carousel slide hidden-mobile" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1" class=""></li>
              <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner">
              
              <div class="item active">
                <a href="#">
                <img src="http://www.carat7.com/wp-content/uploads/2014/08/healthcare_intro_small-1200x550-cropped.jpg"
                alt="First slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1 class="mimp-carousel-header">Example headline</h1>
                    <p class="mimp-carousel-paragraph">Note: If you're viewing this page via a <code>file://</code> URL,
                      the "next" and "previous" Glyphicon buttons on the left and
                      right might not load/display properly due to web browser security
                      rules.</p>
                  </div>
                </div>
                 </a>
              </div>
               
              <div class="item">
                <a href="#">
                <img src="http://www.ox.ac.uk/sites/files/oxford/styles/ow_large_feature/public/field/field_image_main/Physics.jpg?itok=MJTR5pAd"
                alt="Second slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1 class="mimp-carousel-header">Medical Physics headline</h1>
                    <p class="mimp-carousel-paragraph">Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                      Donec id elit non mi porta gravida at eget metus. Nullam id
                      dolor id nibh ultricies vehicula ut id elit.</p>
                  </div>
                </div>
                </a>
              </div>
              <div class="item">
               <a href="#">
                <img src="http://radiology.queensu.ca/templates/department-radiology/images/som-diag-rad-02.jpg"
                alt="Third slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1 class="mimp-carousel-header">Medical Imaging headline</h1>
                    <p class="mimp-carousel-paragraph">Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                      Donec id elit non mi porta gravida at eget metus. Nullam id
                      dolor id nibh ultricies vehicula ut id elit.</p>
                  </div>
                </div>
                </a>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>
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
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="<?php echo get_site_url() . "/patient-information/"; ?>">
            <img class="mimp-nav-img hidden-xs" src="/wordpress/wp-content/uploads/2014/12/10913-2.jpg">
            <div class="mimp-branded-block" id="find-us">
              <h4>Patient Information</h4>
              <footer><em>Learn more about your patient journey and our services</em>
              </footer>
            </div>
          </a>
        </div>
        
       <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="<?php echo get_site_url() . "/services/"; ?>">
            <img class="mimp-nav-img hidden-xs" src="/wordpress/wp-content/uploads/2014/12/10912-2.jpg">
            <div class="mimp-branded-block" id="find-us">
              <h4>A-Z of Services</h4>
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
              <footer><em>Find out more about our world-class commerical services</em>
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

<div id="mimp-team-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="under-margin">Our Departments</h1>
        
        <div class="row">
          <div class="col-md-6">
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object hidden-mobile" src="/wordpress/wp-content/uploads/2014/12/Amicus-Sheffield11.jpg" alt="Media Object">
              </a>
              <div class="media-body">
                <h3 class="media-heading">Medical Physics &amp; Clinical Engineering</h3> This is some sample text. This is some sample text. This is some sample
                text. This is some sample text. This is some sample text. This is some sample text. This is some sample
                text.
              </div>
            </div>
            
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object hidden-mobile" src="/wordpress/wp-content/uploads/2014/12/11534-2.jpg" alt="Media Object">
              </a>
              <div class="media-body">
                <h3 class="media-heading">Radiology</h3> This is some sample text. This is some sample text. This is some sample
                text. This is some sample text. This is some sample text. This is some sample text. This is some sample
                text.
              </div>
            </div>
          </div>
          
           <div class="col-md-6">
              <div class="media">
                <a class="pull-left" href="#">
                  <img class="media-object hidden-mobile" src="/wordpress/wp-content/uploads/2014/12/Amicus-Sheffield09.jpg" alt="Media Object">
                </a>
                <div class="media-body">
                  <h3 class="media-heading">Audiological Science</h3> This is some sample text. This is some sample text. This is some sample
                  text. This is some sample text. This is some sample text. This is some sample text. This is some sample
                  text.
                </div>
              </div>
              <div class="media">
                <a class="pull-left" href="#">
                  <img class="media-object hidden-mobile" src="/wordpress/wp-content/uploads/2014/12/1710-2.jpg" alt="Media Object">
                </a>
                <div class="media-body">
                  <h3 class="media-heading">Training</h3> This is some sample text. This is some sample text. This is some sample
                  text. This is some sample text. This is some sample text. This is some sample text. This is some sample
                  text.
                </div>
               </div>
          </div>
        </div>
        
         <div class="row">
           <div class="col-md-12">
             <br>
             <a href="<?php echo get_site_url() . "/departments/"; ?>" class="btn btn-link btn-white">Find out more about our departments</a>
           </div>
           
        </div>
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

<?php get_footer(); ?>