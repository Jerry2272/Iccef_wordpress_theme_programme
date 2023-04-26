<?php


/**
 * 
 * Name: featured programme
 *
 */

//get posts
?>

<section class="d-lg-block d-md-block mt-3" id="prog">
  <div class="container my-5">
    <h2>Programmes</h2>
    <div class="row">

      <div class="owl-carousel owl-theme">
        <?php
            $args = array(
            'post_type'      => 'post',
            'category_name'  => 'programmes',
            'posts_per_page' => 5,
            );
            $query = new WP_Query( $args );

        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
        ?>
            <div class="item">
              <!-- <div class="col-lg-4"> -->
              <div class="card" id="crd">
                <div class="card-img feature_home_programme_thumbnail">
                  <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
                  <?php endif; ?>
                  <div class="empty_empty_content"></div>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><?php the_title(); ?></h5>
                  <small class=""><?php echo get_the_date('F j, Y'); ?></small>
                  <p class="card-text">
                    <?php the_excerpt(); ?>
                  </p>
                  <a href="<?php the_permalink(); ?>">Read More</a>
                </div>
              </div>
              <!-- </div> -->
            </div>
              <?php
                endwhile;
                wp_reset_postdata();
              else :
                echo '<p>No posts found.</p>';
              endif;
              ?>

      </div>
    </div>
  </div>
</section>