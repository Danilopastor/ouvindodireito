       </div>
      </div>
    </div>
<footer>
        <div class="conteiner">
                <div class="centered-conteiner">
                    <div class="item">
                        <div class="logotipo-footer">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/logotipo_footer.png" alt="logotipo footer" />
                        </div>
                        <div class="menu-footer">
                            <ul>
                                <a href="<?php bloginfo('home') ?>"><li>Home</li></a>
                                <a href="<?php bloginfo('home') ?>/sobre"><li>Sobre</li></a>
                                <a href="<?php bloginfo('home') ?>/contato"><li>Contato</li></a>
                            </ul>
                        </div>
                        <div class="text-footer">
                            <p>Copyright © 2019 Ouvindo Direito, Todos os Direitos Reservados</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="social">
                            <h1>Conecte-se</h1>
                            <ul>
                                <a href="#"><li><i class="fab fa-facebook-square"></i></li></a>
                                <a href="#"><li><i class="fab fa-twitter-square"></i></li></a>
                                <a href="#"><li><i class="fab fa-instagram"></i></li></a>
                                <a href="#"><li><i class="fab fa-whatsapp-square"></i></li></a>
                            </ul>

                        </div>
                        <div class="assine-podcast">
                            <h1>Assine o Podcast</h1>
                            <p>Acompanhe o podcast diretamente de qualquer lugar, assine em um dos canais </p>
                            <ul>
                                <a href="#"><li><i class="fab fa-spotify"></i></li></a>
                                <a href="#"><li><i class="fab fa-itunes"></i></i></li></a>
                                <a href="#"><li><i class="fab fa-google"></i></li></a>
                                <a href="#"><li><i class="fas fa-rss-square"></i></li></a>
                            </ul>
                        </div>
                        <div class="design-by">
                            <div class="logotipo">
                                    <a href="https://nativamultimidia.com.br" title="Nativa Multimídia" target="_blank" ><img id="dsn-logo" src="<?php bloginfo('template_directory'); ?>/assets/img/desygn_by.png" alt="design by" /></a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
</footer>
    <!-- início do item de busca -->
    <?php 
    $querySearch = (get_query_var( 's' )) ? get_query_var( 's' ) : '';

    ?>
    <div class="search-form">
        <div class="s-content">
            <div class="s-buttom">
                <button id="buttonSeach"><i class="fas fa-search"></i></button>
            </div>
            <div class="s-inner">
                <input id="input-search" type="text" open="<?php if($querySearch == ''){ echo false; }else{ echo true; } ?>" value="<?php echo $querySearch; ?>" placeholder="O que está procurando?" action_url="<?php bloginfo('home') ?>/?s="/>
            </div>
        </div>
    </div>
    <!-- fim do item de busca -->
    <!-- início do preloader -->
    <div id="preloader">
        <div class="inner">
           <div class="item-preload">
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/icon_preload_white.png" alt="icon preload"/>      
           </div>
        </div>
    </div>
    <!-- fim do preloader --> 

    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/scripts.js" type="text/javascript"></script>

    <?php if(is_single()){ ?>
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/mediaelement-and-player.min.js"></script>
                <script type="text/javascript">
                    $(function(){
                    $('.audio-player-destaque').mediaelementplayer({
                            alwaysShowControls: true,
                            features: ['playpause','progress','current','duration'],
                            audioVolume: 'horizontal',
                            audioWidth: 300,
                            audioHeight: 90,
                            /*startVolume: 0.3,*/
                            iPadUseNativeControls: true,
                            iPhoneUseNativeControls: true,
                            AndroidUseNativeControls: true
                            });
            
                    });
        </script>
    <?php } ?>
</body>
</html>