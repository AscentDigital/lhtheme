<?php
get_header();
?>
    <!-- ABOUT LEONIDAS HOMES -->
    <div class="container">
        <div class="primary-title">
          About <span class = "blue-title">Leonidas Homes</span>
        </div>
        <p class = "about-content">
          Leonidas Homes—a home building firm built on passion and purpose—crafts luxury million dollar homes in the Houston, Texas area.<br><br>
 
          Leonidas Homes is an elite builder that prefers to limit the volume of homes built and emphasize quality over quantity; this allows them to focus personal attention to its customers.<br><br>
 
          So if you are a home-buyer seeking a deeply personal home that fully expresses your unique style through a truly collaborative and seamless building process, then Leonidas Homes is your builder.<br><br>
 
          The expert team of hand-picked professionals, artisans and contractors at Leonidas Homes will make your dream home a reality, delivering a home where memories are made and lives unfold gracefully.</p>

        <div class="primary-title hidden-xs" style ="margin-top:0px;">&nbsp;</div>
        <div class="visible-xs"><br><br></div>
    </div>
    <!-- ABOUT LEONIDAS HOMES -->

    <!-- About Icons -->
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img class="about-icons" src="<?php echo get_template_directory_uri(); ?>/img/iconshome1.png" > <span class ="icon-text">Concept</span>
        </div>
        <div class="col-md-4">
          <img class="about-icons" src="<?php echo get_template_directory_uri(); ?>/img/iconshome2.png" > <span class ="icon-text">Planning</span>
        </div>
        <div class="col-md-4">
          <img class="about-icons" src="<?php echo get_template_directory_uri(); ?>/img/iconshome3.png" > <span class ="icon-text">Building</span>
        </div>
      </div>
    </div>
    <!-- About Icons -->

    <!-- Our Company Name & Logo -->
    <div class="container">
        <div class="primary-title" style ="margin-top:80px;">
          The Leonidas <span class = "blue-title">Process</span>
        </div>
        <p class = "heritage-content">
          Like our firm, our approach to designing and building your home is warm, relaxed, ever personal but always professional. It starts with a simple conversation, perhaps over a café or nice lunch, that’s focused on your needs and your vision for your home.<br><br>
 
As the process unfolds, we’ll help you select any of the elements that you need to achieve your dream home – whether that be the right land, the ideal architect, the perfect floor plan, or the many custom touches that make your house a home that will comfort and shelter your family and guests for years to come, and a place that fully and effortlessly expresses your individuality.</p>
    </div>
    <!-- Our Company Name & Logo -->

    <!-- Our Team -->
    <section class = "team-section">
      <div class="container">
        <div class="team-title" >
          Our Team
        </div>
        <div class="row">
          <?php  

          $args = array(
              'post_type' => 'officer',
              'order' => 'ASC',
              'orderby' => 'post_date'
          );
          $query = new WP_Query($args);
          if($query->have_posts()){
            while($query->have_posts()){
              $query->the_post();
              $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(), '', false);
          ?>

          <!-- Officer -->
          <div class="col-md-4">
            <img class = "team-image" src = "<?php echo $thumb_url[0]; ?>">
            <h2><?php the_title(); ?></h2>
            <h3><?php the_field('position') ?></h3>
            <?php the_content(); ?>
          </div>
          <!-- Officer -->
        <?php
            }
          }
          wp_reset_query();
        ?>
        </div>
      </div>
    </section>
    <!-- Our Team -->

    <!-- parallax-section -->
    <section class="parallax-section parallaxie" style='background: url("<?php echo get_template_directory_uri(); ?>/img/mainbanner10.jpg")' data-parallaxie='{"speed": -0.4"size": "auto"}'>
      <div class="container">
         <p>Get to know Leonidas Homes, Houston’s premier builder of luxury homes as unique as you are.</p>
      </div>
    </section>
    <!-- .parallax-section -->


<?php
get_footer();
?>