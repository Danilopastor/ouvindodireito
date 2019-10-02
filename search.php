<?php get_header(); ?>
<div class="primary-post">
    <div class="text">
        <h1><span>Resultados:</span> <?php echo get_search_query(); ?></h1>
        <div class="space-blog-content">
        <div class="content-list">
<?php
    global $query_string;
    wp_parse_str( $query_string, $search_query );

    $paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
    $search_query['paged'] = $paged;
    $search_query['posts_per_page'] = 8;

    $search_post = new WP_Query( $search_query );

    if ( $search_post->have_posts() ) :
    while ( $search_post->have_posts() ) : $search_post->the_post();
    $image = getImagePost( $post->ID );
?>
    <a href="<?php the_permalink() ?>">
        <div class="item-list">
            <div class="thumb"><img src="<?php echo $image; ?>" /></div>
            <div class="text">
                    <span><?php the_author(); ?> - <?php the_time('j M, y'); ?></span>
                    <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </a>
<?php endwhile; ?>
        <div class="pagination">
        <?php my_paginate_links($search_post); ?>
        </div>
<?php else: ?>
<h1><i class="far fa-dizzy"></i> Nada Encontrado!</h1>
<?php endif; ?>
     </div>
    </div>
    </div>
</div>
<?php get_footer(); ?>