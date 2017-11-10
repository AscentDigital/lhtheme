<?php
get_header();
?>
 <!-- newsletter-section -->
    <section id="newsletter" class="newsletter">
      <div class="container">
        <div class="primary-title">
          Get in touch <span class = "blue-title">With Us</span>
        </div>
        <div class="contact-div">
          <div class="contact">
            <p>Ph 281-222-2888</p>
            <p>vasilis@leonidashomes.com</p>
            <p>1808 Fairview Street, Houston, TX 77006</p>
          </div>
          <div class="contact-form">
            <div class="form">
              <input type="text" placeholder="Name">
            </div>
            <div class="form">
              <input type="text" placeholder="Phone">
            </div>
            <div class="form text-right hidden-xs">
              <a href="#" class="btn-prime">
                Send <img src="<?php echo get_template_directory_uri(); ?>/img/arrowsita1-right.png" alt="">
              </a>
            </div>
          </div>
          <div class="contact-form">
            <div class="form">
              <input type="text" placeholder="Email">
            </div>
            <div class="form">
              <textarea placeholder="Message"></textarea>
            </div>
             <div class="form text-right visible-xs">
              <a href="#" class="btn-prime">
                Send <img src="<?php echo get_template_directory_uri(); ?>/img/arrowsita1-right.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- .newsletter-section -->

    <!-- Leonidas Google Map -->
    <div class="container" style = "height:283px;padding-bottom:50px;">
        <iframe class="actAsDiv" style="width:100%;height:100%;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;q=Leonidas%20Homes%2C%201808%20Fairview%20Street%2C%20Houston%2C%20TX%2077006&amp;aq=0&amp;ie=UTF8&amp;t=m&amp;z=12&amp;iwloc=A&amp;output=embed"></iframe>
    </div>
    <!-- Leonidas Google Map -->

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