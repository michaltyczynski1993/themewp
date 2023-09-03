
<?php get_header();?> 

<div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h2>You are on page: <?php the_title(); ?></h2>

    <?php the_content(); ?>
    <?php wp_link_pages(); ?>

    <?php 
    endwhile; 
    endif;?>
    <div class="latest-posts">

        <hr>
        <h3 style="text-align:center">Check out our newest articles: </h3>

        <!-- post titles -->
        <div class="row">
            <!-- query post type to display -->
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page'=> 3,
            );
            // new WP_query object
            $query = new WP_Query($args);
            ?>

            <!-- loop for posts -->
            <?php if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post(); ?>

            <!-- show 3 latest posts as buttons -->
            <input type="button" onclick="location.href='<?php the_permalink($post) ?>'" value="<?php the_title();?>" class="post-button">

            <?php endwhile; else : ?> 
                <p><?php _e( 'No Posts To Display.' ); ?></p>
            <?php endif; ?> 
        </div>
    </div>
    
</div>
<?php get_footer();?> 

