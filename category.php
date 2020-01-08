<?php get_header(); ?>

<h1><?php _e('Category: ' , 'cities') . single_cat_title();?></h1>
<div id="primary" class="primary no-sidebar post-<?php the_ID();?>  ">
    <?php while(have_posts()): the_post(); ?>
        
            <article>
                <a href="<?php the_permalink();?>">
                    <div class="post-thumbnail"><?php the_post_thumbnail('smallBlog'); ?></div>
                    
                </a>
                <div class="article-text">
                    <h2><?php the_title();?></h2>
                    <hr/>
                    <p><?php the_excerpt(); ?></p>
                </div>
            </article>
        
    <?php endwhile; wp_reset_postdata(); ?>
</div>



<?php get_footer(); ?>