<div class="container">
      <div class="primary-title">
        <?php the_title(); ?>
      </div>
    </div>
    <!-- Galleries -->


    <!-- Gallery Cards -->
    <section id="gallery">
      <div class="container gallery picture"> 
        <div class="row">
          <?php 
            $images = get_field('gallery');
            foreach ($images as $image) {
          ?>
          <div class="col-md-4 col-sm-6">
            <div class="card">
              <a href="<?php echo $image['url']; ?>" data-lightbox="gallery-img" data-title="<?php echo $image['title']; ?>">
                <div class="thumb-box" style="background-image: url(<?php echo $image['url']; ?>)"> 
                </div></a>

              </div>
            </div>
          <?php } ?>
          <!--  -->
        </div>
        
      </div>
    </section>