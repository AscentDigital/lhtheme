<?php 
	get_header();
	the_post();
	$type = get_field('type');
	switch ($type) {
		case 'Gallery':
			get_template_part('includes/galleries-gallery');
			break;
		
		case 'Video':
			get_template_part('includes/galleries-video');
			break;

		default:
			# code...
			break;
	}
	get_footer();
?>