<?php 
/*
* Template Name: what to visit
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
<div id="primary" class="primary no-sidebar post-<?php the_ID();?>  ">
   

        
        
        <hr/>
        <?php $args = array(
            'posts_per_page' => 5,
            'cat' => 4,
            'order' => 'DESC',
            'orderby' => 'random'

        );
        
        $visit = new WP_Query($args);?>
        <ul class="blog-visit">
           <?php while($visit->have_posts()): $visit->the_post(); ?>
            <li>

                <div class="featured">
                    <?php the_post_thumbnail('mediumSize');?>
                    <?php the_category();?>
                </div>

                <div class="content">
                    <a href="<?php the_permalink();?>"><h3><?php the_title(); ?> </h3> </a> 
                    <p><?php the_excerpt(); ?></p>
                </div>
                <div class="post-information">
                    <div class="author">
                    by: <?php the_author();?>
                    </div>
                    <div class="date">
                    Posted on <?php the_time( 'l, F jS, Y' ); ?>.
                    </div>
                </div>

            </li>
            

            <?php endwhile; wp_reset_postdata(); ?>
         </ul>
</div>



<?php get_footer(); ?>