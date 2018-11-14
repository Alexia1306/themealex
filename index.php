<?php
get_header();
?>


<main>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
      <?php

      $loop =  new WP_Query(array(
          "post_type" =>"product",
          "product_cat" => "carousel"
      ));
      $first = true;
      while($loop->have_posts()){
          $loop->the_post();
          ?>
          <div class="carousel-item <?php
          if ($first == true){
              echo "active";
              $first = false;
          }
           ?>">

            <div class="carousel-text">
                <?php echo woocommerce_get_product_thumbnail(); ?>
               <h3> <?php the_title(); ?></h3>
               <p>lorem ipsum dole dor soi fjeo</p>
               <button type="button" name="button">LEARN MORE</button>
           </div>
          </div>
          <?php


      }
       ?>



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



<section class="second_list">
    <ul>
    <a href="#"><li>Albums</li></a>
    <a href="#"><li>Clothing</li></a>
    <a href="#"><li>Hoodies</li></a>
    <a href="#"><li>Music</li></a>
    <a href="#"><li>Posters</li></a>
    <a href="#"><li>Singles</li></a>
    <a href="#"><li>T-shirts</li></a>
</ul>
</section>

<section class="row no-gutters">
    <?php
    $products = wc_get_products(array("category" => "article" ));
    foreach ($products as $product):

        ?>
        <div class="myCard col-1 col-md-4">

            <div class="card">
                <?php echo woocommerce_get_product_thumbnail(); ?>

                <div class="card-body">
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

<?php endforeach; ?>
</section>



<button class="btn-one" type="button" name="button">Show all</button>
</main>




<?php



get_sidebar();
get_footer();
