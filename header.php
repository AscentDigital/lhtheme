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
    <header class="home">
      <div class="gradient"></div>
      <?php if(is_front_page()){ ?>
      <video src="<?php echo get_template_directory_uri(); ?>/assets/leonidasheader01.webm" autoplay loop> 
      </video>
      <?php }else{ ?>
      <div class ="header-background" style="background-image: url(./img/mainbanner18.jpg);">
        <div class="container">
          <h1>Homes</h1>
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
                <ul>
                  <li class = "active"><a href="<?php echo get_template_directory_uri(); ?>/index.html">Home</a></li>
                  <li><a href="#">leonidas</a>
                    <ul>
                      <li><a href="<?php echo get_template_directory_uri(); ?>/about.html">about</a></li>
                      <li><a href="<?php echo get_template_directory_uri(); ?>/heritage.html">our heritage</a></li> 
                    </ul>
                  </li> 
                  <li><a href="<?php echo get_template_directory_uri(); ?>/homes.html">homes</a></li>
                  <li><a href="<?php echo get_template_directory_uri(); ?>/gallery.html">galleries</a></li>
                  <li><a href="<?php echo get_template_directory_uri(); ?>/contact.html">contact</a></li>
                </ul>
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
        <div><a href="<?php echo get_template_directory_uri(); ?>/index.html">Home</a></div>
        <div><a href="<?php echo get_template_directory_uri(); ?>/about.html">about</a></div>
        <div><a href="<?php echo get_template_directory_uri(); ?>/heritage.html">our heritage</a>   </div>
        <div><a href="<?php echo get_template_directory_uri(); ?>/homes.html">homes</a></div>
        <div><a href="<?php echo get_template_directory_uri(); ?>/gallery.html">galleries</a></div>
        <div><a href="<?php echo get_template_directory_uri(); ?>/contact.html">contact</a> </div>
    </div>