<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta charset="<?= bloginfo( 'charset' ); ?>">

    <title><?= bloginfo("name") ?></title>

    <?php wp_head(); ?>

    <!-- <script type="text/javascript">
        window.smartlook||(function(d) {
        var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
        var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
        c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
        })(document);
        smartlook('init', '54465489f6930f9cfbfb20121357f04fda927075');
    </script> -->
</head>
<?php $frontpage_id = get_option( 'page_on_front' ); ?>
<body <?php body_class(); ?>>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2 col-sm-6 col-xs-6">
                    <a class="fx-logo" href="<?= bloginfo('url') ?>">
                        <object type="image/svg+xml" data="<?= get_template_directory_uri(); ?>/assets/img/logo.svg">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
                        </object>
                    </a>
                </div>
                <div class="col-lg-9 col-md-10 col-sm-6 col-xs-6">

                    <div class="pull-right navbar-collapse hidden-sm hidden-xs">
                        <?php
                            wp_nav_menu(array(
                                        'theme_location'    => 'main_menu',
                                        'container'         => false,
                                        'menu_class'        => 'nav navbar-nav',
                                        'menu_id'           => ''
                                    ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php if (is_front_page()) { ?>
            <?php get_template_part("partials/frontpage", "header"); ?>
        <?php } ?>

        <div class="fx-scroll">
            <div class="fx-mouse">

            </div>
            <div class="fx-line">

            </div>
            <a class="fx-btn-scroll" href="#what-we-do">

            </a>
        </div>
    </header>

    <nav id="fx-wrap-rwd-menu">
        <div class="fx-wrap-menu">
            <button id="fx-toggle-rwd-menu" type="button" class="navbar-toggle collapsed visible-sm-inline-block visible-xs-inline-block" data-toggle="collapse" data-target="#fx-rwd-menu" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="fx-menu" id="fx-rwd-menu">
                <?php
                    wp_nav_menu(array(
                                'theme_location'    => 'rwd_menu',
                                'container'         => false,
                                'menu_class'        => 'fx-nav fx-rwd-menu',
                                'menu_id'           => ''
                            ));
                ?>
            </div>
        </div>
    </nav>
