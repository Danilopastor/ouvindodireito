<?php echo is_paged() ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/assets/css/main.css" rel="stylesheet">
    <?php  if(is_home() && ! is_paged()){ ?>
        <link href="<?php bloginfo('template_directory'); ?>/assets/css/screen.css?ver=1015" rel="stylesheet">
    <?php }elseif (is_single()) { ?>
        <link href="<?php bloginfo('template_directory'); ?>/assets/css/player-styles.css" rel="stylesheet">
        <link href="<?php bloginfo('template_directory'); ?>/assets/css/single.css?ver=1015" rel="stylesheet">
    <?php }else{ ?>
        <link href="<?php bloginfo('template_directory'); ?>/assets/css/pages.css" rel="stylesheet">
    <?php } ?>
  <?php wp_head(); ?>  
</head>
<body <?php body_class() ?>>
<div id="wrapper">
        <div class="conteiner">
            <div class="centered-conteiner">
                <header>
                    <div class="logo-top">
                        <a href="<?php bloginfo('home') ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logotipo.png" alt="logotipo ouvindo" /></a>
                    </div>
                    <div class="navigator">
                        <div class="menu_top">
                            <span></span>
                        </div>
                        <div class="content-menu">
                                <ul>
                                    <a href="<?php bloginfo('home') ?>"><li><i class="fas fa-home"></i> Home</li></a>
                                    <a href="<?php bloginfo('home') ?>/sobre"><li><i class="fas fa-caret-right"></i> Sobre</li></a>
                                    <a href="<?php bloginfo('home') ?>/contato"><li><i class="fas fa-phone"></i> Contato</li></a>
                                </ul>
                            </div>
                    </div>
                </header>