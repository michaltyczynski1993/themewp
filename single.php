
<?php get_header();?> 

<div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


    <h1><?php the_title(); ?></h1>

    <div class="image-container">
        <?php the_post_thumbnail() ?>
    </div>

    <?php the_content(); ?>
    <?php wp_link_pages(); ?>

    <?php 
    endwhile; 
    endif;?>
<br>

    
</div>
<?php get_footer();?> 

