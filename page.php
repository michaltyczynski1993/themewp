
<?php get_header();?> 

<div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h2>

    <?php the_content(); ?>
    <?php wp_link_pages(); ?>

    <?php 
    endwhile; 
    endif;?>

</div>
<?php get_footer();?> 

