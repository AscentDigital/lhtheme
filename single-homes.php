<?php 
	get_header();
	the_post();
	$thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(), '', false);
?>
<div class="container">
	<div class="primary-title">
		<?php the_title(); ?>
	</div>
	<div class="secondary-title">
		<?php the_field('area'); ?>
	</div>
</div>
<!-- Galleries -->


<!-- Main Content -->
<section class="home-content">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<img src="<?php echo get_field('main_image') ?>" class ="home-img img-responsive">
			</div>
			<div class="col-md-4 home-desc">
				<div class="panel panel-default">
					<div class="panel-body">
						<h3><?php the_title(); ?><h3>
							<hr class = "divider">
							<?php the_content(); ?> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Main Content-->

	<!-- Home Details -->
	<section class="home-details">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="primary-title">
						General Description
					</div>
					<div class="general-desc">
						<!-- Detail -->
						<div class="detail">
							<?php  
								if( have_rows('general_description') ):

							     // loop through the rows of data
							    while ( have_rows('general_description') ) : the_row();

							        if( get_row_layout() == 'general_description' ):

							        	echo '<h4>'.get_sub_field('title').'</h4>
							        		<p>'.get_sub_field('description').'</p>
							        	';

							        endif;
							    endwhile;

							else :

							    // no layouts found

							endif;
							?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="primary-title">
						Room Dimensions
					</div>
					<div class="room">
						<!-- Detail -->
						<div class="detail">
							<?php  
								if( have_rows('room_dimensions') ):

							     // loop through the rows of data
							    while ( have_rows('room_dimensions') ) : the_row();

							        if( get_row_layout() == 'room_dimensions' ):

							        	echo '<h4>'.get_sub_field('title').'</h4>
							        		<p>'.get_sub_field('dimension').'</p>
							        	';

							        endif;
							    endwhile;

							else :

							    // no layouts found

							endif;
							?>
						</div>
						<!-- /Detail -->
					</div>
				</div>
				<div class="col-md-4">
					<div class="primary-title">
						Virtual Tour
					</div>
					<div class="home-video">
						<iframe class="actAsDiv" style="width:100%;height:100%;" src="https://www.youtube.com/embed/<?php echo get_field('virtual_tour') ?>" frameborder="0" allowfullscreen=""></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Home Details -->

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
				</div>

			</div>
		</section>

		<!-- Ready to -->
		<div class="ready-to">
			<img src="<?php echo get_template_directory_uri(); ?>/img/readyto2.png" alt="" class="img-responsive"> 
		</div>
		<?php get_footer(); ?>