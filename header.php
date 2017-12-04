<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favico.png">
    <title><?php echo bloginfo('name'); ?></title> 
    <?php wp_head(); ?>
  </head>

  <body> 
    <header class="<?php if(is_front_page()){ echo 'home'; }else{ echo 'default'; } ?>">
      <div class="gradient"></div>
      <?php if(is_front_page()){ ?>
      <video src="<?php echo get_template_directory_uri(); ?>/assets/leonidasheader01.webm" autoplay loop> 
      </video>
      <?php 
        }else{
          $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(), '', false);
          $bg = $thumb_url[0];

          if(!is_page()){
            $bg = get_template_directory_uri() . '/img/mainbanner14.jpg';
          }
      ?>
      <div class ="header-background" style="background-image: url(<?php echo $bg; ?>);">
        <div class="container">
          <h1><?php 
            if(is_page()){
              the_title();
            }else{
              echo 'Homes';
            }
          ?></h1>
        </div>
      </div>
      <?php } ?>
      <nav>
        <div class="container"> 
          <div class="nav-block">
            <div class="logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logotop.png" alt=""> 
            </div>
            <div class="nav-list primary_nav_wrap hidden-xs">
              <div id="primary_nav_wrap">
                <?php 
                  $args = array(
                    'theme_location' => 'primary'
                  );
                  wp_nav_menu($args); 
                  ?> 
                </div>
            </div>
            <div class="nav-list mobile-menu visible-xs">
              <a href="#" id="mobile-menu">Menu</a>
            </div>
          </div>
        </div>
      </nav> 
    </header>
    
    <div class="nav-list-mobile visible-xs">
        <div><img src="<?php echo get_template_directory_uri(); ?>/img/logotop.png" alt="" width="100%"> </div>
        <?php  
          $items = wp_get_nav_menu_items(3);
          foreach ($items as $item) {
            if($item->type != 'custom'){
        ?>
        <div><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></div>
        <?php
            }
          }
        ?>
    </div>