<?php get_header(); ?>


<div class="wrap-post">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                        <div class="post">
                            <div class="title-post">
                                <h2><?= the_title() ?></h2>
                            </div>
                            <div class="row meta-data">
                                <div class="col-lg-12">
                                    <div class="author">
                                        Author: <span><?= get_the_author() ?></span>
                                    </div>
                                    <div class="date">
                                        Date: <span><?= the_date() ?></span>
                                    </div>
                                    <div class="category">
                                        <?php
                                            $category = get_the_category();
                                        ?>
                                        Category:
                                        <?php $counter = 1; ?>
                                        <?php foreach ($category as $cat_num => $cat_val): ?>
                                            <a href="<?= get_category_link($cat_val->cat_ID) ?>"><?= $cat_val->name ?><?= ($counter < count($category))? ',' : '';  ?></a>
                                            <?php $counter++ ?>
                                        <?php endforeach; ?>
                                    </div>
                                    <?php
                                        $tags = get_the_tags(); if ($tags) {
                                    ?>
                                        <div class="tags">
                                            Tagi
                                            <?php $counter = 1; ?>
                                            <?php foreach ($tags as $tag_num => $tag_val): ?>
                                                <a href="<?= get_tag_link($tag_val->term_id) ?>"><?= $tag_val->name ?><?= ($counter < count($tags))? ',' : '';  ?></a>
                                                <?php $counter++ ?>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="post-content resetcss">
                                <?= the_content(); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-hidden col-xs-hidden">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
