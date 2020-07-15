<div class="entry-related">
    <div class="related-title">関連記事</div>
    <?php
    $cate = get_the_category();
    $posts = get_posts(
        array(
            'post_type' => 'post',
            'category' => $cate[0]->term_id,
            'numberposts' => 8,
            'exclude' => $post->ID,
            'orderby' => 'rand',
        )
    );
    ?>
    <?php if ($posts) : ?>
        <div class="related-items">
            <?php foreach ($posts as $post) : ?>
                <?php setup_postdata($post) ?>
                <a class="related-item" href="<?php the_permalink(); ?>">

                    <div class="related-item-img">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('medium');
                        } else {
                            echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                        }
                        ?>
                    </div><!-- /related-item-img -->
                    <div class="related-item-title"><?php the_title() ?>
                    </div><!-- /related-item-title -->
                </a><!-- /related-item -->
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        </div><!-- /related-items -->

    <?php endif; ?>
</div><!-- /entry-related -->