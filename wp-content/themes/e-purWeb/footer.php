<footer>

    <nav>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-2',
                'container' => 'false',
                'menu_class' => 'footer_css',
            )
        );
        ?>
        <?php get_template_part('template-part/contact'); ?>


    </nav>

</footer>

<?php wp_footer(); ?>

</body>

</html>