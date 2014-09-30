<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
</div> <!-- div to kill container -->

  <div id="mimp-service-header">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1><?php bloginfo('title'); ?><small><?php echo get_post_meta($post->ID, 'custom_tagline' , true);?></small></h1>
          <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
            consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et
            accumsan et iusto odio dignissim qui blandit praesent luptatum zzril
            delenit augue duis dolore te feugait nulla facilisi</p>
        </div>
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

        <div class="col-md-3 col-sm-6">
          <a href="#services">
            <div class="mimp-branded-block" id="find-us">
              <h4>Professional Services</h4>
              <footer><em>Explore our extensive list of of Medical Imaging &amp; Medical Physics services </em>
              </footer>
            </div>
          </a>
        </div>

        <div class="col-md-3 col-sm-6">
          <a href="#services">
            <div class="mimp-branded-block" id="find-us">
              <h4>Professional Services</h4>
              <footer><em>Explore our extensive list of of Medical Imaging &amp; Medical Physics services </em>
              </footer>
            </div>
          </a>
        </div>

        <div class="col-md-3 col-sm-6">
          <a href="#services">
            <div class="mimp-branded-block" id="find-us">
              <h4>Professional Services</h4>
              <footer><em>Explore our extensive list of of Medical Imaging &amp; Medical Physics services </em>
              </footer>
            </div>
          </a>
        </div>

        <div class="col-md-3 col-sm-6">
          <a href="#services">
            <div class="mimp-branded-block" id="find-us">
              <h4>Professional Services</h4>
              <footer><em>Explore our extensive list of of Medical Imaging &amp; Medical Physics services </em>
              </footer>
            </div>
          </a>
        </div>

        <div class="col-md-3 col-sm-6">
          <a href="#services">
            <div class="mimp-branded-block" id="find-us">
              <h4>Professional Services</h4>
              <footer><em>Explore our extensive list of of Medical Imaging &amp; Medical Physics services </em>
              </footer>
            </div>
          </a>
        </div>

        <div class="col-md-3 col-sm-6">
          <a href="#services">
            <div class="mimp-branded-block" id="find-us">
              <h4>Professional Services</h4>
              <footer><em>Explore our extensive list of of Medical Imaging &amp; Medical Physics services </em>
              </footer>
            </div>
          </a>
        </div>

        <div class="col-md-3 col-sm-6">
          <a href="#services">
            <div class="mimp-branded-block" id="find-us">
              <h4>Professional Services</h4>
              <footer><em>Explore our extensive list of of Medical Imaging &amp; Medical Physics services </em>
              </footer>
            </div>
          </a>
        </div>

        <div class="col-md-3 col-sm-6">
          <a href="#services">
            <div class="mimp-branded-block" id="find-us">
              <h4>Professional Services</h4>
              <footer><em>Explore our extensive list of of Medical Imaging &amp; Medical Physics services </em>
              </footer>
            </div>
          </a>
        </div>

      </div>
    </div>
  </div>

<?php get_footer(); ?>