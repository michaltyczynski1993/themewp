<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head();?>
    

</head>
<body>

<header>

<h3 class="head-logo"><?php bloginfo( 'name' ); ?></h3>
<div class="vertical-line"></div>
    <!-- main menu -->
    <?php wp_nav_menu(array(

    'theme_location' => 'primary-menu',
    'container_class' => 'menu-container',
    'menu_class' => 'main-menu',

    ))?>
    
    <hr>
</header>

