<?php


get_header();


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
