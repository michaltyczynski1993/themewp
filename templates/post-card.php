<div class="card" onclick="location.href='<?php the_permalink($post) ?>'">
  <img 
  src="<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
}  ?>" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b><?php the_title();?></b></h4>
  </div>
</div>