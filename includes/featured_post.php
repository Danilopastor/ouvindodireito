    <?php
    if(!get_query_var( 'page' )){
    $features_post = new WP_Query(
		array(
			'showposts'		=> 1,
			'post_status'	=> 'publish',
			'order'			=> 'date',
			'orderby'		=> 'desc'
					)
				);

                if(have_posts()) :while ( $features_post->have_posts() ) : $features_post->the_post();
                $featured_postID = $post->ID;
        $image = getImagePost( $featured_postID );
    ?>
        <a href="<?php the_permalink() ?>">
            <div class="primary-post">
                    <div class="thumb">
                        <img src="<?php echo $image; ?>" alt="0" />
                    </div>
                    <div class="text">
                    <h1><?php the_title(); ?></h1>
                    <span>Por <?php the_author(); ?> - <?php the_time('j M, y'); ?></span>
                    <p>
                    <?php the_excerpt() ?>
                    </p>
                </div>
            </div>
        </a>
    <?php 
    
	endwhile;
    endif;
}
    ?>