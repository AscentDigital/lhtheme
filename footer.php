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



    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
      <script src="./js/bootstrap.min.js"></script> 
      <script src="./js/parallaxie.js"></script>  
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="./js/ie10-viewport-bug-workaround.js"></script>
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