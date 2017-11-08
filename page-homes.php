<?php
get_header();
?>
 <!-- featured -->
    <section class="featured" id="featured">
      <div class="container">
        <div class="primary-title">
          Our Stunning <span class = "blue-title">Homes</span>
        </div>
        <div class="set-of-3">
          <div class="set-1" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/recentpic4.jpg)">
            <h1>1214 Drew</h1>
            <a href="./home1.html"></a>
          </div>
           <div class="set-2" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/recentpic3.jpg)">
            <h1>1225 Welch</h1>
            <a href="./home1.html"></a>
          </div>
           <div class="set-3" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/recentpic2.jpg)">
            <h1>1808 Fairview</h1>
            <a href="./home1.html"></a>
          </div>
        </div>
        <!--  -->
        <div class="set-of-3">
          <div class="set-4" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/recentpic1.jpg)">
            <h1>1214 Drew</h1>
            <a href="./home1.html"></a>
          </div>
           <div class="set-5 home-sold" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/recentpic3.jpg)">
            <h1>1225 Welch</h1>
            <h2 class = "sold-text">SOLD</h2>
            <a href="./home1.html"></a>
          </div>
           <div class="set-6" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/recentpic2.jpg)">
            <h1>1808 Fairview</h1>
            <a href="./home1.html"></a>
          </div>
        </div>
        <!--  -->

        <!-- Pagination -->
        <section class="paginate">
          <nav aria-label="...">
            <span class="page-numbers current">1</span>
            <a class="page-numbers" href="#">2</a>
            <a class="page-numbers" href="#">3</a>
            <span class="page-numbers dots">…</span>
            <a class="page-numbers" href="#">6</a>
            <a class="next page-numbers" href="#">Next »</a>          
        </nav>
        </section>  
        <!-- Pagination -->
      </div>
    </section>
    <!-- .featured -->

    <!-- Ready to -->
    <div class="ready-to">
      <img src="<?php echo get_template_directory_uri(); ?>/img/readyto2.png" alt="" class="img-responsive"> 
    </div>
    <!-- Ready to -->

<?php
get_footer();
?>