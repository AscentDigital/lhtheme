<?php
get_header();
?>
 <!-- featured -->
    <section class="featured" id="featured">
      <div class="container">
        <div class="primary-title">
          Our Stunning <span class = "blue-title">Homes</span>
        </div>
        <?php  
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

          $args = array(
              'post_type' => 'homes',
              'paged' => $paged,
              'posts_per_page' => 6,
              'order' => 'DESC',
              'orderby' => 'post_date'
          );
          $query = new WP_Query($args);
          if($query->have_posts()){
            $counter = 1;
            $set = 1;
            while($query->have_posts()){
              $query->the_post();
              $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(), '', false);
              if($counter == 1){
                echo ' <div class="set-of-3">';
              }
        ?>
          <div class="set-<?php echo $set; ?> <?php if(get_field('sold')){ echo 'home-sold'; } ?>" style="background-image: url(<?php echo $thumb_url[0]; ?>)">
            <h1><?php the_title(); ?></h1>
            <?php if(get_field('sold')){ ?>
              <h2 class = "sold-text">SOLD</h2>
            <?php } ?>
            <a href="<?php the_permalink(); ?>"></a>
          </div>
        <?php
            if($counter == 3){
              $counter = 1;
              echo '</div>';
            }else{
              $counter++;
            }
            $set++;
            }
          }
          wp_reset_query();
        ?>

        <!-- Pagination -->
        <?php get_template_part('pagination'); ?>
        <!-- Pagination -->
      </div>
    </section>
    <!-- .featured -->

    <!-- Ready to -->
    <div class="ready-to">
      <img src="<?php echo get_template_directory_uri(); ?>/img/readyto2.png" alt="" class="img-responsive"> 
    </div>
    <!-- Ready to -->

<?php
get_footer();
?>