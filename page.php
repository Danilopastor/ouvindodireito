<?php get_header(); ?>
<div class="primary-post">
<?php
if(have_posts()):
    while(have_posts()):
     the_post();
     $image = getImagePost( $postId );
?>
    <div class="text">
        <div class="breadcumbs">
            <ul>
                <a href="#"><li><i class="fas fa-home"></i> <?php the_title(); ?></li></a>
            </ul>
        </div>
        <h1>Sobre</h1>
        <div class="space-blog-content">
            <div class="content-post">                    
            <?php the_content(); ?>
            </div>
            <div class="aside-single">
            </div>
            <!-- aside -->
        </div>
    </div>
<?php
    endwhile;
	endif;
?>
</div>
<?php get_footer(); ?>