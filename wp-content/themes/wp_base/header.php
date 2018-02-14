<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta charset="<?= bloginfo( 'charset' ); ?>">

    <title><?= bloginfo("name") ?></title>

    <?php wp_head(); ?>
</head>
<?php $frontpage_id = get_option( 'page_on_front' ); ?>
<body <?php body_class(); ?>>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2 col-sm-6 col-xs-6">
                    <a href="<?= bloginfo('url') ?>">
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
            <?php get_template_part("", ""); ?>
        <?php } ?>
    </header>
