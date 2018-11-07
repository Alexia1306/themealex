<?php


get_header(); ?>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i.pinimg.com/originals/32/a8/c0/32a8c08a3bf620ae394c26f587721d40.jpg" alt="First slide">
      <div class="carousel-text">
         <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
         <p>lorem ipsum dole dor soi fjeo</p>
         <button type="button" name="button">LEARN MORE</button>
     </div>
    </div>
    <div class="carousel-item">
      <img src="https://img.1qr.eu/hh/images/m/artc/30726smk/fr/fr/image.jpg" alt="Second slide">
      <div class="carousel-text">
         <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
         <p>lorem ipsum dole dor soi fjeo</p>
         <button type="button" name="button">LEARN MORE</button>
     </div>
    </div>
    <div class="carousel-item">
      <img src="https://i.pinimg.com/236x/f0/a9/74/f0a974f5897252610a380fe6133c5667.jpg" alt="Third slide">
      <div class="carousel-text">
         <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
         <p>lorem ipsum dole dor soi fjeo</p>
         <button type="button" name="button">LEARN MORE</button>
     </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




<?php



     if ( have_posts() ) : ?>



        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

        the_title(); the_content();

        // End the loop.
        endwhile;



    endif;








get_sidebar();







get_footer();





?>
