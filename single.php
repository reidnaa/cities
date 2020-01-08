<?php get_header(); ?>

<div id="primary" class="primary post-<?php the_ID();?>  ">
    <?php if (has_post_thumbnail()): ?>

        <div class="featured">
            <?php the_post_thumbnail('blog', array('class' => 'featured-image')); ?>
            <h2><?php the_title(); ?></h2>
</div>
<?php else: ?> 
<h2 class="no-image"><?php the_title(); ?></h2>
           <?php endif;?>
    <?php while (have_posts()): the_post(); ?>
        <article>
            <div class="written-info">

            <?php if(the_tags()): ?>
                <div class="column">
                    <?php the_tags(__('Tags for this post', 'cities'), ', ' , '<br/>');?>
                </div>
            <?php endif;?>
                <div class="column">
                    <?php _e('Category: ', 'cities') . the_category(', ');?>
                </div>
                <div class="column">
                   Author: <span> <?php the_author();  ?></span>
                </div>
            </div>
            <hr/>
                <p><?php the_content(); ?></p>
        </article>
        <?php comments_template(); ?>
    <?php endwhile; wp_reset_postdata(); ?>
</div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>