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
                    <a href="<?php echo the_permalink();?>" class="btn">Go somewhere</a>
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


<div class="row">
    <div class="col-12 col-md-8 text-center">
        <?php wp_nav_menu(array('menu' => 'Category')); ?>
    </div>

    <div class="col-12 col-md-4 text-center">
        <?php wp_nav_menu(array('menu' => 'Shop')); ?>
    </div>
</div>

<section class="row no-gutters">
    <?php
    $products = wc_get_products(array("category" => "article" ));
    foreach ($products as $product):
        ?>
        <div class="myCard col-1 col-md-4">
            <div class="card">
                <?php echo woocommerce_get_product_thumbnail(); ?>

                <div class="card-body">
                    <h5 class="card-title"><?php echo $product->get_title(); ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="<?php echo the_permalink(); ?>" class="btn">Go somewhere</a>
                </div>
            </div>
        </div>
<?php endforeach; ?>
</section>
</main>
<?php



get_sidebar();
get_footer();
