<footer>
        <?php wp_nav_menu(
            array(
                'theme_location' =>'footer',
                'container' => '',
                'menu_class' => 'footer-socials',
            )
        );?>
    <div class="logo">
        <?php if ( function_exists( 'the_custom_logo' ) ) {
	the_custom_logo();
}?></div>
</footer>
<?php wp_footer();?>    
</body>
</html>