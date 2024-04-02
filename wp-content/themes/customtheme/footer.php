</div>
    <footer id="colophon" class="site-footer">
        <!-- Footer content goes here -->
        <div class="footer-widgets">
            <?php
            if ( is_active_sidebar( 'footer-1' ) ) :
                dynamic_sidebar( 'footer-1' );
            endif;
            ?>
        </div>
        <div class="site-info">
            <?php
            printf( esc_html__( 'Proudly powered by %s', 'yourtheme' ), 'WordPress' );
            ?>
        </div>
    </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
