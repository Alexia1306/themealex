    <div class="row">
            <div class="col-12 col-md-4">
                <section class="help">
                    <h5>Help</h5>
                    <h6><?php wp_nav_menu(array('menu' => 'Help')); ?></h6>
                </section>
            </div>

             <div class="col-12 col-md-4">
                <?php $page = get_page_by_title('About'); ?>
                <h3><?php echo $page->post_title; ?></h3>
                <p><?php echo $page->post_excerpt; ?></p>
            </div>

            <div class="col-12 col-md-4">

                <form class="formfooter">
                    <h5>Newsletter</h5>
                    <input type="email">
                    <button>Sign up</button>
                </form>
            </div>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>
