<?php get_header(); ?>
<div class="primary-post">
<?php 
if(have_posts()):
  while(have_posts()):
   the_post();
   $postId = get_the_ID();
   $image = getImagePost( $postId );

   if( $plc_episode_content = get_the_powerpress_content() )  {
    $PlcEpisodeData = powerpress_get_enclosure_data($postId, 'podcast');
    $PlcMediaURL = $PlcEpisodeData['url'];
    $PlcMediaType = $PlcEpisodeData['type'];
    }
?>
    <div class="thumb">
        <img src="<?php echo $image; ?>" alt="0" />
    </div>
    <div class="text">
        <h1><?php the_title(); ?></h1>
        <div class="details-post">
          <p class="author">Por <?php the_author(); ?></p>
          <div class="time-post">
          <span>Publicado em <?php the_date(); ?></span>
          <span>
            <a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($post_id); ?>" title="Postar no Facebook"><i class="fab fa-facebook-square"></i></a>
            <a href="https://twitter.com/share?url=<?php echo get_permalink($post_id); ?>" title="Tuítar esse conteúdo"><i class="fab fa-twitter-square"></i></a>
            <a href="whatsapp://send?text=<?php echo urlencode(get_the_title() .' '. get_permalink($post_id) ) ; ?>" title="Compartilhar no WhatsApp"><i class="fab fa-whatsapp-square"></i></a>
        </span>
          </div>
        </div>
        <div class="space-blog-content">
            <div class="content-post">
    <?php if( $plc_episode_content = get_the_powerpress_content() )  { ?>
        <div class="box-player">
            <div class="options-episode"><a href="<?php echo $PlcMediaURL; ?>"><i class="fas fa-download"></i> Baixar Episódio</a></div>
            <div class="content-play">
            <audio class="audio-player-destaque" src="<?php echo $PlcMediaURL; ?>" type="<?php echo $PlcMediaType; ?>" controls="controls"></audio>
            </div>
        </div> 
    <?php } ?>
      <?php echo get_the_content(); ?>
            <div class="tags">
                <!-- <ul>
                    <a href="#"><li>Direito</li></a>
                    <a href="#"><li>Poder</li></a>
                    <a href="#"><li>Liberdade</li></a>
                </ul> -->
            </div>    
            </div>
<?php
    endwhile;
	endif;
?>
            <?php include( get_theme_root() . '/' . get_template().'/includes/aside_single.php'); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>