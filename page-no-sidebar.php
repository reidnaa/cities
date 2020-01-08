<?php 
/*
*Template Name: No Sidebar
*
*/



get_header(); ?>
<?php if (has_post_thumbnail()): ?>

    <div class="featured">
                    <?php the_post_thumbnail('blog', array('class' => 'featured-image')); ?>
                    <h2><?php the_title(); ?></h2>
</div>
<?php else: ?> 
    <h2 class="no-image"><?php the_title(); ?></h2>
               <?php endif;?>
<div id="primary" class="primary np-sidebar post-<?php the_ID();?>  ">
    <?php while(have_posts()): the_post(); ?>

        
        
        <hr/>
        <p><?php the_content(); ?></p>
    <?php endwhile; wp_reset_postdata(); ?>
</div>




<?php get_footer(); ?>