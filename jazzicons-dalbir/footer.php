<?php ?>
        
    </main>
    <footer class="site-footer">

    <?php
    if ( has_nav_menu( 'menu-footer' ) ) :

        wp_nav_menu( array(
            'theme_location'    => 'menu-footer',
            'menu_id'           => 'footer-menu',
            'container'         => 'nav',
        ) );

    endif;    
    ?>

    <div class="site-info">Site by Dalbir, content copyright <?php echo date( 'Y' ); ?></div>



    </footer>
</div>   

<?php wp_footer(); ?>

</body>
</html>