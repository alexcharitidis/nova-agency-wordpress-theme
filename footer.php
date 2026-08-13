
<footer class="site-footer">
    <div class="footer-container">

        <div class="footer-branding">
            <?php bloginfo('name'); ?>
        </div>

         <div class="footer-bottom">
            <p>
                &copy; <?php echo date('Y'); ?>
                <?php bloginfo('name'); ?>.
                All rights reserved.
            </p>
        </div>

          <nav class="footer-navigation">
          <?php
         wp_nav_menu(
            array(
              'theme_location' => 'footer-menu',
              'menu_class'     => 'footer-menu'
          )
      );
    ?>
</nav>

    </div>

    <button class="back-to-top" aria-label="Back to top">
    ↑
</button>
</footer>

<?php wp_footer(); ?>

</body>
</html>