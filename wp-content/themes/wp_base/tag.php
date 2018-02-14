<?php get_header() ?>


<div class="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 title-blog">
                <h2><?= single_cat_title() ?></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-9 blog-list">
                <?php if (have_posts()):  ?>
                    <?php while (have_posts()): the_post(); ?>
                        <div class="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>
                                        <a href="<?= the_permalink() ?>">
                                            <?= the_title() ?>
                                        </a>
                                    </h2>
                                </div>
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
                            <div class="row description">
                                <?php $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), "large"); if ($thumbnail_url) { ?>
                                    <div class="col-lg-12 img-thumbnail">

                                        <img src="<?= $thumbnail_url ?>" alt="">
                                    </div>
                                <?php } ?>
                                <div class="col-lg-12 desc">
                                    <?php the_excerpt() ?>
                                </div>
                            </div>
                            <div class="row readmore">
                                <div class="col-lg-12">
                                    <a href="<?= the_permalink() ?>" class="btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="col-lg-3">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>
