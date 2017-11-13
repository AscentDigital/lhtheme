<?php
get_header();
?>
 <!-- Galleries -->
    <div class="container">
      <div class="primary-title">
        Take a Look at our <span class = "blue-title">Stunning Houses</span>
      </div>
    </div>
    <!-- Galleries -->


    <!-- Gallery Cards -->
    <section id="gallery">
      <div class="container gallery"> 
        <div class="row">
          <?php  
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            $args = array(
                'post_type' => 'gallery',
                'paged' => $paged,
                'posts_per_page' => 9,
                'order' => 'DESC',
                'orderby' => 'post_date'
            );
            $query = new WP_Query($args);
            if($query->have_posts()){
              while($query->have_posts()){
                $query->the_post();
                $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(), '', false);
                $type = get_field('type');
                $bg = get_template_directory_uri() . '/img/imagegalleries2.jpg';
                if($type == 'Gallery'){
                  $icon = 'mediaicons01-u1867.png';
                  if($thumb_url){
                    $bg = $thumb_url[0];
                  }else{
                    $gal = get_field('gallery');
                    $bg = $gal[0]['url'];
                  }
                }else{
                  $icon = 'mediaicons2-u1877.png';
                  if($thumb_url){
                    $bg = $thumb_url[0];
                  }
                }
          ?>
          <div class="col-md-4 col-sm-6">
            <div class="card">
              <a href="<?php the_permalink(); ?>"><div class="thumb-box" style="background-image: url(<?php echo $bg; ?>)">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $icon; ?>" alt="">
              </div></a>
              <h1><?php the_title(); ?></h1>
              <?php the_content(); ?>
            </div>
          </div>
          <?php
              }
            }
            wp_reset_query();
          ?>
        </div>
        

        <?php get_template_part('pagination'); ?> 

      </div>
    </section>


    <!-- Ready to -->
    <div class="ready-to">
      <img src="<?php echo get_template_directory_uri(); ?>/img/readyto2.png" alt="" class="img-responsive"> 
    </div>
    <!-- Ready to -->
<?php
get_footer();
?>