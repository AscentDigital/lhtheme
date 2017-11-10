<?php wp_footer(); ?>
<footer>
  <div class="container">
    <img src="<?php echo get_template_directory_uri(); ?>/img/logotop2.png" alt="">
    <div class="copyright">
      Copyright © <?php echo date('Y'); ?> Leonidas Homes. All Rights Reserved.
    </div>
  </div>
</footer>
<!-- footer -->
  <script>
    jQuery(function( $ ){
     $('.parallaxie').parallaxie();
     $.fn.extend({
      toggleText: function(a, b){
        return this.text(this.text() == b ? a : b);
      }
    });
     $('#mobile-menu').on('click', function(){
      $('.nav-list-mobile').toggleClass('open');
      $(this).toggleText('MENU', 'CLOSE');
    });
   });
 </script>
</body>
</html>