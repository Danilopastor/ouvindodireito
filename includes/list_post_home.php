   <?php
    $exclude = $featured_postID;
    $paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
    $aside_post = new WP_Query(array(
        'post__not_in'  => array($exclude),
        'post_type' => 'post', // You can add a custom post type if you like
        'paged' => $paged,
        'posts_per_page' => 2 // limit of posts
    ));

    if ( $aside_post->have_posts() ) :
    ?>
    <div class="list-posts">
    <?php
        while ( $aside_post->have_posts() ) : $aside_post->the_post();
          $image = getImagePost( $post->ID )
     ?>
            <a href="<?php the_permalink() ?>">
                <div class="item-post">
                    <div class="thumb">
                    <img src="<?php echo $image; ?>" alt="<?php the_author(); ?>" />
                    </div>
                    <div class="text">
                        <span>Por <?php the_author(); ?> - <?php the_time('j M, y'); ?></span>
                        <h1><?php title_limite(60); ?></h1>
                    </div>
                </div>
            </a>
            <?php 
        endwhile;
        ?>
        </div>
        <div class="pagination">
        <?php my_paginate_links($aside_post); ?>
        </div>
        <?php
	    endif;
        ?>