				</div> <!-- end #container -->

<div id="mimp-breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-pills text-center">
            <li><a href="#">Patient Information</a>
            </li>
            <li><a href="#">Our Departments</a>
            </li>
            <li><a href="#">Contact Us</a>
            </li>
            <li><a href="#">Find a Service</a>
            </li>
            <li><a href="#">How to find us</a>
            </li>
            <li><a href="#">Referral Information</a>
            </li>
            <li><a href="#">Training and Courses</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

    <footer id="mimp-footer" role="contentinfo">
			<div class="container">
        

				<div id="inner-footer" class="clearfix">

		          <div id="widget-footer" class="clearfix row">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		            <?php endif; ?>
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer4') ) : ?>
		            <?php endif; ?>
		          </div>
					
					<nav class="clearfix">
						<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
				
				</div> <!-- end #inner-footer -->
			</div>
		</footer> <!-- end footer -->


		


<footer id="global-footer">
    <div class="container global-styles">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-6">
          <h2>About the Trust</h2>
          <p>
            <a href="http://www.sth.nhs.uk/about-us">Sheffield Teaching Hospitals NHS Foundation Trust</a> is
            one of the UK’s busiest and most successful NHS foundation trusts. We
            provide a <a href="http://www.sth.nhs.uk/services">full range of local hospital and community services</a> for
            people in Sheffield, as well as specialist care for patients from further
            afield, including cancer, spinal cord injuries, renal and cardiothoracic
            services. In addition to community health services, the Trust comprises
            five of Yorkshire’s best known teaching hospitals: The <a>Royal Hallamshire Hospital</a>, <a>The Northern General Hospital</a>, <a>Charles Clifford Dental Hospital</a>, <a>Weston Park Cancer Hospital</a> and
            the <a>Jessop Wing Maternity Hospital</a>.
          </p>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-6" data-twttr-id="twttr-sandbox-0">
          <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-timeline twitter-timeline-rendered" style="width: 1px; height: 0px; border: none; position: absolute; visibility: hidden;"></iframe><a class="twitter-timeline" href="https://twitter.com/SheffieldHosp" data-widget-id="496235812489416705" height="250" data-twttr-rendered="true">Tweets by @SheffieldHosp</a>
          <script id="twitter-wjs" src="https://platform.twitter.com/widgets.js"></script><script>
            ! function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0],
                p = /^http:/.test(d.location) ? 'http' : 'https';
              if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = p + "://platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js, fjs);
              }
            }(document, "script", "twitter-wjs");
          </script>


        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 logo-container">
          <img class="global-logo" src="http://sheffieldconferences.org/wp-content/uploads/2014/08/logosth.png">

          <div class="row">
            <div class="col-md-6 col-sm-6">
              <h4>Contact Address</h4>
              <address>
                  <a href="http://www.sth.nhs.uk/our-hospitals/royal-hallamshire-hospital/contact-us">Royal Hallamshire Hospital</a><br>
                  Glossop Road<br>
                  Sheffield<br>
                  S10 2JF<br>
              </address>
              <address>
                  <a href="http://www.sth.nhs.uk/our-hospitals/northern-general-hospital/contact-us">Northern General Hospital</a><br>
                  Herries Road<br>
                  Sheffield<br>
                  S5 7AU <br>
              </address>
            </div>
            <div class="col-md-6 col-sm-6">
              <h4>Further Information</h4>
              <ul>
                <li><a href="http://www.sth.nhs.uk/">STH Home</a>
                </li>
                <li><a href="http://www.sth.nhs.uk/services">STH Services</a>
                </li>
                <li><a href="http://www.sth.nhs.uk/news/news">STH News</a>
                </li>
                <li><a href="http://www.sth.nhs.uk/contact-us">STH Contact Details</a>
                </li>
              </ul>
            </div>
          </div>


        </div>
      </div>




      <div class="row-fluid" id="policy-footer">
        <div class="col-md-12">
          <ul class="nav nav-pills">
            <li><a href="http://www.sth.nhs.uk/about-us">About us</a>
            </li>
            <li><a href="http://www.sth.nhs.uk/cookie-policy">Privacy Policy</a>
            </li>
            <li><a href="http://www.sth.nhs.uk/freedom-of-information">Freedom of Information</a>
            </li>
            <li><a href="http://www.sth.nhs.uk/news/media/media-enquiries">Press</a>
            </li>
            <li><a href="http://www.sth.nhs.uk/work-for-us">Careers</a>
            </li>
            <!-- <li><a href="">Terms &amp; Conditions</a>
            </li> -->
            <li><a href=""> © Sheffield Teaching Hospitals NHS Foundation Trust</a>
            </li>

          </ul>


        </div>
      </div>

    </div>
  </footer>
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>