<?php


/**
 * 
 * Name: featured news
 *
 */

//get posts
?>
<!-- section/stories -->
<section id="stories">
    <h3 class="fw-bold mb-4">News/Stories</h3>
    <div class="container">
        <div class="row gy-1 gx-lg-5">
                <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blog_card"> -->
                        <?php
                                $args = array(
                                'post_type'      => 'post',
                                'category_name'  => 'news-stories',
                                'posts_per_page' => 4,
                                );
                        $query = new WP_Query( $args );
                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                        ?>
                                <div class="col-lg-6 col-md-6 col-sm-12 blog_card" id="ced">
                                    <div class="card p-3 shadow-none">
                                        <div class="row g-0">
                                            <div class="col-lg-5">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid rounded-start mt-lg-3 image_1" alt="...">
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="card-body">
                                                    <h6 class="card-title"><?php the_title(); ?></h6>
                                                    <small class=""><?php echo get_the_date('F j, Y'); ?></small>
                                                    <p class="card-text">
                                                        <?php the_excerpt(); ?>
                                                    </p>
                                                    <a href="<?php the_permalink(); ?>">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                    
                    <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                            echo '<p>No posts found.</p>';
                        endif;
                        ?>
                    <div class="text-center pt-5 see_all">
                        <a href="#" class="btn-sub btn border-dark">See All</a>
                    </div>
                <!-- </div> -->
            </div>
        </div>
</section>