<?php
    add_filter('show_admin_bar', '__return_false');
    add_theme_support( 'title-tag' );

    // Image thumbnails
    if (function_exists('add_theme_support')) {
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(136, 136, true);
        set_post_thumbnail_size(248, 177, true);
        add_image_size('side-thumb', 80, 70, true);
        add_image_size('related-thumb', 100, 100, true);
        add_image_size('300', 300, 300, true);
    }
    function getImagePost( $postId, $size = 'high' )
    {
    $retorno = wp_get_attachment_image_src( get_post_thumbnail_id( $postId ), $size );
    return $retorno[0];
    }
    function novo_tamanho_do_resumo($length) {
        return 20;
    }
    add_filter('excerpt_length', 'novo_tamanho_do_resumo');
    function add_resumo_com_link($more) {
        global $post;
        return '...';
    }
    add_filter('excerpt_more', 'add_resumo_com_link');

    function title_limite($maximo) {
    $title = get_the_title();
    if ( strlen($title) > $maximo ) {
    $continua = '...';
    }
    $title = mb_substr( $title, 0, $maximo, 'UTF-8' );
    echo $title.$continua;
    }
    // Ativa posts-formats
    add_theme_support(
        'post-formats',
        array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
            'status',
            'audio',
            'chat',
        )
    );
    add_filter('excerpt_more', 'add_resumo_com_link');

    
    function my_paginate_links($wp_query) {
        global $wp_rewrite;
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
        $pagination = array(
            'base' => @add_query_arg('page','%#%'),
            'format' => '?page=%#%',
            'total' => $wp_query->max_num_pages,
            'current' => $current,
            'prev_text' => __('<i class="fas fa-arrow-left"></i>'),
            'next_text' => __('<i class="fas fa-arrow-right"></i>'),
            'end_size' => 1,
            'mid_size' => 2,
            'show_all' => true,
            'type' => 'list'
        );
        /*if ( $wp_rewrite->using_permalinks() )
                $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
        if ( !empty( $wp_query->query_vars['s'] ) )
                $pagination['add_args'] = array( 's' => get_query_var( 's' ) );*/
        echo paginate_links( $pagination );
    }

    if ( ! function_exists( 'post_pagination' ) ) :
        function post_pagination($wp_query) {
          $pager = 999999999; // need an unlikely integer
      
             echo paginate_links( array(
                  'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
                  'format' => '?paged=%#%',
                  'current' => max( 1, get_query_var('paged') ),
                  'total' => $wp_query->max_num_pages
             ) );
        }
     endif;


     if ( function_exists('register_sidebar') )
{
    register_sidebar(array(
        'name' => __( 'Conteúdo Lateral do Site'),
        'id' => 'sidebar-1',
        'description' => __( 'Adicionar itens na lateral do site.'),
        'before_title' => '<div class="title-aside"><h1>',
        'after_title' => '</h1></div>',
    ) );
}

function options_theme($array = null){
    $list = array(
        'social_link'   => array(
            'facebook'  =>  'https://www.facebook.com/ouvindodireito/',
            'twitter'   =>  null,
            'instagram' =>  'https://www.instagram.com/ouvindodireito/',
            'whatsapp'  =>  null,
        ),
        'link_feeds'  => array(
            'spotify' => 'https://open.spotify.com/show/2ELOKAng9tLWimCT5lJ8Ba?si=c4NsQ4hlSeuPJ1pkyMSeHA',
            'itunes'  => null,
            'google'  => null,
            'rss'     => 'http://ouvindodireito.com/feed/podcast/'
        )
    );
    if($array) return $list[$array];
    return $list;
}
?>