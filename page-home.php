<?php get_header(); ?>
<section class="introductory" id="introduction">
	<div class="container">
		<div class="ready-to">
			<img src="<?php echo get_template_directory_uri(); ?>/img/readyto2.png" alt="" class="img-responsive"> 
		</div>
		<div class="intro-set set-of-3">
			<div class="set-1">
				<h1>Delivering homes where memories are made</h1>
				<p>Leonidas Homes builds throughout the Houston  in Houston Montrose, Midtown, Spring Branch, and Memorial Heights.  Leonidas Homes—a home building firm built on passion and purpose—crafts luxury million dollar homes in the Houston, Texas area.</p>

				<p>Leonidas Homes is an elite builder that prefers to limit the volume of homes built and emphasize quality over quantity; this allows them to focus personal attention to its customers.</p>
			</div>
			<div class="set-2">
				<h1>What we do</h1>  
				<div class="row">
					<div class="col-md-12">
						<div>
							<h2>Concept</h2>
							<img src="<?php echo get_template_directory_uri(); ?>/img/iconshome1.png" alt="">
						</div>
					</div>
					<div class="col-md-12">
						<div>
							<h2>Planning</h2>
							<img src="<?php echo get_template_directory_uri(); ?>/img/iconshome2.png" alt="">
						</div>
					</div>
					<div class="col-md-12">
						<div>
							<h2>Building</h2>
							<img src="<?php echo get_template_directory_uri(); ?>/img/iconshome3.png" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="set-3">
				<img src="<?php echo get_template_directory_uri(); ?>/img/image1home.jpg" alt="" class="img-responsive">
				<div class="text-center">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logotop.png" alt="">
				</div>
			</div>
		</div> 
	</div>
</section>
<!-- .introductory -->

<?php  
  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

  $args = array(
      'post_type' => 'homes',
      'category_name' => 'featured',
      'paged' => $paged,
      'posts_per_page' => 3,
      'order' => 'DESC',
      'orderby' => 'post_date'
  );
  $query = new WP_Query($args);
  if($query->have_posts()){
?>
<!-- title-section -->
<div class="title-section">
	<div class="container backdrop">
		<h1 class="sub">FEATURED HOMES</h1>
		<img src="<?php echo get_template_directory_uri(); ?>/img/arrowsita1-u342.png" alt="">
	</div>
</div>
<!-- .title-section -->


<!-- featured -->
<section class="featured" id="featured">
	<div class="container">
		<div class="set-of-3">
			<?php
	            $set = 1;
	            while($query->have_posts()){
	              $query->the_post();
	              $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(), '', false);
	        ?>
			<div class="set-<?php echo $set; ?> <?php if(get_field('sold')){ echo 'home-sold'; } ?>" style="background-image: url(<?php echo $thumb_url[0]; ?>)">
	            <h1><?php the_title(); ?></h1>
	            <?php if(get_field('sold')){ ?>
	              <h2 class = "sold-text">SOLD</h2>
	            <?php } ?>
	            <a href="<?php the_permalink(); ?>"></a>
	        </div>
			<?php
	            $set++;
	            }
	        ?>
		</div>
	</div>
</section>
<?php
 }
  wp_reset_query();
?>
<!-- .featured -->



<!-- ad-section -->
<div class="ad-section">
	<div class="container backdrop"> 
		<div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/logoicon.png" alt="">
		</div>
		<div>
			<p>Get to know Leonidas Homes, Houston’s premier builder of luxury homes as unique as you are.</p>
		</div>
	</div>
	<div class="container"> 
		<div></div>
		<div>
			<a href="
			" class="btn-prime btn-block">LET'S WORK TOGETHER</a>
		</div>
	</div>
</div>
<!-- .ad-section -->


<!-- parallax-section -->
<section class="parallax-section parallaxie" style='background: url("<?php echo get_template_directory_uri(); ?>/img/mainbanner10.jpg")' data-parallaxie='{"speed": -1"size": "cover"}'>
	<div class="container">
		<p>Leonidas Homes will make your dream home a reality</p>
	</div>
</section>
<!-- .parallax-section -->

<!-- newsletter-section -->
<section id="newsletter" class="newsletter">
	<div class="container">
		<div class="title">
			Get in touch
		</div>
        <?php get_template_part('includes/contact-form'); ?>
	</div>
</section>
<?php get_footer(); ?>