<div class="aside-single">
<ul>
<?php
    if ( is_active_sidebar( 'sidebar-1' ) ) :		
        dynamic_sidebar( 'sidebar-1' );
    endif;
?>
<?php
    $exclude = $postId;
    $aside_post = new WP_Query(
		array(
            'post__not_in'  => array($exclude),
			'showposts'		=> 6,
			'post_status'	=> 'publish',
			'order'			=> 'date',
			'orderby'		=> 'desc'
					)
				);

    if ( have_posts() ) :
?>
</ul>
<div>
    <div class="title-aside"><h1>Outros Posts</h1></div>
    <div class="content-aside">
<?php 
    while ( $aside_post->have_posts() ) : $aside_post->the_post();
    $image = getImagePost( $featured_postID );
?>
    <a href="<?php the_permalink() ?>" >
        <div class="item-aside">
            <div class="thumb"><img src="<?php echo $image; ?>" /></div>
            <div class="text">
                    <span>Por <?php the_author(); ?> - <?php the_time('j M, y'); ?></span>
                    <h1><?php title_limite(60); ?></h1>
            </div>
        </div>
    </a>
    <?php endwhile; ?>                              
    </div>
</div>
<?php
	endif;
?>
</div>