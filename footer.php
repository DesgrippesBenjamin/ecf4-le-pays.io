    <footer class="footer-conatiner bg-dark">
            <div class="footer-copyright text-center py-3">
                <p>© 2020 Copyright:
            <a href="<?php echo home_url( '/' ); ?>"> Le Pays</a></p>
            <small><?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?></small>
        </div>

    </footer>
    <?php wp_footer(); ?>
    </body>

    </html>