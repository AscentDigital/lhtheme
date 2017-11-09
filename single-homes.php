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
				<img src="<?php echo $thumb_url[0]; ?>" class ="home-img img-responsive">
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
							<?php the_field('general_description') ?>
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
							<?php the_field('room_dimensions') ?>
						</div>
						<!-- /Detail -->
					</div>
				</div>
				<div class="col-md-4">
					<div class="primary-title">
						Virtual Tour
					</div>
					<div class="home-video">
						<iframe class="actAsDiv" style="width:100%;height:100%;" src="<?php echo get_field('virtual_tour') ?>" frameborder="0" allowfullscreen=""></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Home Details -->

	<!-- Gallery Cards -->
	<!-- <section id="gallery">
		<div class="container gallery picture"> 
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="card">
						<a href="<?php echo get_template_directory_uri(); ?>/img/gallerypic01.jpg" data-lightbox="gallery-img" data-title="PASSION FOR THE INTERIORS">
							<div class="thumb-box" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/gallerypic01.jpg)"> 
							</div></a>

						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="card">
							<a href="<?php echo get_template_directory_uri(); ?>/img/gallerypic02.jpg" data-lightbox="gallery-img" data-title="PASSION FOR THE INTERIORS"><div class="thumb-box" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/gallerypic02.jpg)">

							</div></a>

						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="card">
							<a href="<?php echo get_template_directory_uri(); ?>/img/gallerypic03.jpg" data-lightbox="gallery-img" data-title="PASSION FOR THE INTERIORS"><div class="thumb-box" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/gallerypic03.jpg)">

							</div></a>

						</div>
					</div>
					<!--  -->
					<div class="col-md-4 col-sm-6">
						<div class="card">
							<a href="<?php echo get_template_directory_uri(); ?>/img/gallerypic06.jpg" data-lightbox="gallery-img" data-title="PASSION FOR THE INTERIORS"><div class="thumb-box" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/gallerypic06.jpg)">

							</div></a> 
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="card">
							<a href="<?php echo get_template_directory_uri(); ?>/img/gallerypic04.jpg" data-lightbox="gallery-img" data-title="PASSION FOR THE INTERIORS"><div class="thumb-box" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/gallerypic04.jpg)">

							</div></a>

						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="card">
							<a href="<?php echo get_template_directory_uri(); ?>/img/gallerypic05.jpg" data-lightbox="gallery-img" data-title="PASSION FOR THE INTERIORS"><div class="thumb-box" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/gallerypic05.jpg)">

							</div></a>

						</div>
					</div>
					<!--  -->
					<div class="col-md-4 col-sm-6">
						<div class="card">
							<a href="<?php echo get_template_directory_uri(); ?>/img/gallerypic09.jpg" data-lightbox="gallery-img" data-title="PASSION FOR THE INTERIORS"><div class="thumb-box" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/gallerypic09.jpg)">

							</div></a> 
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="card">
							<a href="<?php echo get_template_directory_uri(); ?>/img/gallerypic08.jpg" data-lightbox="gallery-img" data-title="PASSION FOR THE INTERIORS"><div class="thumb-box" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/gallerypic08.jpg)">

							</div></a> 
						</div> 
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="card">
							<a href="<?php echo get_template_directory_uri(); ?>/img/gallerypic07.jpg" data-lightbox="gallery-img" data-title="PASSION FOR THE INTERIORS"><div class="thumb-box" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/gallerypic07.jpg)">

							</div></a> 
						</div> 
					</div>
					<!--  -->
					<!--  -->
					<div class="col-md-4 col-sm-6">
						<div class="card">
							<a href="<?php echo get_template_directory_uri(); ?>/img/gallerypic10.jpg" data-lightbox="gallery-img" data-title="PASSION FOR THE INTERIORS"><div class="thumb-box" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/gallerypic10.jpg)">

							</div></a> 
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="card">
							<a href="<?php echo get_template_directory_uri(); ?>/img/gallerypic11.jpg" data-lightbox="gallery-img" data-title="PASSION FOR THE INTERIORS"><div class="thumb-box" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/gallerypic11.jpg)">

							</div></a> 
						</div> 
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="card">
							<a href="<?php echo get_template_directory_uri(); ?>/img/gallerypic12.jpg" data-lightbox="gallery-img" data-title="PASSION FOR THE INTERIORS"><div class="thumb-box" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/gallerypic12.jpg)">

							</div></a> 
						</div> 
					</div>
					<!--  -->
					<!--  -->
					<div class="col-md-4 col-sm-6">
						<div class="card">
							<a href="<?php echo get_template_directory_uri(); ?>/img/gallerypic13.jpg" data-lightbox="gallery-img" data-title="PASSION FOR THE INTERIORS"><div class="thumb-box" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/gallerypic13.jpg)">

							</div></a> 
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="card">
							<a href="<?php echo get_template_directory_uri(); ?>/img/gallerypic14.jpg" data-lightbox="gallery-img" data-title="PASSION FOR THE INTERIORS"><div class="thumb-box" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/gallerypic14.jpg)">

							</div></a> 
						</div> 
					</div> 
					<!--  -->
				</div>

			</div>
		</section> -->

		<!-- Ready to -->
		<div class="ready-to">
			<img src="<?php echo get_template_directory_uri(); ?>/img/readyto2.png" alt="" class="img-responsive"> 
		</div>
		<?php get_footer(); ?>