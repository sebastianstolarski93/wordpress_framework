<?php get_header(); ?>

<?php $frontpage_id = get_option( 'page_on_front' ); ?>

<section id="what-we-do">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?= get_field('title_wedo', $frontpage_id) ?></h2>
            </div>
        </div>

        <div class="row">
            <?php if (have_rows('icon_wedo', $frontpage_id)): ?>

                <?php while (have_rows('icon_wedo', $frontpage_id)): the_row(); ?>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <i class="fx-icon <?= the_sub_field('icon', $frontpage_id); ?>"></i>

                        <h3><?= the_sub_field('title', $frontpage_id); ?></h3>
                        <p><?= the_sub_field('subtitle', $frontpage_id); ?></p>
                    </div>
                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>
</section>

<section id="project-managment">
    <div  class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?= get_field('title_project', $frontpage_id) ?></h2>
            </div>
        </div>


        <?php if (have_rows('content_project', $frontpage_id)): ?>

            <?php while (have_rows('content_project', $frontpage_id)): the_row(); ?>
                <div class="row">
                    <?php if (get_sub_field('right_icon', $frontpage_id) == 1): ?>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-push-6 col-md-push-6 col-sm-push-6">
                            <i class="fx-icon <?= the_sub_field('icon', $frontpage_id); ?>"></i>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-pull-6 col-md-pull-6 col-sm-pull-6">
                            <h3><?= the_sub_field('title', $frontpage_id); ?></h3>

                            <p><?= the_sub_field('desc', $frontpage_id); ?></p>
                        </div>
                    <?php else: ?>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <i class="fx-icon <?= the_sub_field('icon', $frontpage_id); ?>"></i>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <h3><?= the_sub_field('title', $frontpage_id); ?></h3>

                            <p><?= the_sub_field('desc', $frontpage_id); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>

        <?php endif; ?>
    </div>
</section>

<section id="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-12 col-xs-12">
                <h2><?= get_field('title_newsletter', $frontpage_id) ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-12 col-xs-12">
                <p class="fx-subtitle-newsletter"><?= get_field('subtitle_newsletter', $frontpage_id) ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-12 col-xs-12">
                <p class="fx-desc-newsletter"><?= get_field('desc_newsletter', $frontpage_id) ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-12 col-xs-12">
                <form action="#">
                    <fieldset>
                        <div class="form-control">
                            <input type="email" name="mailadress" id="fx-email">
                            <label for="fx-email"><?= get_field('placeholder_newsletter', $frontpage_id) ?></label>
                        </div>
                    </fieldset>
                    <fieldset>
                        <button type="submit" class="btn btn-default">
                            <?= get_field('button_newsletter', $frontpage_id) ?>
                        </button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="case-study">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?= get_field('title_case', $frontpage_id) ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div id="carousel-whatdo" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner" role="listbox">
                        <?php if (have_rows('slider_casestudy', $frontpage_id)): ?>
                            <?php $i = 0; ?>
                            <?php while (have_rows('slider_casestudy', $frontpage_id)): the_row(); ?>
                                <div class="item <?php echo ($i == 0 ? 'active' : ''); ?>" data-show-slide="<?= $i ?>">
                                    <h3><?= the_sub_field('title', $frontpage_id); ?></h3>
                                    <p class="fx-subtitle-case">
                                        <strong><?= the_sub_field('subtitle', $frontpage_id); ?></strong>
                                    </p>

                                    <ul class="inline">
                                        <?php $scope = get_sub_field('scope_work', $frontpage_id); ?>

                                        <?php foreach ($scope as $scope_key => $scope_value) { ?>

                                            <?php if ($scope_value == 'icons') { ?>
                                                <li>
                                                    <i class="fx-icon fx-icons"></i>
                                                    <p>icons</p>
                                                </li>
                                            <?php } elseif ($scope_value == 'logo') { ?>
                                                <li>
                                                    <i class="fx-icon fx-logo"></i>
                                                    <p>logo</p>
                                                </li>
                                            <?php } elseif ($scope_value == 'eshop') { ?>
                                                <li>
                                                    <i class="fx-icon fx-shop"></i>
                                                    <p>e-shop</p>
                                                </li>
                                            <?php } elseif ($scope_value == 'website') { ?>
                                                <li>
                                                    <i class="fx-icon fx-website"></i>
                                                    <p>website</p>
                                                </li>
                                            <?php } elseif ($scope_value == 'rwd') { ?>
                                                <li>
                                                    <i class="fx-icon fx-responsive"></i>
                                                    <p>responsive</p>
                                                </li>
                                            <?php } ?>

                                        <?php } ?>
                                    </ul>

                                    <div class="description">
                                        <?= the_sub_field('desc', $frontpage_id); ?>
                                    </div>

                                    <a href="<?= the_sub_field('link', $frontpage_id); ?>" class="btn btn-default">show story</a>
                                </div>
                                <?php $i++ ?>
                            <?php endwhile; ?>

                        <?php endif; ?>
                    </div>

                    <ol class="carousel-indicators">
                        <?php if (have_rows('slider_casestudy', $frontpage_id)): ?>
                            <?php $o = 0; ?>
                            <?php while (have_rows('slider_casestudy', $frontpage_id)): the_row(); ?>
                                <li class="<?php echo ($o == 0) ? 'active' : ''; ?>" data-target="#carousel-whatdo" data-slide-to="<?= $o ?>"></li>
                                <?php $o++; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ol>
                </div>
            </div>
            <div class="col-lg-6 col-md-6  hidden-sm hidden-xs fx-mockup">
                <div class="fx-wrapper-logo">
                    <?php if (have_rows('slider_casestudy', $frontpage_id)): ?>
                        <?php $y = 0; ?>
                        <?php while (have_rows('slider_casestudy', $frontpage_id)): the_row(); ?>
                            <?php $logo_slider = get_sub_field('logo', $frontpage_id) ?>
                            <img data-slide="<?= $y ?>" class="fx-hide <?= ($y == 0) ? 'fx-active' : ''; ?>" src="<?= $logo_slider['url'] ?>" alt="<?= $logo_slider['title'] ?>">
                            <?php $y++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="fx-wrapper-notebook">
                    <?php if (have_rows('slider_casestudy', $frontpage_id)): ?>
                        <?php $y = 0; ?>
                        <?php while (have_rows('slider_casestudy', $frontpage_id)): the_row(); ?>
                            <?php $mockup_slider = get_sub_field('mockup', $frontpage_id) ?>
                            <img data-slide="<?= $y ?>" class="fx-hide <?= ($y == 0) ? 'fx-active' : ''; ?>" src="<?= $mockup_slider['url'] ?>" alt="<?= $mockup_slider['title'] ?>">
                            <?php $y++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="offer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <i class="fx-icon <?= get_field('icon1', $frontpage_id) ?>"></i>

                <p class="fx-counter" data-max-number="<?= get_field('title_icon1', $frontpage_id) ?>" data-speed="<?= get_field('speed1', $frontpage_id) ?>"><span><?= get_field('title_icon1', $frontpage_id) ?></span>%</p>
                <p class="fx-desc-counter"><?= get_field('desc_icon1', $frontpage_id) ?></p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <i class="fx-icon <?= get_field('icon2', $frontpage_id) ?>"></i>

                <p class="fx-counter" data-max-number="<?= get_field('title_icon2', $frontpage_id) ?>" data-speed="<?= get_field('speed2', $frontpage_id) ?>"><span><?= get_field('title_icon2', $frontpage_id) ?></span>+</p>
                <p class="fx-desc-counter"><?= get_field('desc_icon2', $frontpage_id) ?></p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <i class="fx-icon <?= get_field('icon3', $frontpage_id) ?>"></i>

                <p class="fx-counter" data-max-number="<?= get_field('title_icon3', $frontpage_id) ?>" data-speed="<?= get_field('speed3', $frontpage_id) ?>"><span><?= get_field('title_icon3', $frontpage_id) ?></span>+</p>
                <p class="fx-desc-counter"><?= get_field('desc_icon3', $frontpage_id) ?></p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <i class="fx-icon <?= get_field('icon4', $frontpage_id) ?>"></i>

                <p class="fx-counter" data-max-number="<?= get_field('title_icon4', $frontpage_id) ?>" data-speed="<?= get_field('speed4', $frontpage_id) ?>"><span><?= get_field('title_icon4', $frontpage_id) ?></span>+</p>
                <p class="fx-desc-counter"><?= get_field('desc_icon4', $frontpage_id) ?></p>
            </div>
        </div>
    </div>
</section>

<section id="partners">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="fx-slider fx-flex">
                    <object type="image/svg+xml" data="<?= get_template_directory_uri(); ?>/assets/img/home.svg">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/home.png" alt="">
                    </object>

                    <object type="image/svg+xml" data="<?= get_template_directory_uri(); ?>/assets/img/shoper.svg">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/shoper.png" alt="">
                    </object>

                    <object type="image/svg+xml" data="<?= get_template_directory_uri(); ?>/assets/img/home.svg">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/home.png" alt="">
                    </object>

                    <object type="image/svg+xml" data="<?= get_template_directory_uri(); ?>/assets/img/shoper.svg">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/shoper.png" alt="">
                    </object>

                    <object type="image/svg+xml" data="<?= get_template_directory_uri(); ?>/assets/img/home.svg">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/home.png" alt="">
                    </object>

                    <object type="image/svg+xml" data="<?= get_template_directory_uri(); ?>/assets/img/shoper.svg">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/shoper.png" alt="">
                    </object>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
