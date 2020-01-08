<?php

get_header();
?>
<?php get_template_part('/template-parts/slider');?>


<div class="what-to-visit">
    <?php dynamic_sidebar('front-page');?>
</div>

<div class="bottom-front-page">

    <div class="about-us">
        <?php $aboutus = new WP_Query('page_id=13')?>
        <?php while ($aboutus->have_posts()): $aboutus->the_post();?>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>

            <?php endwhile; wp_reset_postdata();?>
    </div>
    <div class="blog-tips">
        <h2>Tips to travel to toronto</h2>

        <?php $args = array(
            'cat' => 7,
            "posts_per_page" => 2,   
            "order"=> 'DESC',
            "orderby" => 'date'
        );?>

        <?php $travelTips = new WP_Query($args);?>
        <ul>
        <?php while($travelTips->have_posts()): $travelTips->the_post();?>
           <li>
               <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail('smallBlog');?>
                    <div class="front-page-post-content">
                        <h3><?php the_title();?></h3>
                        <p><?php the_excerpt(); ?></p>
                        <span><a href="<?php the_permalink();?>">
                        continue reading</a></span>
                    </div>
               </a>
           </li>
        <?php endwhile; wp_reset_postdata(); ?>
        </ul>   
    </div>
</div>




<?php get_footer(); ?>