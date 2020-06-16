<?php

$args = [
    'post_type' => 'post',
    'posts_per_page' => 6
];

$query = new WP_Query($args);

if($query->have_posts()){
    while($query->have_posts()){
        $query->the_post();?>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Blog  -->
                <div class="shop-single-blog">                    
                    <?php the_post_thumbnail();?>
                    <div class="content">
                        <p class="date"><?php echo get_the_date();?></p>
                        <a href="<?php the_permalink();?>" class="title"><?php the_title();?></a>
                        <a href="<?php the_permalink();?>" class="more-btn">Continue Reading</a>
                    </div>
                </div>
                <!-- End Single Blog  -->
            </div>	

    <?php } wp_reset_postdata();
}


die();